<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body>
<div>
@include('header') 
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="Center">
                    <h2>Import Data in Database</h2>
                </div>
                <div class="card-body" align="Center">
                <form action="{{url('import-data')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <label >upload Excel file</label>
                        <br><br>
                        <input type="file" class="form-control" name="excelfile" id="excelfile">

                        <br><br>
                        <button tye="submit" class="btn btn-primary">Import Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>