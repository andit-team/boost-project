@extends('merchant.master')
@section('content')
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='inventory'])
        <div class="col-md-9">
          <div class="card dashboard-table mt-0">
              <div class="card-body">
                  <div class="top-sec">
                      <h3>Inventories</h3>
                      <a href="{{ url('merchant/inventories/new') }}" class="btn btn-sm btn-solid">add inventory</a>
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
{{--                                  <td><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i><i class="fa fa-trash-o ml-1" aria-hidden="true"></i></td>--}}
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
</section>
@endsection



