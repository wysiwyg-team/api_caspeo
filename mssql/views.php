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
<h3>Records:</h3>
<br>

   
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php
    require 'connect.php'; //database connection
$id=$_GET['id'];
   //show column names in table
$results = $conn->query("SELECT column_name FROM information_schema.columns WHERE table_name='$id'");
echo "<table class='table table-responsive table-bordered table-hover'><tr>";
while($rows = $results->fetch(PDO::FETCH_NUM)){
    echo "<th class='text-center'>$rows[0] </th>";
}

///Find out number of columns ////
$count=$conn->prepare("select * from $id");
$count->execute();
//echo "Number of Columns : ". $count->columnCount();
$no_of_columns=$count->columnCount(); // store it in a variable



$data=$conn->prepare("select *  from $id");
$data->execute();

while($resultt=$data->fetch(PDO::FETCH_NUM)){
echo "<tr>";
for($j=0;$j<$no_of_columns;$j++){
echo "<td>$resultt[$j]</td>";
} // end of for loop displaying one row
  echo "</tr>";    
} // end of while loop
echo "</table>";
?>

