<?php
    namespace db;

    class conn
    {
        public $dbName;
        public $hostname;
        public $username;
        public $password;
        public $dbh;

public function __construct()
{
    $this->dbName = "homeshwar_api";
    $this->hostname = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->create();
}

public function create()
{
    try{
        $this->dbh = new \PDO("mysql:host=$this->hostname;dbname=$this->dbName",$this->username, $this->password);
        echo '<h3>Connected to Database success</h3>';
    }
    catch(\PDOException $e){
        echo "connection failed ". $e->getMessage();
    }
}

public function getConn()
{
    return $this->dbh;
}

public function gettables()
{
    $new= new conn();
    $db=$new->getConn();
 
    $sqli="SHOW TABLES";
 $result =$db->query($sqli);

 echo "</br>";
 echo "<h4>Tables in database <i>".$this->dbName ."</i>:</h4>";
 echo "</br>";
 while($row = $result->fetch(\PDO::FETCH_NUM)){
     echo ("<div class='well text-center'>".$row[0]."<br>". "<a href='view.php?id=$row[0]' class='btn btn-primary btn-sm'>View Records</a> <button type='submit' class='btn btn-success btn-sm'>Sync</button>"."</div></br>");
 }
}

public function getcolumns()
{
    $new= new conn();
    $db=$new->getConn();

    $id=$_GET['id'];
    //show column names in table
 $results = $db->query("SHOW COLUMNS from $id");
 echo "<table class='table table-responsive table-bordered table-hover'><tr>";
 while($rows = $results->fetch(\PDO::FETCH_NUM)){
     echo "<th class='text-center'>$rows[0] </th>";
 }
}

public function getrecords()
{

    $new= new conn();
    $db=$new->getConn();
    $id=$_GET['id'];
    ///Find out number of columns ////
$count=$db->prepare("select * from $id");
$count->execute();
//echo "Number of Columns : ". $count->columnCount();
$no_of_columns=$count->columnCount(); // store it in a variable


$data=$db->prepare("select *  from $id");
$data->execute();

while($resultt=$data->fetch(\PDO::FETCH_NUM)){
echo "<tr>";
for($j=0;$j<$no_of_columns;$j++){
echo "<td>$resultt[$j]</td>";
} // end of for loop displaying one row
  echo "</tr>";    
} // end of while loop
echo "</table>";
}

    }

    ?>



<?php
/*
$hostname='localhost';
$dbName = 'homeshwar_api';
$username='root';
$password='';


try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbName",$username,$password);

    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo '<h3>Connected to Database success</h3>';

    /*$sql = "SELECT * FROM users";
foreach ($dbh->query($sql) as $row)
    {
    echo $row["name"] ." - ". $row["email"] ."<br/>";
    }
    

    //$dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }*/?>

   

