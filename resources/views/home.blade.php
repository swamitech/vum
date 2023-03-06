<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
</head>
<body>
    <h1>This is test</h1>

    <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="Name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="InputEmail">Gmail</label>
            <input type="email" class="form-control" id="gmail" placeholder="Enter gmail" name="gmail">
        </div>
        <div class="form-group">
            <label for="Input Contact">Contact</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
        </div>
        <div class="form-group">
            <label for="Input Image">Image</label>
            <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
        </div>
        
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>