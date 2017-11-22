

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<?php
$url="http://api.caspeo.fr/api/articles?page=1&api_token=lbBsAbPf5n5jrtL0UWLck3uzsPC6bXwrwFVk444OxGB3fy2dmHeV0q9KRd5b";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);

$data = json_decode($result,true);
$total=count($data);
$Str='<p>Total Number of lists : '.$total.'</p>';
echo $Str;

foreach($data as $datas) {
  if(is_array($datas)) {

     foreach($datas as $value) {  

     }
  } 
 };

//get title of List
function getTitle($id,$data){
  foreach($data as $result){
    if($result['id']==$id){
      echo $result['title'];

    }
  }
};
//$output = getTitle($_GET['id'],$data['data']);

//get body of list
function getBody($id,$data){
  foreach($data as $result){
    if($result['id']==$id){

      echo $result['body'];
    }
  }
};
//$output = getBody($_GET['id'],$data['data']);
?>
<div class="container">
<div class="row"><nav class="navbar navbar-expand navbar-dark bg-dark">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
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
<form action="http://api.caspeo.fr/api/articles/<?php echo $_GET['id'];?>?api_token=lbBsAbPf5n5jrtL0UWLck3uzsPC6bXwrwFVk444OxGB3fy2dmHeV0q9KRd5b" method="post">

   <input type="hidden" name="_method" value="put">
<h2>Edit List</h2>

  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id"  name="id" value="<?php echo $_GET['id'] ?>" readonly>
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  name="title" value="<?php $output = getTitle($_GET['id'],$data['data']);  ?>">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" value="<?php $output = getBody($_GET['id'],$data['data']); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <?php

?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>
</html>