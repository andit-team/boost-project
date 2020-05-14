@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Tags</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th>Tag</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>dfasd</td>
                                <td class="d-flex justify-content-between">

                                    <a href=""><button class="btn btn-sm btn-success">View</button></a>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                                            </table>
                    </div>



                    {{-- <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Tag</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($tag as $row)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $row->name }}</td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/tag/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li>
                                        <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/tag/'.$row->slug).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>
                                        <li class="list-inline-item">
                                            <form action="{{ url('/andbaazaradmin/tag/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
                    </div> --}}
                </div>
            </div>


            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Tags</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" class="form" id="validateForm">
                            
                            <div class="form-group">
                                <label for="">Tag Name:</label>
                                <input type="text" required name="tag" class="form-control @error('tag') borderd-danger @enderror">
                                <span class="text-danger">{{$errors->first('tag')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Tag Name:</label>
                                <textarea name="" class="form-control" id="" rows="5"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>    
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
