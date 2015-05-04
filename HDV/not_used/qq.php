<?php
/**
 * Created by PhpStorm.
 * User: Aneirin
 * Date: 5/1/2015
 * Time: 12:51 AM
 */



<?php
$servername = "54.213.207.93";
$username = "root";
$password = "csumb-hdv";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>



