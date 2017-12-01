<?php
   namespace db;
    require 'conn.php'; //database connection

    /*
$id=$_GET['id'];
   //show column names in table
$results = $dbh->query("SHOW COLUMNS from $id");
echo "<table class='table table-responsive table-bordered table-hover'><tr>";
while($rows = $results->fetch(PDO::FETCH_NUM)){
    echo "<th class='text-center'>$rows[0] </th>";
}*/

$new= new conn();
$db=$new->getcolumns();
$db=$new->getrecords();
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>



  
   
   <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>