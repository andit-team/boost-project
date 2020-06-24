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
  Attribute
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Attribute</li>
  @endslot
@endcomponent

    <div class="container-fluid">
           
            <div class="col-sm-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Attribute</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('andbaazaradmin/category/attribute') }}" method="post" class="form" id="validateForm" enctype="multipart/form-data">
                            @csrf  
                            @method('put')                        
                                <div class="form-group">
                                    <label for="category">Label Name:</label>
                                    <input type="text"  name="label" value="{{ old('label') }}" required class="form-control @error('label') border-danger @enderror"> 
                                    <span class="text-danger">{{ $errors->first('label') }}</span>
                                </div>
                                <div class="form-group ">
                                    <label for="category" >Attribute Type:</label>
                                    <select class="form-control"  name="type">
                                    <option value="">Select Attribute Type </option> 
                                    <option id="1" value="multi-select">multi-select </option>
                                    <option id="2" value="select">select </option>
                                    <option id="3" value="text">text </option>
                                    <option id="4" value="checkbox">checkbox </option>
                                    <option id="5" value="radio">radio </option>
                                    <option id="6" value="number">number </option>                                 
                                    </select>
                                </div>                                                
                                <div class="form-group ">
                                    <label for="percentage">Type Value:</label>                                  
                                    <textarea   name="values"  class="form-control @error('values') border-danger @enderror" rows="5"> </textarea>
                                    <span class="text-danger">{{ $errors->first('values') }}</span>
                                    @foreach($category as $cat)
                                    <input name="category_id" type="hidden" value="{{$cat->slug}}">
                                    @endforeach
                                    {{-- {!! Form::hidden('category_id',  $category->category_id) !!} --}}
                                </div> 
                                {{-- <input name="category_id" type="hidden" value="2">                              --}}
                                <div class="form-group ">
                                    <label for="percentage">Required:</label>                                  
                                    <div class="form-check form-check-inline">
                                        {{-- <input name="required" value="1" type="checkbox" class="with-gap" id="required" {{$patient->rerquired == '1' ? 'checked' : ''}}> --}}
                                        <input class="form-check-input" type="checkbox" name="required" id="required" value="1">                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Suggession:</label>
                                    <textarea   name="suggestion"  class="form-control @error('suggestion') border-danger @enderror" rows="5"> </textarea>
                                    <span class="text-danger">{{ $errors->first('suggestion') }}</span>
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

var loadFile = function(event) {
    var outputs = document.getElementById('output');
    outputs.src = URL.createObjectURL(event.target.files[0]);
}; 

</script>
@endpush
