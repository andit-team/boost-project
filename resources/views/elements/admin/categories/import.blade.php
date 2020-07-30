<!DOCTYPE html>
<html>
<head>
    <title>Import Export Excel to database Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
    <div class="card-header">
        Import Category
        </div>
        <div class="card-body">
            <form action="{{ route('catimport') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Category Data</button>
                <!-- <a class="btn btn-warning" href="{{ route('catexport') }}">Export Category Data</a> -->
            </form>
        </div>
    </div>
</div>
</body>
</html> 