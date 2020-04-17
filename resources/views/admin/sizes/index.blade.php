@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Size</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Size Name</th>
                                <th>Item Size</th>
                                <th>Desription</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($size as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->item_size }}</td>
                                    <td>{{  \Illuminate\Support\Str::limit($row->desc,20) }}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/size/'.$row->id) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li>
                                            <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/size/'.$row->id).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>
                                            <li class="list-inline-item">
                                                <form action="{{ url('/andbaazaradmin/size/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
@endsection
