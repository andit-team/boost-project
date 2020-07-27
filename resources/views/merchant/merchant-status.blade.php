@if($seller->status == 'Inactive')
<div class="card">
    <div class="card-body">
        <p class="lead text-danger">
            Hi <b>{{Sentinel::getUser()->first_name}}</b>,<br><br>
            Your account hass been under review. We will review it soon. Please put your rich information and <a href="{{url('merchant/profile')}}">profile</a> and <a href="{{url('merchant/shop')}}">shop</a>.<br><br>
            <b>Andbaazar</b>
        </p>
    </div>
</div>
<br>
@elseif($seller->status == 'Reject')
<div class="card">
    <div class="card-body">
        <p class="lead text-danger">
            Hi <b>{{Sentinel::getUser()->first_name}}</b>,<br><br>
            Sorry your account has been rejected.<br><br>
        <b>"{{$seller->rej_desc}}"</b><br><br>
            Please put your rich information and <a href="{{url('merchant/profile')}}">profile</a> and <a href="{{url('merchant/shop')}}">shop</a>.<br><br>
            <b>Andbaazar</b>
        </p>
        <p>
        <a href="#" id=""><button class="btn btn-sm btn-solid float-right"  data-toggle="modal" data-original-title="test" data-target="#merchantStatusModal{{ $seller->id }}">Re-submit</button></a> 
        </p>
    </div>
</div>
<div class="modal fade" id="merchantStatusModal{{ $seller->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Re-submit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" novalidate="" action="{{ url('merchant/merchant/resubmit/'.$seller->id) }}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    @method('put')
                    {{-- <div class="form">
                      <div class="col-sm-12">
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Color Name :</label>
                        <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group mb-0">
                            <label for="color_code">Color Code:</label>
                            <input class="form-control" name="color_code" value="{{ $row->color_code }}" id="color_code" type="text" rows="5" required="">
                              <span class="text-danger">{{ $errors->first('color_code') }}</span>
                        </div>

                    </div> --}}
                    <div class="form">
                        If you fill your all information.Please fill the yes check box and click submit.
                    </div>
                    <div class="form-terms">
                        <div class="custom-control custom-checkbox mr-sm-2"> 
                            <input type="checkbox" name="yes" class="custom-control-input @error('yes') border-danger @enderror" id="customControlAutosizing1">  
                            <label class="custom-control-label" for="customControlAutosizing1">Yes</label> 
                            <br>
                            <span class="text-danger">{{ $errors->first('yes') }}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-solid" type="button">Submit</button>                                                   
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
<br>
@endif
@push('css')
<style>
    .my-error-class {
        color:red;
        margin-left: -120000cm!important;
        float: right;
        
    } 
</style>
@endpush
@push('js')
<script>
    $(document).ready(function () { 
        $('#myform').validate({ 
            errorClass: "my-error-class", 
            rules: {
                yes:{
                    required: true,
                }
            },
            messages: {
                yes: {
                        required: "Yes field is required.", 
                    },
                   

                }
        });

    });
</script>
@endpush