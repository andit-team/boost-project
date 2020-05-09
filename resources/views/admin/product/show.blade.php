@extends('admin.layout.master')

@section('content')
<style> 
    .imagestyle{
        width: 100px;
        height: 100px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    }  
</style>
    <div class="page-body">

      

        <!-- Container-fluid starts-->    
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Show Product</h4>
                        <h6 class="card-subtitle">Product</h6>
                        <hr class="hr-borderd">
                        <div class="row pt-3">
                            <div class="col-md-4 text-right"> 
                                @foreach ($product->itemimage as $row) 
                                    @if(!empty( $row->list_img))
                                    <img class="imagestyle" src="{{ asset('/uploads/product_image/'. $row->list_img )}}"></td>
                                @else
                                    <img class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}">
                                @endif 
                                @endforeach 
                            </div>
                            <div class="col-md-8 text-left">
                                <h3 class="display-5 pt-1">{{ucfirst($product->name)}}</h3> 
                                <table class="table table-striped m-t-40">
                                    <tr>
                                        <td width='200'>category</td>
                                        <td  width='5'>:</td>
                                        <td>{{$product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Model No</td>
                                        <td>:</td>
                                        <td>{{$product->model_no}}</td>
                                    </tr>
                                    <tr>
                                        <td>Made In</td>
                                        <td>:</td>
                                        <td>{{$product->made_in}}</td>
                                    </tr>
                                    <tr>
                                        <td>Materials</td>
                                        <td>:</td>
                                        <td>{{$product->materials}}</td>
                                    </tr>
                                    <tr>
                                        <td>Orginal Price</td>
                                        <td>:</td>
                                        <td>{{$product->org_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td>
                                        <td>{{$product->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Label</td>
                                        <td>:</td>
                                        <td>{{$product->labeled}}</td>
                                    </tr>
                                    <tr>
                                        <td>Video Url</td>
                                        <td>:</td>
                                        <td>{{$product->video_url}}</td>
                                    </tr>
                                    <tr>
                                        <td>Minum Order</td>
                                        <td>:</td>
                                        <td>{{$product->min_order}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Order Quantety</td>
                                        <td>:</td>
                                        <td>{{$product->total_order_qty}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pack Id</td>
                                        <td>:</td>
                                        <td>{{$product->pack_id}}</td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-left: 200px;">
                        <label class="col-xl-3 col-md-4"></label>
                        <div class="checkbox checkbox-primary col-md-4">
                            <a href="{{ url('merchant/product/adminIndex') }}"  class="btn btn-primary">Back</a> 
                        </div>
                        <div class="checkbox checkbox-primary col-md-4" style="margin-left: -400px">
                        @if($product->status == 'Active') 
                        <button type="button" class="btn btn-info">Approved</button>   
                        @elseif($product->status == 'Reject')
                        <button type="button" class="btn btn-danger">Rejected</button>
                        @elseif($product->status == 'Inactive')
                        <div class="checkbox checkbox-primary col-md-4" style="margin-left: -10px">
                        <form action="{{ url('merchant/product/approvement/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                            @csrf
                            <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $product->id }})">Approve</button>
                        </form>
                        <div>
                        <div class="checkbox checkbox-primary col-md-4" style="margin-left: 150px; margin-top: -40px"> 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                        </div>     
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('merchant/product/rejected/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Description :</label>
                                                        <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" required></textarea>
                                                    </div> 
                                                </div>
                                                <div class="modal-footer"> 
                                                    <button type="submit" class="btn btn-primary">Reject</button>
                                                </form>
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                         
                        {{-- @elseif($product->status != 'Reject')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('merchant/product/rejected/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                            @csrf
                                            @method('put')
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                    <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" required></textarea>
                                                </div> 
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="submit" class="btn btn-primary">Reject</button>
                                            </form>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> --}}
                        @endif
                        </div>
                    
                        {{-- <div class="checkbox checkbox-primary col-md-4" style="margin-left: -350px">
                            @if($product->status == 'Reject') 
                            <button type="button" class="btn btn-danger">Rejected</button>   
                            @else
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('merchant/product/rejected/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Description :</label>
                                                        <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" required></textarea>
                                                    </div> 
                                                </div>
                                                <div class="modal-footer"> 
                                                    <button type="submit" class="btn btn-primary">Reject</button>
                                                </form>
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>  --}}
                </div> 
            </div>
    
       

    {{-- </div> --}}
@endsection
