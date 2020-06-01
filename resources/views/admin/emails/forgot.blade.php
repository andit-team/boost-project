<h1>Hello{{$user->name}}</h1>
<p> Please click the passowrd reset button to reset your password.

<a href ="{{url('reset_password/'.$user->email)}}">Reset Password</a>

</p>