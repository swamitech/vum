<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{url('upload')}}" class="nav-item nav-link">Upload </a>
                <a href="{{url('stud_insert')}}" class="nav-item nav-link">Insert </a>
                <a href="{{url('stud_display')}}" class="nav-item nav-link">Display </a>

            </div>
            <div class="navbar-nav ms-auto">
                <a href="#" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </div>
</nav>


</body>
</html>