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
            Sorry your account has been rejected for.<br><br>

            @php $i=0; @endphp
            @foreach($seller->rejectvalue as $row)
          
            <ol>
                 <span class ="text-danger">{{ ++$i }} .</span>
                 <li><b class=" text-danger">{{$row->rej_desc." "}}</b></li>             
            </ol>  
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Re-submit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body ">
                <form class="needs-validation" novalidate="" action="{{ url('merchant/merchant/resubmit/'.$seller->id) }}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    @method('put') 
                    <div class="form"> 
           
                    </div>
                    <div class="form">
                        If you fill your all information.Please fill the yes check box and click submit.
                    </div>
                    <div class="form-terms mt-2">
                        <div class="custom-control custom-checkbox mr-sm-2"> 
                            <!-- <input type="checkbox" name="yes" class="custom-control-input @error('yes') border-danger @enderror" id="customControlAutosizing1">  
                            @foreach($seller->rejectvalue as $row)
                            <label class="custom-control-label" for="customControlAutosizing1">                     
                            <b ">{{$row->rej_desc." "}}</b>          
                             </label> 
                            @endforeach                                                   
                            <br>
                            <span class="text-danger">{{ $errors->first('yes') }}</span> -->

                           
                            <label for="option">
                                <span></span>
                                @foreach($seller->rejectvalue as $row)
                                <input type="checkbox" name="checkbox" id="option{{$row->id}}"/>
                                <p>{{$row->rej_desc." "}}</p>
                                @endforeach  
                            </label> 
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