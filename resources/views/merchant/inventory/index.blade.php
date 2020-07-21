@extends('merchant.master')
@section('content')
@push('css')
<style>
    .inputfield{
        height: 45px!important;
    }
</style>
@endpush
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='inventory'])
        <div class="col-md-9">
            <h3>Added Inventory</h3>
            <form class="theme-form" action="{{ route('inventory.store') }}" method="post" id="validateForm">
                @csrf
                    <div class="form-row">

                        <div class="col-md-6">
                            <label for="product_id">Product <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('product_id') }}</span>
                            <select name="product_id" class="form-control px-10" id="product_id"  autocomplete="off">
                                <option value="" selected disabled>Select Product</option>
                                @foreach ($item as $row)
                                    <option data-cat="{{$row->category_id}}" value="{{ $row->id }}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="color_id">Color <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('color_id') }}</span>
                            <select name="color_id" class="form-control" id="color_id"  autocomplete="off" id="selectColor">
                                <option value="" selected disabled>Select Color</option>
                                @foreach ($color as $row)
                                  <option value="{{ $row->id }}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            {{-- <div class="form-group row"> --}}
                                <label for="" class="col-xl-3 col-md-4"></label>
                                <div class="drops"></div>
                                <div class="inputs"></div>
                          {{-- </div> --}}
                        </div>

                        <div class="col-md-6">
                            <label for="size_id" class="siz">Size <span class="text-danger "> *</span></label><span class="text-danger">{{ $errors->first('size_id') }}</span>
                            <input type="hidden" name="name" value="{{ $inventoryAttriSize->attribute->name }}">
                            <select name="value" class="form-control size" id="size_id" autocomplete="off">
                                <option value="" selected disabled>Select Size</option>
                                @foreach ($productAttriSize as $row)
                                    <option value="{{ $row->option }}">{{$row->option}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="size_id" class="capa">Storage Capacity <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('size_id') }}</span>
                            <input type="hidden" name="name" value="{{ $inventoryAttriCapa->attribute->name }}">
                            <select name="value" class="form-control capacity" id="size_id" autocomplete="off">
                                <option value="" selected disabled>Select Size</option>
                                @foreach ($productAttriCapa as $row)
                                    <option value="{{ $row->option }}">{{$row->option}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="price">Price <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('Price') }}</span>
                            <input type="number" class="form-control inputfield" name="price" id="price" value="{{ old('price') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="qty_stock">Stock Quantity <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('qty_stock') }}</span>
                            <input type="number" class="form-control inputfield" name="qty_stock" id="qty_stock" value="{{ old('qty_stock') }}">
                        </div>
                        <div class="col-md-12 mt-2">
                            <h4>Special price (optional)</h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="special_price">Special price</label>
                            <input type="number" class="form-control inputfield" name="special_price" id="special_price" value="{{ old('special_price') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="" >Special price Period</label>
                            <div class="input-group">
                             <input type="text" id="spcial_price_start" name="start_date" class="datepickerRange form-control inputfield" value="{{ old('start_date') }}"><span class="input-group-addon p-2 bg-success bottom" >To</span><input type="text" id="spcial_price_end" name="end_date" class="datepickerRange form-control inputfield" value="{{ old('end_date') }}">
                        </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button class="btn btn-sm btn-solid" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            <hr>
            <section class="tab-product m-0">
                <div class="row">
                    {{-- <a href="{{ url('merchant/inventories/new') }}" class="btn btn-sm btn-solid">add inventorys</a> --}}
                    <div class="col-sm-12 col-lg-12">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Active</a>
                                <div class="material-border"></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Out of Stock</a>
                                <div class="material-border"></div>
                            </li>
                        </ul>
                        <div class="tab-content nav-material" id="top-tabContent">
                            <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body">
                                        <div class="top-sec w-50">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <select name="" id="" class="form-control">
                                                <option value="">Category one</option>
                                                <option value="">category two</option>
                                            </select>
                                        </div>
                                        <table class="table-responsive-md table mb-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Color</th>
                                                    <th scope="col" class="text-left">product name</th>
                                                    <th scope="col" class="text-right">price</th>
                                                    <th scope="col" class="text-right">stock</th>
                                                    <th scope="col" class="text-right">sales</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($inventories as $row)
                                                    <tr>
                                                        <td>{{$row->color->name}}</td>
                                                        <td class="text-left">{{$row->item->name}}</td>
                                                        <td class="text-right">{{number_format($row->price,2)}}</td>
                                                        <td class="text-right">{{$row->qty_stock}}</td>
                                                        <td class="text-right">2000</td>
                                                        <td class="d-flex justify-content-between">
                                                            <ul>
                                                                <li><a href="{{ url('merchant/inventories/update/'.$row->slug.'/invertoryupdate') }}" ><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i> </button></a></li>
                                                                <li>
                                                                    <form action="{{ url('/merchant/inventories/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="7">No Product found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body">
                                        <div class="top-sec w-50">
                                            <input type="text" class="form-control h-48" placeholder="Search">
                                            <select name="" id="" class="form-control">
                                                <option value="">Category one</option>
                                                <option value="">category two</option>
                                            </select>
                                        </div>
                                        <table class="table-responsive-md table mb-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Color</th>
                                                    <th scope="col" class="text-left">product name</th>
                                                    <th scope="col" class="text-right">price</th>
                                                    <th scope="col" class="text-right">stock</th>
                                                    <th scope="col" class="text-right">sales</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($inventories as $row)
                                                    <tr>
                                                        <td>{{$row->color->name}}</td>
                                                        <td class="text-left">{{$row->item->name}}</td>
                                                        <td class="text-right">{{number_format($row->price,2)}}</td>
                                                        <td class="text-right">{{$row->qty_stock}}</td>
                                                        <td class="text-right">2000</td>
                                                        <td class="d-flex justify-content-between">
                                                            <ul>
                                                                <li><a href="{{ url('merchant/inventories/update/'.$row->slug.'/invertoryupdate') }}" ><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i> </button></a></li>
                                                                <li>
                                                                    <form action="{{ url('/merchant/inventories/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="7">No Product found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
      </div>
      </div>
   </div>
</section>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.size').hide();
            $('.capacity').hide();
            $('.siz').hide();
            $('.capa').hide();
            $('#product_id').on('change',function () {
                var cat = $(this).find(':selected').data('cat');
            console.log(cat);
                if(cat == 2){
                    $('.size').hide();
                    $('.siz').hide();
                    $('.capacity').show();
                    $('.capa').show();
                }
                if(cat == 3){
                    $('.size').show();
                    $('.siz').show();
                    $('.capacity').hide();
                    $('.capa').hide();
                }
                if(cat != 2 && cat != 3){
                    $('.size').hide();
                    $('.siz').hide();
                    $('.capacity').hide();
                    $('.capa').hide();
                }
            })
        });

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




