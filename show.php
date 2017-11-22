
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

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
      
    <main role="main" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
<?php

/*ini_set("allow_url_fopen", 1);
header("Accept: application/json");

$string=file_get_contents('http://localhost:8000/api/articles?page=1&api_token=VhEhMacckIAevOtyYqsaXQxMrsjRMQRgv8bqtGNNpxkR3kb0fNMo8FuV5jde');
$json = json_decode($string,true);
//$array = array($json);
 //var_dump($json);

 foreach($json as $jsonn) {
  if(is_array($jsonn)) {
     foreach($jsonn as $index=>$jsons) {  
echo "<div class='blog-post'><h2 class='blog-post-title'>".$jsons['id'].". ".$jsons['title']."</h2><p class='blog-post-meta'>List title</p></div>";
echo "<a href='edit.php/".$jsons['id']."'>.EDIT</a>";
echo "<a href='delete.php/".$jsons['id']."'>.DELETE</a>";
     }
  } else {
   
   // var_dump($json);
  }
 }*/
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

//echo '<p>Title: '.$data['data']['id'].'</p>';


foreach($data as $datas) {
  if(is_array($datas)) {

     foreach($datas as $value) {  
echo "<div class='blog-post'><h2 class='blog-post-title'>".$value['id'].". ".$value['title']."</h2><p class='blog-post-meta'>List title</p></div>";
echo "<a href='edit.php?id=" .$value['id']. "&?api_token=lbBsAbPf5n5jrtL0UWLck3uzsPC6bXwrwFVk444OxGB3fy2dmHeV0q9KRd5b'>.EDIT</a>";
echo "<a href='delete.php?id=".$value['id']."&?api_token=lbBsAbPf5n5jrtL0UWLck3uzsPC6bXwrwFVk444OxGB3fy2dmHeV0q9KRd5b'>.DELETE</a>";
     }
  } else {
   
   // var_dump($json);
  }
 }

//var_dump(json_decode($result, true));


?>

<?php
/*$string=ile_get_contents('http://localhost:8000/api/articles?page=2&api_token=7RyV5PkKPzByJVlKYjIddOBytpMzRyqaYnshOVgNFlEU0NGPkjKFQ08WtPzy');
$json = json_decode($string,true);
foreach($json as $jsonn) {
  if(is_array($jsonn)) {
     foreach($jsonn as $jsons) {  
echo "<div class='blog-post'><h2 class='blog-post-title'>".$jsons['id'].". ".$jsons['title']."</h2><p class='blog-post-meta'>List title</p></div>";
echo "<a href='edit.php'>EDIT</a>";
     }
  } else {
   
   // var_dump($json);
  }
}*/
?>

      </div><!-- /.row -->
    </main><!-- /.container -->
    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
  </body>
</html>
