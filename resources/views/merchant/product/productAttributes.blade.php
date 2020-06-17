    
@push('css')
 <style>
      .textbox{
        height: 1px;
    }
    .button1{
        background-color: white;
        color:gray; 
        margin-left: 20px;
    }
    .brandtext{
        height: 1px;
        width: 238px; 
    }
 </style>
@endpush    
    <div class="card mb-4">
        <h5 class="card-header">Product Attributes<span class="text-danger">*</span></h5> 
        <div class="col-md-6 mt-3 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group brandtext">
                        <label for="brand">Brand <span class="text-danger">*</span></label>                                          
                        <input class="form-control" type="text" class="form-control" name="brand" value="{{ old('brand') }}" id="brand">
                        @if ($errors->has('brand'))
                            <span class="text-danger">{{ $errors->first('brand') }}</span>
                        @endif 
                    </div>
                </div>
            </div>
        </div>        
            <div class="form-group"> 
                <div class="less">
                  <div class="row p-3">
                      <div class="col-md-6 ">
                          <div class="form-group textbox">
                              <label class="mr-2">Size</label>
                              <input class="form-control col-md-6" type="text">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-gropu textbox">
                              <label class="mr-2">Size</label>
                              <input type="text" class="form-control col-md-6">
                          </div> 
                      </div>
                      <div class="col-md-6 mt-5">
                          <div class="form-group textbox">
                              <label class="mr-2">Size</label>
                              <input class="form-control col-md-6" type="text">
                          </div>
                      </div>
                      <div class="col-md-6 mt-5">
                          <div class="form-gropu textbox">
                              <label class="mr-2">Size</label>
                              <input type="text" class="form-control col-md-6">
                          </div> 
                      </div>
                  </div>
                  
                </div> 
                <div class="more"></div>  
            </div> 
            <div class="form-group row mt-2">
                 <label for="product_attribute" class="col-xl-3 col-md-4"></label> 
                 <a class="collapsed btn btn-sm btn-secondery col-md-10 button1"><i class="fa fa-angle-double-down"></i> More</a>
                 <a class="expanded btn btn-sm btn-secondery col-md-10 button1"><i class="fa fa-angle-double-up"></i> Less</a>
            </div> 
    </div>

  @push('js')
   <script> 
    $(document).ready(function(){
        $('.less').hide();
        $('.more').show();
        $('.expanded').hide(); 
    }); 
    $('.collapsed').on('click',function(){
            $('.less').show();
            $('.more').hide();
            $('.expanded').show(); 
            $('.collapsed').hide(); 
        });
    $('.expanded').on('click',function(){
        $('.less').hide();
        $('.more').show();
        $('.expanded').hide(); 
        $('.collapsed').show(); 
    });    
   </script>
  @endpush