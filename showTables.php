
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
    <div class="container-fluid">
   <?php
      require 'conn.php'; //database connection
   
   $sqli="SHOW TABLES";
$result =$dbh->query($sqli);
echo "</br>";
echo "<h4>Tables in database <i>".$dbName ."</i>:</h4>";
echo "</br>";
while($row = $result->fetch(PDO::FETCH_NUM)){
    echo ("<div class='well text-center'>".$row[0]."<br>". "<a href='view.php?id=$row[0]' class='btn btn-primary btn-sm'>View Records</a> <button type='submit' class='btn btn-success btn-sm'>Sync</button>"."</div></br>");
}

echo "</br>";
/*
//show column names in table
$results = $dbh->query("SHOW COLUMNS from articles");
echo "<table><tr>";
while($rows = $results->fetch(PDO::FETCH_NUM)){
    echo "<th>$rows[0] |</th>";
}

///Find out number of columns ////
$count=$dbh->prepare("select * from articles");
$count->execute();
//echo "Number of Columns : ". $count->columnCount();
$no_of_columns=$count->columnCount(); // store it in a variable

$data=$dbh->prepare("select *  from articles");
$data->execute();

while($resultt=$data->fetch(PDO::FETCH_NUM)){
echo "<tr>";
for($j=0;$j<$no_of_columns;$j++){
echo "<td>$resultt[$j]</td>";
} // end of for loop displaying one row
  echo "</tr>";    
} // end of while loop
echo "</table>";
*/
?>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html><?php 

/*$dbname      = 'homeshwar_api';
$user        = 'root';
$host        = 'localhost';
$pass        = '';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>Connected successfully</h3>";
$sql = "SHOW TABLES";
$res = mysqli_query($conn, $sql);
print_r($res);
echo "</br>";


while($table = mysqli_fetch_array($res)) { 
    echo($table[0] . "</br>");  
}*/

//show table names in database
?>