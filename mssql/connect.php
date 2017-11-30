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
/*
try{
    $hostname = "DESKTOP-RA5UTA9";
$port = "1433";
$dbname = "test";
$username = "DESKTOP-RA5UTA9";
$password = "";
$dbh = new PDO("sqlserv:Server=$hostname;Database=test", 'DESKTOP-RA5UTA9', '');
echo '<h3>Connected to Database success</h3>';
}
catch (PDOException $e){
    echo "Failed".$e->getMessage(). "\n";
    exit;
}
$stmt = $dbh->prepare("select * from test");
$stmt->execute();
while($row = $stmt->fetch()){
    print_r($row);
}
unset($dbh);
unset($stmt);*/
$dbServer = "DESKTOP-RA5UTA9";
$dbName = "test";
$username = "NewAdminName";
$password = "ABCD";

try{
    $conn = new PDO("sqlsrv:Server=$dbServer;Database=$dbName", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die(print_r($e->getMessage()));
}
/*
$tsql = "SELECT * FROM Customer";
$getresults = $conn->prepare($tsql);
$getresults->execute();
$results = $getresults->fetchAll(PDO::FETCH_BOTH);

foreach($results as $row){
    echo $row['CustomerID'].' '.$row['CustomerName'];
    echo "</br>";
}
*/





?>