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

   <h1>Hello, <p style="font-size: x-small;">{{ $name.' '.$surname }}</p></h1>

    <P>
      Dear,<br>
      {{ $name.' '.$surname }},Your profile is Rejected.
    </P>
    <p>
      <h5>Reject Reason</h5>
        {{ $rej_desc }}
    </p>



</body>
</html>
