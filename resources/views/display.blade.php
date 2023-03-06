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
<body align="center">
    <h1>Display Data</h1>

<form method="get" action="{{url('search')}}">
    <input type="search" name="search" placeholder="Search students">
    <input type="submit" value="search">
</form>
<div class="table-responsive-sm">
    <table align="center" class="table table-striped border border-secondary">
        <tr class="d-flex">
            <th  class="col-md-2">name</th>
            <th  class="col-md-2">Email</th>
            <th  class="col-md-2">contact</th>
            <th  class="col-md-2">image</th>
            <th  class="col-md-2" colspan=2>Action</th>
        </tr>

    @foreach($data as $student)
        <tr class="d-flex">
            <td class="col-md-2"> {{$student->name}}</td>
            <td class="col-md-2">{{$student->gmail}}</td>
            <td class="col-md-2">{{$student->contact}}</td>
            <td class="col-md-2"><img src="student/{{$student->image}}" height="50" width="50"></td>
            <td class="col-md-2"><a href="{{url('delete',$student->id)}}">Delete</a></td>
            <td class="col-md-2"><a href="{{url('update_view',$student->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>