@extends('merchant.master')
@section('content')
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='inventory'])
        <div class="col-md-9">
            <form class="theme-form row" action="{{ route('sellerUpdate') }}" method="post" enctype="multipart/form-data" id="validateForm">
                @csrf
                <div class="form-group col-sm-6">
                    <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    <input type="text" class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name','dsf') }}" id="" placeholder="Firest Name">
                </div>
            </form>
            {{-- <form action="" class="theme-form row">
                @csrf
                <div class="form-group">
                    <label for="">Products</label>
                    <select name="" class="form-conrtol" id="">
                        <option value="">Product One</option>
                        <option value="">Product One</option>
                        <option value="">Product One</option>
                        <option value="">Product One</option>
                        <option value="">Product One</option>
                    </select>
                </div>
            </form> --}}

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



