<?php
header('Accept: application/json');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Article</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row"><nav class="navbar navbar-expand navbar-dark bg-dark">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="add.php">Add article <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show.php">Show article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout </a>
          </li>
        </ul>

      </div>
    </nav></div></div>
    <div class="container">

<form action="http://api.caspeo.fr/api/articles?api_token=lbBsAbPf5n5jrtL0UWLck3uzsPC6bXwrwFVk444OxGB3fy2dmHeV0q9KRd5b" method="POST">
    
  <div class="form-group">
    <label for="ID">ID</label>
    <input type="text" class="form-control" id="ID" placeholder="Auto-Increment" name="id" readonly>
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title goes here" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" placeholder="Body goes here" name="body" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>