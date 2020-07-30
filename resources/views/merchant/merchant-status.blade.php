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
            @foreach($seller->rejectvalue as $row)
            <b>"{{$seller->rej_desc}}"</b>
            @endforeach
            <br><br>
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
                    <div class="form"> 
                   
                    @foreach($seller->rejectvalue as $row)
                    <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="checked" name="rej_desc[]" " />{{ $seller->rej_desc }}
                    </label>
                    @endforeach

                      <!-- <textarea class="form-control" cols="2" rows="4">
                      @foreach($seller as $row)
                      {{ $seller->rejectvalue->rej_desc }}
                      @endforeach
                      </textarea> -->
                   
                   
                    </div>
                    <div class="form">
                        If you fill your all information.Please fill the yes check box and click submit.
                    </div>
                    <div class="form-terms mt-2">
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