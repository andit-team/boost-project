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
    .rowRemove{
            line-height: 26px;
        }
    
    .fa{
        padding:4px;
      font-size:16px;
    } 

    #catarea{
            background: #fff;
            border: 1px solid #ddd;
            width: 97%;  
        }
        .cat-level ul li {
            display: inherit;
            padding: 5px;
            cursor: pointer;
            border-left: 2px solid #fff;
            margin: 2px;
        }
        .cat-level ul li:hover,.active{
            background: #ddd;
            border-left: 2px solid red !important;
        }
        .cat-level{
            border: 1px solid #ddd;
        }
        .cat-levels{
            height: 250px;
            overflow-y: scroll;  
        }
        .cat-level input[type=text]{
            height: 40px;
        } 
        .foo {
            position: absolute;
            background-color: white;
            width: 5em;
            z-index: 100;
        }
        .scroll { 
            overflow-x: auto; 
        }
        .readonly {
            opacity: .5;
            cursor: not-allowed !important;
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
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Attribute</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name') }}</span>
                        <input type="text" readonly class="form-control @error('category') border-danger @enderror" required name="category" value="{{ old('name') }}" id="category" placeholder="Category">
                        <input type="hidden" name="category_id" id="category_id">
                        <div class="position-absolute foo p-3" id="catarea" style="display: none">
                            <div class="categories search-area d-flex scroll border">
                                <div class="col-md-3 cat-level p-2 level-1">
                                    <input type="text" class="form-control" onkeyup="categorySearch(1,this)" placeholder="search">
                                    <ul class="cat-levels" id="">
                                        @foreach ($categories as $row)
                                        <li onclick="getNextLevel({{$row->id}},1,this)" value="{{ $row->id }}">{{$row->name}} <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li> 
                                        @endforeach 
                                    </ul>
                                </div>
                            </div>
                            <div class="cat-footer p-2">
                                <p>Current Selection : <span class="currentSelection font-weight-bold"></span></p>
                                <span class="btn btn-sm btn-info m-1 readonly" id="confirm" data-category="" >Confirm</span>
                                <span class="btn btn-sm btn-warning m-1" id="close">Close</span>
                                <span class="btn btn-sm btn-danger m-1" id="clear">Clear</span>
                            </div>
                        </div>
                    </div> 
                    <form action="{{ url('andbaazaradmin/category/attribute') }}" method="post" class="form" id="validateForm" enctype="multipart/form-data">
                        @csrf  
                        @method('put')   
                        
                        <span class="btn btn-primary btn-sm pull-left  rowAdd" data-row="1"><i class="fa fa-plus"></i> Add row</span>
                       {{-- @foreach($category as $cat)
                       <div class =" text-center font-weight-bold">    
                        <label for="percentage">For: {{$cat->slug}}</label>     
                       </div>                     
                        @endforeach --}}
                        <table class="table table-borderd">
                            <thead class="">
                                <tr class="inventory-head">                                    
                                    <th>Label Name</th>
                                    <th>Type<span class="text-danger"> *</span></th>
                                    <th >Type Value</th>     
                                    <th >Suggession</th> 
                                    <th>Required</th>                    
                                </tr>
                            </thead>
                            <tbody class="newRow">
                                <tr class="firstRow" data-id="0" id="row-0">
                                                    
                                        <td><input type="text" class="form-control" placeholder="Enter Label" name="label[]"></td>
                                        <td>
                                        <select name="type[]" class="form-control">
                                            <option value="">Select Attribute Type </option> 
                                            <option id="1" value="multi-select">multi-select </option>
                                            <option id="2" value="select">select </option>
                                            <option id="3" value="text">text </option>
                                            <option id="4" value="checkbox">checkbox </option>
                                            <option id="5" value="radio">radio </option>
                                            <option id="6" value="number">number </option> 
                                        </select>
                                    </td>
                                        <td>                                              
                                            <div class="input-group">            
                                                <textarea   name="values[]"  class="form-control @error('suggestion') border-danger @enderror" rows="5" placeholder ="Type Value"> </textarea>   
                                            </div>
                                        
                                        </td>                                       
                                    <td>
                                        <div class="input-group">
                                            <textarea   name="suggestion[]"  class="form-control @error('suggestion') border-danger @enderror" rows="5"> </textarea>   
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group ">
                                            <label for="percentage">Required:</label>                                  
                                            <div class="form-check form-check-inline">
                                                {{-- <input name="required" value="1" type="checkbox" class="with-gap" id="required" {{$category->required == '1' ? 'checked' : ''}}> --}}
                                                <input class="form-check-input" type="checkbox" name="required[]" id="required" value="1">                                    
                                            </div>
                                        </div> 
                                    </td>
                                    @foreach($category as $cat)
                                    <input name="category_id" type="hidden" value="{{$cat->id}}">
                                    @endforeach
                                    {{-- <input name="category_id" type="hidden" value="2"> --}}
                                <td><span class="btn btn-primary rowRemove"><i class="fa fa-trash"></i></span></td>                                    
                                    </tr>
                            </tbody>
                        </table>
                            {{-- <div class="form-group">
                                <label for="category">Label Name:</label>
                                <input type="text"  name="label" value="{{ old('label') }}" required class="form-control @error('label') border-danger @enderror"> 
                                <span class="text-danger">{{ $errors->first('label') }}</span>
                            </div> --}}
                            {{-- <div class="form-group ">
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
                            </div>                                                 --}}
                            {{-- <div class="form-group ">
                                <label for="percentage">Type Value:</label>                                  
                                <textarea   name="values"  class="form-control @error('values') border-danger @enderror" rows="5"> </textarea>
                                <span class="text-danger">{{ $errors->first('values') }}</span>
                                @foreach($category as $cat)
                                <input name="category_id" type="hidden" value="{{$cat->slug}}">
                                @endforeach --}}
                                {{-- {!! Form::hidden('category_id',  $category->category_id) !!} 
                            {{-- </div>  --}}
                            {{-- <input name="category_id" type="hidden" value="2">  --}}                           
                            {{-- <div class="form-group ">
                                <label for="percentage">Required:</label>                                  
                                <div class="form-check form-check-inline">
                                    <input name="required" value="1" type="checkbox" class="with-gap" id="required" {{$category->required == '1' ? 'checked' : ''}}>
                                    <input class="form-check-input" type="checkbox" name="required" id="required" value="1">                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">Suggession:</label>
                                <textarea   name="suggestion"  class="form-control @error('suggestion') border-danger @enderror" rows="5"> </textarea>
                                <span class="text-danger">{{ $errors->first('suggestion') }}</span>
                            </div>    --}}
                            <div class="text-right">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                    </form>    
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

     // inventories script
     $('.rowAdd').click(function(){
            var rowNo = parseFloat($(this).data("row"))||1;
            var getTr = $('tr.firstRow:first');
            $('tbody.newRow').append("<tr data-id="+rowNo+" id='row-"+rowNo+"' class='removableRow'>"+getTr.html()+"</tr>");
            var defaultRow = $('tr.removableRow:last');
            $(".rowAdd").data("row",rowNo+1);
        });

        $(document).on("click", "span.rowRemove ", function () {
            $(this).closest("tr.removableRow").remove();
        });
</script>

<script>
    $('#category').click(function(){
       $('#catarea').toggle();
   });
   $('#close').click(function(){
       $('#catarea').hide();
   });

   function getNextLevel(val,level,e){
       $('#confirm').addClass('readonly');
       $('#confirm').attr('onclick','ConfirmCategory(0,this)');
       var nextLevel = level+1;
       var li =''; 
       $.ajax({
           type:"get",
           url:"{{ url('/merchant/product/subCategoryChild/{id}') }}",
           data:{ 'subCatId': val },
           success:function(data){
                   li += `<div class="col-md-3 cat-level p-2 level-${nextLevel}">
                               <input type="text" onkeyup="categorySearch(${nextLevel},this)" class="form-control" placeholder="search">
                               <ul class="cat-levels sub">`;
               for( var i=0; i<data.length; i++ ){
                   if(data[i].is_last == 1){
                       li += `<li onclick="setConfirm(${data[i].id},${nextLevel},this)">${data[i].name}</li>`; 
                   }else{
                       li += `<li onclick="getNextLevel(${data[i].id},${nextLevel},this)">${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`; 
                   }
               }  
                   li +=`</ul>
                           </div>`;
               
               setActive(level,e);
               $('.categories').append(li);
               var far = $('.categories' ).width();
               $('.categories').animate({scrollLeft:far},800);
           }
       })
   };

   function setConfirm(id,level,e){
       setActive(level,e);
       $('#confirm').attr('onclick','ConfirmCategory('+id+',this)');
       $('#confirm').removeClass('readonly');
   }

   function ConfirmCategory(id,e){
       if(id <= 0){
           alert('please select a category properly');
       }else{
           $('#category_id').val(id);
           $('#category').val($('.currentSelection').text());
           $('#catarea').hide();
           getCategoryAttr(id);
           getInventoryAttr(id);
       }
   }

   function setActive(level,e){
       var current = '';
       for(var j = level+1; j<10 ; j++){
           $('.level-'+j).remove();
       }

       $('.col-md-3.cat-level.p-2.level-'+level+' ul li').each(function(){
           $(this).removeClass('active');
       })

       $(e).addClass('active');
       $('.col-md-3.cat-level.p-2 ul li.active').each(function(){
           current += $(this).text()+'/';
       })
       $('.currentSelection').html(current);

   }

   $('#clear').on('click',function(){ 
       for(var j = 2; j<10 ; j++){
           $('.level-'+j).remove();
       }
   }); 


   //search 
   function categorySearch(level,e){

       var value = $(e).val();
       var patt = new RegExp(value, "i");

       $('.col-md-3.cat-level.p-2.level-'+level).find('li').each(function() {
           if($(this).text().search(patt) >= 0){
               $(this).show();
           }else{
               $(this).hide();
           }
       });
       
   };

</script>
@endpush
