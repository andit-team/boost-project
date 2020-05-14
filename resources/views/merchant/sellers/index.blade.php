@extends('layouts.master')

@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active='profile'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Seller Profile</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($sellers as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>
                                        <ul class="list-inline">
    {{--                                            <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/courier/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li>--}}
                                                    <li class="list-inline-item"><a href="{{ url('/merchant/seller/'.$row->id.'/edit') }}" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-check"></i> </a> </li>
                                                    <li class="list-inline-item">
                                                    <form action="{{ url('/merchant/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div></section>
@endsection
