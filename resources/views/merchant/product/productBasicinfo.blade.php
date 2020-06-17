
@push('css')
 <style>
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
 </style>
@endpush 

  <h5 class="card-header">Basic information</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bn_name">Product Name(Bangla) <span class="text-danger">*</span></label>                                          
                            <input class="form-control" type="text" class="form-control" name="bn_name" value="{{ old('bn_name') }}" id="bn_name">
                            @if ($errors->has('nambn_namee'))
                                <span class="text-danger">{{ $errors->first('bn_name') }}</span>
                            @endif 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name(English) <span class="text-danger">*</span></label>                                          
                            <input class="form-control" type="text" class="form-control" value="{{ old('name') }}" name="name" id="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif 
                        </div>
                    </div> 
                </div>  
                <div class="form-group">
                    <label for="name">Category Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    <input type="text" readonly class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('name') }}" id="category" placeholder="Category">
                    <div class="position-absolute foo" id="catarea" style="display: none">
                        <div class="search-area d-flex">
                            <div class="col-md-3 cat-level p-2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels" id="category_id">
                                    @foreach ($categories as $row)
                                    <li value="{{ $row->id }}">{{$row->name}} <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li> 
                                    @endforeach 
                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels sub" id="sub_category">

                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels child" id="child_category">
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels child1" id="child_of_child">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="cat-footer p-2">
                            <p>Current Selection :</p>
                            <span class="btn btn-sm btn-info m-1">Confirm</span>
                            <span class="btn btn-sm btn-warning m-1" id="close">Close</span>
                            <span class="btn btn-sm btn-danger m-1" id="clear">Clear</span>
                        </div>
                    </div>
                </div> 
                <div class="form-group margin">
                    <label for="video_url">Video Url<span>*</span></label>
                    <input type="text" class="form-control" name="video_url" id="video_url"  >
                    @if ($errors->has('video_url'))
                        <span class="text-danger">{{ $errors->first('video_url') }}</span>
                    @endif
                </div> 

                

            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
         $('#category').click(function(){
            $('#catarea').toggle();
        });
        $('#close').click(function(){
            $('#catarea').hide();
        });
        
        $(document).ready(function(){
            $('#category_id li').on('click',function(){
                var categoryId = $(this).val(); 
                var li = ''; 
                $.ajax({
                    type:"get",
                    url:"{{ url('/merchant/product/subcategory/{id}')  }}",
                    data:{ 'categoryId': categoryId },
                    success:function(data){
                        for( var i=0; i<data.length; i++ ){
                            li += `<li onclick="sublevel2(${data[i].id})">${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`;
                        }
                        $('.sub').html(li); 
                    }
                })
            })
        });

        function sublevel2(val){
            var subCatId = val;
            var li =''; 
            $.ajax({
                type:"get",
                url:"{{ url('/merchant/product/subCategoryChild/{id}') }}",
                data:{ 'subCatId': subCatId },
                success:function(data){
                    for( var i=0; i<data.length; i++ ){
                        li += `<li onclick="sublevel3(${data[i].id})">${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`;    
                    }  
                    $('.child').html(li);
                }
            })
        };

        function sublevel3(val){ 
            var childCatId = val;
            var li ='';
            $.ajax({
                type:"get",
                url:"{{ url('/merchant/product/childCategory/{id}') }}",
                data:{ 'childCatId': childCatId },
                success:function(data){
                    for( var i=0; i<data.length; i++ ){
                        li += `<li ${data[i].id}>${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`;    
                    }
                    $('.child1').html(li); 
                }
            })
        };

        $('#clear').on('click',function(){ 
            $('.sub').empty(); 
            $('.child').empty();
            $('.child1').empty();
        })
    </script>
@endpush