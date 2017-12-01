<?php
    namespace db;

    class connect
    {
        public $dbServer;
        public $dbName;
        public $username;
        public $password;

        public function __construct()
        {
            $this->dbServer = "DESKTOP-RA5UTA9";
            $this->dbName = "test";
            $this->username = "NewAdminName";
            $this->password = "ABCD";
            $this->create();
        }

        public function create()
        {
            try{
                $this->conn = new \PDO("sqlsrv:Server=$this->dbServer;Database=$this->dbName", $this->username,$this->password);
            }
            catch(\PDOException $e){
                echo $e->getMessage();
            }
        }

        public function getConn()
        {
            return $this->conn;
        }

        public function gettables()
        {
            $new= new connect();
            $db=$new->getConn();

            $tsql = "SELECT * FROM sys.Tables";
            $getresults = $db->prepare($tsql);
            $getresults->execute();
           /* $results = $getresults->fetchAll(\PDO::FETCH_BOTH);
            foreach($results as $row){
                echo ("<div class='well text-center'>".$row[0]."<br>". "<a href='views.php?id=$row[0]' class='btn btn-primary btn-sm'>View Records</a> <button type='submit' class='btn btn-success btn-sm'>Sync</button>"."</div></br>");
                
                echo "</br>";
            }*/
            echo "Tables in database <i>". $this->dbName."</i>";
            echo "</br>";
                      
            while($row = $getresults->fetch(\PDO::FETCH_NUM)){
                echo ("<div class='well text-center'>".$row[0]."<br>". "<a href='views.php?id=$row[0]' class='btn btn-primary btn-sm'>View Records</a> <button type='submit' class='btn btn-success btn-sm'>Sync</button>"."</div></br>");
            }
            
        }

        public function getcolumns()
        {
            $new= new connect();
            $db=$new->getConn();

            $id=$_GET['id'];
            //show column names in table
         $results = $db->query("SELECT column_name FROM information_schema.columns WHERE table_name='$id'");
         echo "<table class='table table-responsive table-bordered table-hover'><tr>";
         while($rows = $results->fetch(\PDO::FETCH_NUM)){
             echo "<th class='text-center'>$rows[0] </th>";
         }

        }

        public function getrecords()
        {
            $new= new connect();
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

    /*    
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
}*/
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