@push('css')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .h-100{
            height: 70px !important;
            padding: 2px;
        }
        .drop-area{
            display: flex;
            padding: 10px;
            background: #fdfbfb;
            cursor: pointer;
            border: 2px dashed #ddd !important
        }
        .drop-single{
            border: 1px solid #ddd;
            padding: 5px;
            margin: 5px;
            background: #fff;
            cursor: move;
        }
        .dz-message{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dz-message h2{
            color: #b7b0b0;
            font-weight: 1000;
            font-size: 24px;
        }
        .collpanel{
            width: 672px;
            height: 151px;
        }
        input[type=text],input[type=number],select,.input-group-text,.h-40{
            height: 40px !important;
        }
        .table td {
            padding: 0 !important;
        }
        .rowRemove{
            line-height: 26px;
        }
        .ui-sortable-placeholder { height: 125px; width: 125px; border: 1px dashed; line-height: 1.2em; }
    </style>
@endpush
<div class="card mb-4">
    <h5 class="card-header">Price & Stock</h5>
    <div class="card-body">
        <div class="form-group row">
            <label for="color_id" class="col-xl-3 col-md-4"></label>
            <div id="dropzone-main" class="img-upload-area" data-color="main"><label class="mt-3"><b>Feature Images :</b><span class="text-danger" id="message_main_img"></span></label>
                <div class="border m-0 collpanel drop-area row my-awesome-dropzone-main" id="sortable-main">
                    <span class="dz-message color-main">
                        <h2>Drag & Drop Your Files</h2>
                    </span>
                </div>
                <small>Remember Your featured file will be the first one.</small><br>
            </div>
        </div>

          <div class="form-group row">
              <label for="color_id" class="col-xl-3 col-md-4 mt-1">Color Family<span class="text-danger"> *</span></label>
                  <select name="color_id" autocomplete="off" class="form-control col-md-8" id="selectColor">
                    <option value="">No Color</option>
                    @foreach($color as $row)
                        <option value="{{ $row->slug }}">{{ $row->name }}</option>
                    @endforeach
              </select>
          </div>
          <div class="form-group row">
                <label for="" class="col-xl-3 col-md-4"></label>
                <div class="drops"></div>
                <div class="inputs"></div>
          </div>

              <span class="btn btn-primary btn-sm pull-left rowAdd" data-row="1"><i class="fa fa-plus"></i> Add row</span>
              <table class="table table-borderd">
                  <thead class="">
                      <tr class="inventory-head">

                          <th width="200">Color Family</th>
                          <th colspan="2">Price<span class="text-danger"> *</span></th>
                          <th width="100">Quantity</th>
                          <th>SellerSKU</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody class="newRow">
                      <tr class="firstRow" data-id="0" id="row-0">
                            <td>
                                <select name="inventory_color[]" class="form-control inventory_colors">
                                    <option value="" selected disabled>No color</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" placeholder="Regular price" name="inventory_price[]"></td>
                            <td>
                                <div class="input-group">
                                    <input type="text" placeholder="Special price" readonly class="form-control" name="special_price[]">
                                    <div class="input-group-append" style="cursor: pointer;">
                                        <span class="input-group-text"><span onclick="getmodal(this)"> <i class="fa fa-edit"></i></span></span>
                                    </div>
                                    <div class="days">
                                        <input type="hidden" name="startday[]" class="startday">
                                        <input type="hidden" name="endday[]" class="endday">
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" class="form-control number1" name="inventory_qty[]"></td>
                            <td><input type="text" class="form-control t1" name="seller_sku[]"></td>
                            <td><span class="btn btn-danger rowRemove"><i class="fa fa-trash"></i></span></td>
                        </tr>
                  </tbody>
              </table>

    </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Set Special Price</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table table-striped">
                <tr>
                    <th width="150">Price</th>
                    <td width='5'>:</td>
                    <td><input type="number" id="spcial_price" class="form-control"></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>:</td>
                    <td class="d-flex"><input type="text" id="spcial_price_start" class="datepickerRange form-control"> <span class="p-2 bg-info h-40">To</span> <input type="text" id="spcial_price_end" class="datepickerRange form-control"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" data-id="0" id="setSpecialPrice" class="btn btn-primary" onclick="setSpecialPrices()">Save changes</button>
        </div>
      </div>
    </div>
</div>

@push('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        function setSpecialPrices(){
            var spcial_price        = $('#spcial_price').val();
            var spcial_price_start  = $('#spcial_price_start').val();
            var spcial_price_end    = $('#spcial_price_end').val();
            var row = $('#setSpecialPrice').data('id');
            if(spcial_price_start != '' && spcial_price_end != '' && spcial_price != ''){
                if(Date.parse(spcial_price_start) >= Date.parse(spcial_price_end)){
                    $('#spcial_price_end').val('');
                    alert("Please select a different End Date.");
                }else{
                    $('tr#row-'+row+' td .input-group input.form-control').val(spcial_price);
                    $('tr#row-'+row+' td .input-group div.days input.startday').val(spcial_price_start);
                    $('tr#row-'+row+' td .input-group div.days input.endday').val(spcial_price_end);
                    $('#exampleModalCenter').modal('hide');
                }
            }else{
                alert("Please input all field");
            }

        }
        function getmodal(e){
            var row = $(e).closest('tr').data('id');
            var is_set = parseInt($('tr#row-'+row+' td .input-group input.form-control').val())||0
            if(is_set == 0){
                $('#spcial_price').val('');
                $('#spcial_price_start').val('');
                $('#spcial_price_end').val('');
            }else{
                $('#spcial_price').val(is_set);
                $('#spcial_price_start').val($('tr#row-'+row+' td .input-group div.days input.startday').val());
                $('#spcial_price_end').val($('tr#row-'+row+' td .input-group div.days input.endday').val());
            }
            $('#setSpecialPrice').data('id',row);
            $('#exampleModalCenter').modal('show');
        }

        //get inventories attributes

        function getInventoryAttr(cat_id = 2){
            $.ajax({
                type:"Post",
                dataType: "json",
                url:"{{ url('merchant/get-inventory-attr/')  }}",
                data:{ 'cat_id': cat_id, '_token' : '{{ csrf_token() }}'},
                success:function(data){
                    $('.inventoryAttributes').remove();
                    $('.inventory-head').prepend(data.label);
                    $('.firstRow').prepend(data.option);
                }
            })
        }
        
        // inventories script
        $('.rowAdd').click(function(){
            var rowNo = parseFloat($(this).data("row"))||1;
            var getTr = $('tr.firstRow:first');
            $('tbody.newRow').append("<tr data-id="+rowNo+" id='row-"+rowNo+"' class='removableRow'>"+getTr.html()+"</tr>");
            var defaultRow = $('tr.removableRow:last');
            $(".rowAdd").data("row",rowNo+1);
        });

        $(document).on("click", "span.rowRemove ", function () {
            $(this).closest("tr.removableRow").remove();
        });

        function inventoryRows(color){
            var option = `<option value="${color}" data-color="${color}">${color}</option>`;
            $('.inventory_colors').each(function(){
                $(this).append(option);
            });
        }

        //Drug & Drop script start
        $( "#sortable-red").sortable({
            placeholder: "ui-state-highlight",
            revert: true,
        });

        //dropzone scripts
        $('#selectColor').change(function(){
            var flag = 0;
            var color = $(this).val();
            $('.img-upload-area').each(function(){
                if(color == $(this).data('color')){
                    flag = 1;
                }
            });
            if(flag == 0){
                $('.drops').append(
                    `<div id="dropzone-${color}" class="img-upload-area" data-color="${color}"><label class="mt-3">Color Family: <b>${color}</b></label>
                    <span class="btn btn-sm text-danger" onclick="removeColorItem('${color}')"><i class="fa fa-trash"></i></span>
                    <div class="border m-0 collpanel drop-area row my-awesome-dropzone${color}" id="sortable-${color}">
                        <span class="dz-message color-${color}">
                            <h2>Drag & Drop Your Files</h2>
                        </span>
                    </div>
                    <small>Remember Your featured file will be the first one.</small><br></div>`
                );
                $( "#sortable-"+color ).sortable({
                    placeholder: "ui-state-highlight",
                    revert: true,
                });
                $("#sortable-"+color ).disableSelection();
                setup("my-awesome-dropzone"+color,color);
                inventoryRows(color);
            }else{
                swal("The selected color already been exits", {icon: "warning",buttons: false,timer: 2000});
            }
        });
        Dropzone.autoDiscover = false;

        $( "#sortable-main" ).sortable({
            placeholder: "ui-state-highlight",
            revert: true,
        });
        $("#sortable-main").disableSelection();
        setup("my-awesome-dropzone-main",'main');

        //function
        function setup(id,color) {
            let options = {
            autoProcessQueue: false,
            url : '/',
            thumbnailHeight: 200,
            thumbnailWidth: 300,
            maxFilesize: 100,
            maxFiles: 5,
            dictResponseError: "Server not Configured",
            dictFileTooBig: "File too big. Must be less than ",
            dictCancelUpload: "",
            acceptedFiles: ".png,.jpg,.jpeg",
            init: function() {
                var self = this;

                self.on("addedfile", function(file) {
                    $('.color-'+color).addClass('d-none');
                });

                self.on("dragenter", function(event) {
                    $('#sortable-'+color).css('background-color','#fff');
                });
                self.on("dragleave", function(event) {});

                self.on("thumbnail", function(file){
                    if(file.size < 3000000){
                        $('.inputs').append(`<input type="hidden" class="image-class-${color}" name="images[${color}][]" id="id${file.size}" value="${file.dataURL}">`);
                    }else{
                        swal("Maximum size reached", {icon: "warning",buttons: false,timer: 2000});
                        this.removeFile(file);
                    }
                });

                self.on("removedfile", function(file) {
                    var i = 0;
                    $('.color-'+color+'-element').each(function(){
                        i = i+1;
                    });
                    if(i === 0){
                        $('.color-'+color).removeClass('d-none');
                    }
                    $('#id'+file.size).remove();
                });

                // Send file starts
                self.on("sending", function(file) {
                    // console.log("upload started", file);
                });

                self.on("complete", function(file, response) {
                    if (file.name !== "442343.jpg") {
                        //this.removeFile(file);
                    }
                });

                self.on("maxFilesize", function(file, response) {
                    swal("Maximum size reached", {icon: "warning",buttons: false,timer: 2000});
                    this.removeFile(file);
                });

                self.on("maxfilesexceeded", function(file, response) {
                    swal("Maximum file reached", {icon: "warning",buttons: false,timer: 2000});
                    this.removeFile(file);
                });

                self.on("addedfile", function(file) {
                    const pattern = /\d{6}(\.)(jpg|jpeg|png)/;
                    if (!pattern.test(file.name)) {
                    //   this.removeFile(file);
                    }
                });
            },

            previewTemplate: `
                <div class="drop-single color-${color}-element ui-state-default">
                <a href="javascript:undefined;" data-dz-remove=""><i class="fa fa-trash-o"></i>&nbsp;<span>Remove</span></a>
                <br/>
                <span class="dz-upload" data-dz-uploadprogress></span>
                <img class="h-100" data-dz-thumbnail/>
                </div>`
            };
            var myDropzone = new Dropzone(`.${id}`, options);
        }

        function removeColorItem(color){

            swal({
                title: "Are you sure to delete it?",
                text: "To continue this action!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                        swal("Your action has beed done! :)", {
                        icon: "success",
                        buttons: false,
                        timer: 1000
                    });
                    $('#dropzone-'+color).remove();
                    $('input[name^="images['+color+']"]').each(function() {
                        $(this).remove();
                    });
                    document.querySelectorAll('.newRow option').forEach(item => {
                        if(item.innerHTML == color){
                            if(item.selected == true){
                                item.style.background = 'red';
                                item.style.color = 'white';
                                item.parentElement.style.border = '2px solid red';
                            }else{
                                item.remove()
                            }
                        }
                    })
                }
            });
        }
    </script>
@endpush
