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

<?php
require "connect.php";

$tsql = "SELECT * FROM sys.Tables";
$getresults = $conn->prepare($tsql);
$getresults->execute();
$results = $getresults->fetchAll(PDO::FETCH_BOTH);
echo "Tables in database <i>". $dbName."</i>";
echo "</br>";
foreach($results as $row){
    echo ("<div class='well text-center'>".$row[0]."<br>". "<a href='views.php?id=$row[0]' class='btn btn-primary btn-sm'>View Records</a> <button type='submit' class='btn btn-success btn-sm'>Sync</button>"."</div></br>");
    
    echo "</br>";
}

?>