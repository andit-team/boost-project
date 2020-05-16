@extends('admin.layout.master')


@section('content')
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Tag
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent

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
                            @php $i=0; @endphp
                            @foreach($tag as $row)
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $row->name }}</td>
                                    <td class="d-flex justify-content-between">

                                        <a href="{{ url('/andbaazaradmin/tag/'.$row->slug) }}"><button class="btn btn-sm btn-success">View</button></a>
                                        <a href="{{ url('/andbaazaradmin/tag/'.$row->slug.'/edit' )}}"><button class="btn btn-sm btn-warning">Edit</button></a>
                                        <form action="{{ url('/andbaazaradmin/tag/'.$row->slug) }}" method="post"  id="deleteButton{{$row->id}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                                        </form>
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
                        <h5>Manage Tags</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tag.store') }}" method="post" class="form" id="validateForm">
                            @csrf
                            <div class="form-group">
                                <label for="tag">Tag Name:</label>
                                <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            {{-- <div class="form-group">
                                <label for="">Tag Name:</label>
                                <textarea name="" class="form-control" id="" rows="5"></textarea>
                            </div> --}}
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
