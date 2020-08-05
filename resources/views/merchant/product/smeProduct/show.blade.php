@extends('admin.layout.master')
@section('content')
@include('elements.alert')
<style>
    .imagestyle{
        width: 100px;
        height: 100px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    }
    .m-l-approve{
        margin-left:100px; margin-top:-39px;
    }
    .m-l-reject{
        margin-left:232px; margin-top:-39px;
    }
    .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
</style>
@component('admin.layout.inc.breadcrumb')
    @slot('pageTitle')
        Product Detail
    @endslot
    @slot('page')
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
    @endslot
@endcomponent


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="row product-page-main card-body">
                <div class="col-xl-4">

                    <div class="product-slider owl-carousel owl-theme" id="sync1">

                        @foreach ($productImage as $row)
                            <div class="item"><img id="image-rander" src="{{ !empty($row->org_img) ? asset($row->org_img) : asset('/uploads/shops/products/product.png') }}" alt="" class="blur-up lazyloaded"></div>
                        @endforeach
                    </div>
                    <div class="owl-carousel owl-theme" id="sync2">
                        @foreach ($productImage as $row)
                            <div class="item"><img id="image-loop" src="{{ !empty($row->org_img) ? asset($row->org_img) : asset('/uploads/shops/products/product.png') }}" alt="" class="blur-up lazyloaded"></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product-page-details product-right mb-0">
                        <h2>{{ucfirst($product->name)}}</h2>
                        <hr>
                        <h6 class="product-title">product details</h6>
                        <p>{!! $product->description !!}</p>
                        <h6 class="product-title mt-1">Product Category</h6>
                        <p>{{$product->category->name}}</p>
                        <div class="product-price digits mt-2">
                            {{-- <h3>$26.00 <del>$350.00</del></h3> --}}
                            <h3>${{$product->price}}</h3>
                        </div>
                        <ul class="color-variant">
                            @foreach($imageColor as $row)
                             <li class="imagecolor" data-color="{{ $row->color_slug }}"  style="background: {{ $row->color_slug }}"></li> 
                            @endforeach
                        </ul>
                        <hr>
                        <div class="size-box">
                            <ul>
                                @foreach($productCapasize as $row)
                                @if($row->name == 'storage Capacity')
                                <li>{{ $row->value }}</li>
                                @elseif($row->name == 'size')
                                <li>{{ $row->value }}</li>
                                @endif
                                @endforeach 
                            </ul>
                        </div>
                        <hr>
                        <div class="m-t-15">
                            <a class="btn btn-success" href="{{ URL::previous() }}">back</a>
                            <!-- <a href="{{ url('andbaazaradmin/sme/products') }}"  class="btn btn-success">Back</a> -->
                            @if($product->status == 'Active') 
                            <label class="badge badge-pill badge-info p-3">Approved</label>
                            @elseif($product->status == 'Reject') 
                            <label class="badge badge-pill badge-primary p-3">Rejected</label>
                            <div class="form">
                                <h6  class="product-title mt-3">Reject description</h6>
                                <p>{{$product->rej_desc }}</p>
                            </div>
                            @elseif($product->status == 'Pending')
                            <div class="m-l-approve">
                            <form action="{{ url('merchant/product/approvement/'.$product->slug) }}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                @csrf
                                <button type="submit" class="btn btn-warning">Approve</button>
                            </form>
                            </div>
                            <div>
                                <div class="m-l-reject">
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
                                {{-- @endif --}}
                            </div>
                            @endif
                        </div>
                </div>
            </div>
                    </div>
                </div>
{{--                <div class="col-xl-2 text-center">--}}
{{--                    <div class="product-page-details product-right mb-0 border m-t-40">--}}
{{--                        <div class="profile-top">--}}
{{--                            <div class="profile-image text-center">--}}
{{--                                <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="profile-detail text-center">--}}
{{--                                <h5>Fashion Store</h5>--}}
{{--                                <h6>750 followers | 10 review</h6>--}}
{{--                                <h6>mark.enderess@mail.com</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
@endsection

@push('js')
 <script>
     $(document).ready(function(){
         $('.imagecolor').on('click',function(){
            var imgcolor = $(this).data('color'); 

            $.ajax({
                type:"GET",
                url:"{{url('andbaazaradmin/color-image/{color_slug}')}}",
                data:{'imgcolor':imgcolor},
                success:function(data){ 
                    $('img#image-rander').attr('src','{{asset("/")}}/'+data[0].org_img);
                    $('img#image-loop').attr('src','{{asset("/")}}/'+data[1].org_img);  
                }
            }) 
         })
     });
 </script>
@endpush