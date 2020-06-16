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
        .ui-state-highlight { height: 125px; width: 125px; border: 1px dashed; line-height: 1.2em; }
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
          <div class="form-group">
              <span class="btn btn-primary btn-sm pull-left rowAdd"><i class="fa fa-plus"></i> Add row</span>
          </div>
          <div class="form-group">
              <table class="table">
                  <thead>
                      <tr>
                          <td>Color Family</td>
                          <td>Price<span class="text-danger"> *</span></td>
                          <td>Special Price</td>
                          <td>Quantity</td>
                          <td>SellerSKU</td>
                          <td>Shop SKU</td>
                          <td>Free Items</td> 
                          <td></td> 
                      </tr>
                  </thead>
                  <tbody class="newRow">
                      <tr class="firstRow">
                          <td>
                              <span class="tbSelectbox">
                                  {{-- <select class="form-control tbSelectbox" name="color_id[]">
                                      <option value="">Select color</option>
                                  </select> --}}
                                  <input type="text" class="form-control tbSelectbox" name="color_id[]">
                              </span>
                          </td>
                          <td>
                              <span class="number1">
                                  <input type="number" class="form-control number1" name="price[]">
                              </span>
                          </td>
                          <td class="pop">  
                              <button type="button" class="" data-toggle="tooltip" data-placement="top" data-original-title="Click any question mark icon to get help and tips with specific tasks" aria-describedby="tooltip">
                                  <i class="fa fa-edit"></i> 
                                </button>
                          </td>
                          <td>
                              <span class="number1">
                                  <input type="number" class="form-control number1" name="qty[]">
                              </span>
                          </td>
                          <td>
                              <span class="t1">
                                  <input type="text" class="form-control t1" name="seller_sku[]">
                              </span>
                          </td>
                          <td></td>
                          <td>
                              <span class="t1">
                                  <input type="text" class="form-control t1" name="free_item[]">
                              </span>
                          </td>
                          <td><span class="btn btn-danger btn-secondery pull-right rowRemove"><i class="fa fa-trash"></i></span></td>
                      </tr>
                  </tbody>
              </table>
          </div>
    </div>
</div>


@push('js')
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>

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
          console.log('enter :'+color);
          $('#sortable-'+color).css('background-color','#fff');
      });
      self.on("dragleave", function(event) {
      });

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
        // console.log('left :'+i);
        // self.on("thumbnail", function(file){
          $('#id'+file.size).remove();
          // console.log(file.dataURL);
          // $('.inputs').append(`<input type="hidden" name="${color}-images[]" id="${file.name+file.size+file.lastModified+file.height+file.width}" value="${file.dataURL}">`);
        // });
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
        //alert("too big");
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

    // <span data-dz-name></span>
    previewTemplate: `
        <div class="drop-single color-${color}-element ui-state-default">
          <a href="javascript:undefined;" data-dz-remove=""><i class="fa fa-trash-o"></i>&nbsp;<span>Remove</span></a>
          <br/>
          <span class="dz-upload" data-dz-uploadprogress></span>
          <img class="h-100" data-dz-thumbnail/>
        </div>`
    };
//   $(".my-awesome-dropzonered:first-child").css("background-color", "yellow");
  var myDropzone = new Dropzone(`.${id}`, options);
}

function removeColorItem(color){
    
    // swal("Item Status has been changed to "+status+"!", {icon: "success",buttons: false,timer: 1500});
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

// inventories script
        $('.rowAdd').click(function(){
            var getTr = $('tr.firstRow:first');  
            $('tbody.newRow').append("<tr class='removableRow'>"+getTr.html()+"</tr>");
            var defaultRow = $('tr.removableRow:last'); 
        });

        $(document).on("click", "span.rowRemove ", function () {
            $(this).closest("tr.removableRow").remove();
        });
    </script>
@endpush