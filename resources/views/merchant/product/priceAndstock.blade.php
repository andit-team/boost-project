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
              <label for="color_id" class="col-xl-3 col-md-4">Color Family<span class="text-danger"> *</span></label>
              {{-- <select name="color_id" autocomplete="off" class="form-control col-md-8" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> --}}
                  <select name="color_id" autocomplete="off" class="form-control col-md-8" id="selectColor">
                  <option value="">Select Color</option>
                  @foreach($color as $row)
                  <option value="{{ $row->slug }}">{{ $row->name }}</option>
                  @endforeach
              </select> 
          </div>
          <div class="form-group row">
              <label for="color_id" class="col-xl-3 col-md-4"></label>
                <div class="drops">
                    
                </div>
                <div class="inputs"></div>
          </div>

              <span class="btn btn-primary btn-sm pull-left rowAdd" data-row="1"><i class="fa fa-plus"></i> Add row</span>
              <table class="table table-borderd">
                  <thead class="">
                      <tr>
                          <td width="200">Color Family</td>
                          <td colspan="2">Price<span class="text-danger"> *</span></td>
                          <td width="100">Quantity</td>
                          <td>SellerSKU</td>
                          <td></td> 
                      </tr>
                  </thead>
                  <tbody class="newRow">
                      <tr class="firstRow" data-id="0">
                            <td>
                                <select name="color_id[]" class="form-control">
                                    <option value="" disabled>select color</option>
                                    <option value="">asdf as</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" placeholder="regular price" name="price[]"></td>
                            <td>
                                <div class="input-group">
                                    <input type="text" placeholder="special price" readonly class="form-control" name="sprice[]">
                                    <div class="input-group-append" style="cursor: pointer;">
                                        <span class="input-group-text"><span onclick="getmodal(this)"> <i class="fa fa-edit"></i></span></span>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" class="form-control number1" name="qty[]"></td>
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

  {{-- <input type="text" class="datepickerDB form-control"> to <input type="text" class="datepickerDB form-control"> --}}

@push('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        function setSpecialPrices(){
            var spcial_price        = $('#spcial_price').val();
            var spcial_price_start  = $('#spcial_price_start').val();
            var spcial_price_end    = $('#spcial_price_end').val();
            var row = $('#setSpecialPrice').data('id');
            $('tr#row-'+row+' td .input-group input.form-control').val(spcial_price);
        }
        function getmodal(e){
            var row = $(e).closest('tr').data('id');
            $('#setSpecialPrice').data('id',row);
            $('#exampleModalCenter').modal('show');
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
            console.log(color);
        }

        //Drug & Drop script start
        $( "#sortable-red").sortable({
            placeholder: "ui-state-highlight",
            revert: true,
        });

        //dropzone scripts
        $('#selectColor').change(function(){
            var color = $(this).val();
            $('.drops').append(
                `<div id="dropzone-${color}"><label class="mt-3">Color Family: <b>${color}</b></label>
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
            $( "#sortable-"+color ).disableSelection();
            setup("my-awesome-dropzone"+color,color);
            inventoryRows(color);
        });
        Dropzone.autoDiscover = false;

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
                        $('.inputs').append(`<input type="hidden" name="${color}-images[]" id="id${file.size}" value="${file.dataURL}">`);
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
                    $('input[name^="'+color+'-images"]').each(function() {
                        $(this).remove();
                    });
                }
            });    
        }
    </script>
@endpush