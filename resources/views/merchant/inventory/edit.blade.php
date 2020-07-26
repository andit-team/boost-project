@extends('layouts.master')

@section('content')
    @push('css')
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            /* .inputfield{
                height: 45px!important;
            } */
            .bottom{
                margin-bottom: 25px;
            }
           
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

        .dropzone-previews { 
            width: 1020px; 
        }
   
        </style>
    @endpush
    @include('elements.alert')
    @component('layouts.inc.breadcrumb')
        @slot('pageTitle')
            Vendor Dashboard
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
        @endslot
    @endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">

            @include('layouts.inc.sidebar.vendor-sidebar',[$active='inventory'])

            <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Edit Inventory</h3>
                    <form class="theme-form" action="{{ url('merchant/inventories/update/'.$inventory->slug) }}" method="post" id="validateForm">
                        @csrf
                        @method('put') 
                        <div class="form-row">

                            <div class="col-md-6">
                                <label for="product_id">Product <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('product_id') }}</span>
                                <select name="product_id" class="form-control px-10" id="product_id"  autocomplete="off" disabled>
                                    <option value="" selected disabled>Select Product</option>
                                    @foreach ($item as $row)
                                        <option data-cat="{{$row->category_id}}" value="{{ $row->id }}" @if($row->id == $inventory->product_id) selected @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="color_id">Color <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('color_name') }}</span>
                                <select name="color_name" class="form-control" id="color_id"  autocomplete="off">
                                    <option value="" selected disabled>Select Color</option>
                                    @foreach ($color as $row)
                                        <option  value="{{ $row->slug }}"@if($row->slug == $inventory->color_name) selected @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12"> 
                                <label for="" class="col-xl-3 col-md-8"></label>
                                <div class="drops dropzone-previews"></div>
                                <div class="inputs"></div> 
                            </div>

                            <div class="col-md-12"> 
                                
                               @foreach($inventoryMeta as $meta)
                               @if($loop->first)
                               @if($meta->name == 'size')
                               <label for="size_id">Size <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('size_id') }}</span>
                               <input type="hidden" name="name" value="{{ $inventoryAttriCapa->attribute->name }}">
                                <select name="value" class="form-control size inputfield" id="size_id" autocomplete="off">
                                    <option value="" selected disabled>Select Size</option>
                                    @foreach ($productAttriSize as $row)
                                        <option value="{{ $row->option }}" @if($row->option == $inventory->invenMeta->value) selected @endif>{{$row->option}}</option>
                                    @endforeach
                                </select>
                                @else
                                @endif
                                @endif
                                @endforeach 
                            </div>
                            <div class="col-md-12"> 
                                @foreach($inventoryMeta as $inv)
                                @if($loop->first)
                                @if($inv->name == 'storage Capacity')
                                <label for="size_id">Storage Capacity <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('size_id') }}</span>
                                <input type="hidden" name="name" value="{{ $inventoryAttriCapa->attribute->name }}">
                                <select name="value" class="form-control capacity inputfield" id="size_id" autocomplete="off">
                                    <option value="" selected disabled>Select Capacity</option>
                                    @foreach ($productAttriCapa as $row)
                                        <option value="{{ $row->option }}" @if($row->option == $inventory->invenMeta->value) selected @endif>{{$row->option}}</option>
                                    @endforeach
                                </select>
                                @else
                                @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="price">Price <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('Price') }}</span>
                                <input type="number" class="form-control inputfield" name="price" id="price" value="{{ old('price',$inventory->price) }}">
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="qty_stock">Stock Quantity <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('qty_stock') }}</span>
                                <input type="number" class="form-control inputfield" name="qty_stock" id="qty_stock" value="{{ old('qty_stock',$inventory->qty_stock) }}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <h4>Special price (optional)</h4>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <label for="special_price">Special price</label>
                                <input type="number" class="form-control inputfield" name="special_price" id="special_price" value="{{ old('special_price',$inventory->special_price) }}">
                            </div>

                            <div class="col-md-6">
                                <label for="" >Special price Period</label>
                                <div class="input-group">
                                    <input type="text" id="spcial_price_start" name="start_date" class="datepickerRange form-control inputfield" value="{{ old('start_date',$inventory->start_date) }}"><span class="input-group-addon p-2 bg-success bottom">To</span><input type="text" id="spcial_price_end" name="end_date" class="datepickerRange form-control inputfield" value="{{ old('end_date',$inventory->end_date) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
@push('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    {{-- <script>

        //Rendering Main images into Dropzone
        $( "#sortable-main" ).sortable({
            placeholder: "ui-state-highlight",
            revert: true,
        });
        $("#sortable-main").disableSelection();
        // setup("my-awesome-dropzone-main",'main');
        var mockFile = [];
        @foreach($itemImages->['main']->product->inventory as $img)
            mockFiles = {
                name:'img-'+'{{$img->color_slug}}',
                size:{{$img->id}},
                dataURL: "{{asset('/')}}"+"{{$img->org_img}}"
            }
            mockFile.push(mockFiles);
        @endforeach
        setup("my-awesome-dropzone-main",'main',mockFile);

        //Rendering Other images into Dropzone
        @foreach($itemImages as $color=>$imges)
        mockFile = [];

        @foreach($imges as $img)
            mockFiles = {
                name:'img-'+'{{$img->color_slug}}',
                size:{{$img->id}},
                dataURL: "{{asset('/')}}"+"{{$img->org_img}}"
            }
            mockFile.push(mockFiles);
        @endforeach
        @if($color != 'main')
            appendDrops('{{$color}}',mockFile);
            mockFile = [];
        @endif
        @endforeach






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
            defaultRow.find('select.inventory_colors').val('');
            defaultRow.find('input.regulerPrice').val('');
            defaultRow.find('input.special_price').val('');
            defaultRow.find('input.number1').val('');
            defaultRow.find('input.t1').val('');
            $(".rowAdd").data("row",rowNo+1);
        });

        $(document).on("click", "span.rowRemove ", function () {
            $(this).closest("tr.removableRow").remove();
            var thisRow = $(this).parents("tr");
            
        });

        function inventoryRows(color){
            $('.inventory_colors').each(function(){
                var sel = (color === $(this).data('sel'))?'selected':'';
                var option = `<option value="${color}" ${sel} data-color="${color}">${color}</option>`;
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
                appendDrops(color);
            }else{
                swal("The selected color already been exits", {icon: "warning",buttons: false,timer: 2000});
            }
        });
        function appendDrops(color,mockFile=''){
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
                setup("my-awesome-dropzone"+color,color,mockFile);
                inventoryRows(color);
        }

        Dropzone.autoDiscover = false;

        
        //function
        function setup(id,color,mockFile='') {
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
                        // console.log(file);
                        var i = 0;
                        $('.color-'+color+'-element').each(function(){
                            i = i+1;
                        });
                        if(i > 5){
                            swal("Maximum Five file are allowed", {icon: "warning",buttons: false,timer: 2000});
                            this.removeFile(file);
                            $('#id'+file.size).remove();
                        }

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


                    // Create the mock file:
                    // var mockFile = [
                    //     { name: "Filename", size: 12345 , dataURL:"http://localhost/andbaazar/public/uploads/shops/logos/shop-4.png"},
                    //     { name: "Filename", size: 12345 , dataURL:"http://localhost/andbaazar/public/uploads/shops/logos/shop-4.png"}
                    // ];

                    if(mockFile != ''){
                        mockFile.forEach(mockFile=>{
                            self.emit("addedfile", mockFile);
                            self.emit("thumbnail", mockFile, mockFile.dataURL);
                        });
                    }

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
    </script> --}}
@endpush

