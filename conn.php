<?php
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
    */

    //$dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

