@extends('admin.layout.master')

@section('content')
    <style>
        .imagestyle{
            width: 50px;
            height: 50px;
            border-width: 4px 4px 4px 4px;
            border-style: solid;
            border-color: #ccc;
        }
    </style>
    @include('admin.elements.alert')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Product List
                                <small>Multikart Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Physical</li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row products-admin ratio_asos">
                @foreach($item as $row)
                <div class="col-xl-3 col-sm-6">
                    
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    @foreach($row->itemimage as $itemimg)
                                    @if($loop->first)
                                    <a href="{{ url('/merchant/product/'.$row->slug) }}"><img src="{{ asset('/uploads/product_image/'.$itemimg->list_img ) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    @endif
                                    @endforeach
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="{{ url('/merchant/product/'.$row->slug) }}">
                                    <h6>{{ $row->name}}</h6>
                                </a>
                                <h4>${{$row->price}}</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
                @endforeach
                {{-- <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/electronics/product/1.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$600.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/furniture/product/4.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$800.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/fashion/product/17.jpg" class="img-fluid bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$650.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/furniture/product/3.jpg" class="img-fluid bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$650.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/fashion/pro/1.jpg" class="img-fluid bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$650.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/furniture/product/10.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$600.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#"><img src="{{asset('')}}/assets/images/goggles/product/4.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <a href="#">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$600.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Order</h5>
                    </div>
                    <div class="card-body">
                        <table class="table" id="example">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th> 
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead> 
                            <tbody>
                                @php $i=0; @endphp
                                @foreach($item as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        @foreach($row->itemimage as $itemimg)
                                        
                                        @if(!empty($itemimg->list_img))
                                           <img class="imagestyle" src="{{ asset('/uploads/product_image/'.$itemimg->list_img ) }}">
                                        @else
                                            <img class="imagestyle" src="{{ asset('/uploads/product_image/user.png') }}">
                                        @endif
                                        
                                        @endforeach
                                    </td>
                                    <td>{{ $row->name}}</td>
                                    <td>{{ $row->category->name }}</td> 
                                    <td>{{ $row->price}}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="{{ url('/merchant/product/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-check"></i> Approve </a> </li>
                                        </ul>
                                    </td>
                                    @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@push('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    @endpush
