@extends('admin.layout.master')


@section('content')
@push('css')
<style>
    .imagestyleIndex{
        width: 100px;
        height:100px;
        /* border-width: 4px 4px 4px 4px; */
        /* border-style: solid;
        border-color: #ccc; */
    } 

    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;float: left;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }

    .fa{
        padding:4px;
      font-size:16px;
    } 
</style> 
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Brand
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Brand</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Brand</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>  
                                <th  width="200">Logo</th>                              
                                <th width="200">Brand Name</th>                                
                                <th width="200">Description</th>                            
                                <th width="80" class="text-center">Action</th>
                            </tr>
                            </thead>
                          <tbody>
                            @php $i=0; @endphp
                            @foreach($brand as $row)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img src="{{ asset($row->image) }}" style = "height:40px;width:70px;"></td> 
                                <td> {{ $row->name }}</td>                                                                                              
                                <td>{{ $row->description }}</td> 
                                <td class=""> 
                                    <ul class="d-flex justify-content-between">
                                        <li><a href="#" id="{{ url('/andbaazaradmin/products/brand/'.$row->id.'/edit')}}" title="Edit"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#brandEditModal{{$row->id}}"><i class="fa fa-edit"></i></button> </a></li>
                                        <li> 
                                            <form action="{{ url('/andbaazaradmin/products/brand/'.$row->id) }}" method="post"  id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete') 
                                                <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                            </form> 
                                        </li>
                                    </ul>
                                </td>
                            </tr> 

                            <div class="modal fade" id="brandEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Brand</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/products/brand/'.$row->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                   <div class="form-goup text-left text-left mb-5 pb-3"> 
                                                        <label for="thumb">Logo:</label> 
                                                        <div class="mt-0">
                                                            @if(!empty($row->image))
                                                             <img id="output"  class="imagestyle" src="{{ asset($row->image) }}"/>
                                                            @else
                                                             <img id="output"  class="imagestyle" src="{{ asset('/uploads/brand_image/brand.png') }}" />
                                                            @endif
                                                        </div>
                                                        <div class="uploadbtn"> 
                                                            <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                                            <input id="file-upload" type="file" name="image" onchange="loadFile(event)"/>
                                                            <input type="hidden" value="{{$row->image}}" name="old_image"> 
                                                        </div>
                                                     </div>  
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Brand Name :</label>
                                                        <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror"> 
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="desc">Description:</label>
                                                        <textarea type="validationCustom01"  name="description"  class="form-control @error('description') border-danger @enderror" rows="5">{{$row->description}}</textarea>
                                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                                    </div> 
                                                    
                                                </div>
                                                <div class="mt-3 text-right">
                                                    <button type="submit" class="btn btn-success" type="button">Update</button> 
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </div> 
                            </div>                                  
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Brand</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brand.store') }}" method="post" class="form" id="validateForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-left mb-5 pb-3">  
                                <label for="thumb">Logo:</label>
                                <div class="mt-0">
                                    <img id="output"  class="imagestyle" src="{{ asset('/uploads/brand_image/brand.png') }}" />
                                </div>
                                <div class="uploadbtn"> 
                                    <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                    <input id="file-upload" type="file" name="image" onchange="loadFile(event)"/>
                                </div>
                            </div>                      
                            <div class="form-group">
                                <label for="category">Brand Name:</label>
                                <input type="text"  name="name" value="{{ old('name') }}" required class="form-control @error('name') border-danger @enderror"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea type="text"  name="description"  class="form-control @error('description') border-danger @enderror" rows="5"> </textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
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
    </div>

    @endsection
    @push('js')
    <script> 
    $('a[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'bottom',
        html: true
    });
    </script>


    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

{{-- 
<script>
    var loadimg = function(event) {
        var outputss = document.getElementById('output{{$row->id}}');
        outputss.src = URL.createObjectURL(event.target.files[0]);
        console.log(outputss.src);
        $('#output{{$row->id}}').attr('src',outputss.src);
        // outputss.src = ;
    }; 
</script> --}}
 @endpush
