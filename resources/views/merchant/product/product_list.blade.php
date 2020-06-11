@extends('admin.layout.master')

@section('content')
@push('css')
<style> 
    .fa{
        padding:4px;
      font-size:16px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
  Product List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Product List</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Product List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                 <th width="50">Sl</th>
                                 <th >Image</th>
                                 <th >Name</th>
                                 <th >Category</th>
                                 <th > Color</th>
                                 <th >Size</th>                              
                                 <th  class="text-center">Action</th>
                              </tr>
                          </thead>                     
                    </table>
                  </div>
                </div>
            </div>          
        </div>
    </div>
@endsection

{{--
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
               
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    @endpush --}}
