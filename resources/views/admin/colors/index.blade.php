@extends('admin.layout.master')


@section('content')
@include('elements.alert')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Colors</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                 <th>Color</th>
                                 <th>Color Code</th>
                                 <th>Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($color as $row)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ $row->name }}</td>
                               <td>{{ $row->color_code}}</td>
                               <td>
                                   <ul class="list-inline">
                                       <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/color/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li>
                                       <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/color/'.$row->slug).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>
                                       <li class="list-inline-item">
                                           <form action="{{ url('/andbaazaradmin/color/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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

            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Colors</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('color.store') }}" method="post" class="form" id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="tag">Color Name:</label>
                                      <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  </div>

                                  <div class="form-group">
                                      <label for="tag">Color Code:</label>
                                      <input type="text"  name="color_code" required class="form-control @error('color_code') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('color_code') }}</span>
                                  </div>
                                  <div class="text-right">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
