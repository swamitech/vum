<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                    <h2>Shwoing student Data</h2>
                   <!-- Total:{{$data->total()}}
                    Current page:{{$data->count()}}-->
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Total Record : {{$data->total()}}</a>
                          <form method="get" action="{{url('search_stud')}}"  class="d-flex input-group w-auto" >
                        <input type="search" name="search" placeholder="Search students" class="form-control mr-sm-2" aria-label="Search" aria-describedby="search-addon" >
                            <span class="input-group-text border-0" id="search-addon">
                            <input type="submit" value="search" >
                            </span>
                             </form>
                        </div>
                    </nav>

                </div>
                <div class="card-body" align="Center">
                <table class="table table-striped">
                    <tr>
                        <th>Member Number</th>
                        <th>Division</th>
                        <th>Date of Joining</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $datas )
                    <tr>
                        <td>{{$datas->mem_no}}</td>
                        <td>{{$datas->division}}</td>
                        <td>{{$datas->doj}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->address}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->phone}}</td>
                        <td><a href="" class="btn btn-warning">Edit</a> </td>
                        <td><a href="{{url('delete',$datas->id)}}" class="btn btn-danger">Delete</a> </td>                        
                    </tr>
                    @endforeach
                </table>
                {{$data->links()}}
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>