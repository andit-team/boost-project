@if($seller->status == 'Inactive')
<div class="card">
    <div class="card-body">
        <p class="lead text-danger">
            Hi <b>{{Sentinel::getUser()->first_name}}</b>,<br><br>
            Your account hass been under review. We will review it soon. Please put your rich information and <a href="{{url('merchant/profile')}}">profile</a> and <a href="{{url('merchant/shop')}}">shop</a>.<br><br>
            <b>Andbaazarsssss</b>
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
            <b>Andbaazar sss</b>
        </p>
    </div>
</div>
<br>
@endif