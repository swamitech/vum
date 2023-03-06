<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update page</h1>
<!--           {{$data->name}}
            <img src="student/{{$data->image}}" height="50" width="50">-->

            <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="Name" placeholder="Enter Name" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="InputEmail">Gmail</label>
            <input type="email" class="form-control" id="gmail" placeholder="Enter gmail" name="gmail" value="{{$data->gmail}}">
        </div>
        <div class="form-group">
            <label for="Input Contact">Contact</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="{{$data->contact}}">
        </div>
        <div class="form-group">
            <label for="Input Image">Old Image</label>
            <img src="student/{{$data->image}}" height="50" width="50">
        </div>
        <div class="form-group">
            <label for="Input Image">New Image</label>
            <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>