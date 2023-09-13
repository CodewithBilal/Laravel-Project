<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Simple Crud</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
      <li><a href="#">Page 1</a></li>
      
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col sm-4">
            <div class="card mt-3 p-3">
            <form method="POST" action="store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                    <label>image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
            </form>
            </div>  
        </div>
        </div>
        
        <h1>Creator</h1>
    </div>
</body>
</html>