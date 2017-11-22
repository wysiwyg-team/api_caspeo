<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:8000/api/articles?api_token=VhEhMacckIAevOtyYqsaXQxMrsjRMQRgv8bqtGNNpxkR3kb0fNMo8FuV5jde" method="get">
      <?php  ini_set("allow_url_fopen", 1);
      header("Accept: application/json");

      $string=file_get_contents('http://localhost:8000/api/articles?page=1&api_token=VhEhMacckIAevOtyYqsaXQxMrsjRMQRgv8bqtGNNpxkR3kb0fNMo8FuV5jde');
      $json = json_decode($string, true);
    
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
      }

?>


    </form>



</body>
</html>
