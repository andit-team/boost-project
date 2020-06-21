
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
        .readonly {
            opacity: .5;
            cursor: not-allowed !important;
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
                <div class="form-group margin">
                    <label for="video_url">Video Url<span>*</span></label>
                    <input type="text" class="form-control" name="video_url" id="video_url">
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