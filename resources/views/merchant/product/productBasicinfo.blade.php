
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
        .scroll { 
            overflow-x: auto; 
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
                    <label for="name">Category Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name') }}</span>
                    <input type="text" readonly class="form-control @error('first_name') border-danger @enderror" required name="name" value="{{ old('name') }}" id="category" placeholder="Category">
                    <div class="position-absolute foo p-3" id="catarea" style="display: none">
                        <div class="search-area d-flex scroll border">
                            <div class="col-md-3 cat-level p-2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels" id="category_id">
                                    @foreach ($categories as $row)
                                    <li value="{{ $row->id }}">{{$row->name}} <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li> 
                                    @endforeach 
                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2 show_hide_1">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels sub" id="sub_category">

                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2 show_hide_2">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels child" id="child_category">
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2 show_hide_3">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels child1" id="child_of_child">
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 cat-level p-2 show_hide_4">
                                <input type="text" class="form-control" placeholder="search">
                                <ul class="cat-levels child2" id="child_od_child1">
                                   
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
                $('.show_hide_1').hide();
                $('.show_hide_2').hide();
                $('.show_hide_3').hide();
                $('.show_hide_4').hide();
            $('#category_id li').on('click',function(){
                $('.child').empty();
                $('.child1').empty();
                $('.child2').empty(); 
                $('.show_hide_1').show();   
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
            $('.child1').empty();
            $('.show_hide_2').show(); 
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
            $('.child2').empty();
            $('.show_hide_3').show();  
            var childCatId = val;
            var li ='';
            $.ajax({
                type:"get",
                url:"{{ url('/merchant/product/childCategory/{id}') }}",
                data:{ 'childCatId': childCatId },
                success:function(data){
                    for( var i=0; i<data.length; i++ ){
                        li += `<li onclick="sublevel4(${data[i].id})">${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`;    
                    }
                    $('.child1').html(li); 
                }
            })
        };

        function sublevel4(val){
            $('.child3').empty();
            $('.show_hide_4').show(); 
            console.log(val);
            var childCatid_1 = val;
            var li ='';
            $.ajax({
                type:"get",
                url:"{{ url('/merchant/product/childCategory-1/{id}') }}",
                data:{ 'childCatid_1': childCatid_1 },
                success:function(data){
                    for( var i=0; i<data.length; i++ ){
                        li += `<li onclick="sublevel5(${data[i].id})">${data[i].name}<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>`;    
                    }
                    $('.child2').html(li); 
                }
            })
        };

        $('#clear').on('click',function(){ 
            $('.sub').empty(); 
            $('.child').empty();
            $('.child1').empty();
            $('.child2').empty();
            $('.show_hide_1').hide(); 
            $('.show_hide_2').hide();
            $('.show_hide_3').hide();
            $('.show_hide_4').hide();
        }); 
    </script>
@endpush