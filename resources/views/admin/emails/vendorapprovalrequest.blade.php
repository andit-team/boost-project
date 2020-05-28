<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Hello, <p style="font-size: x-small;">{{ $sellerId->first_name.' '.$sellerId->last_name }}</p></h1>

    <P>
      Dear,
      <br>
      {{ $sellerId->first_name.' '.$sellerId->last_name }},We got your profile request. 
      After approve your profile request you can update your profile.
    </P>



</body>
</html>
