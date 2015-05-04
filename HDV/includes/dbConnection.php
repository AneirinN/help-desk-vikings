<?php


function getConnection(){
    $host = "162.243.149.51";
   // $host = "localhost";
    $dbname = "attgolf";
    $username = "dbuser";
    $password = "csumb-hdv";

    try {
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConn;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage() . "<br />";

        //use this if using default PDO::ERRMODE_SILENT
        //echo $conn->errorCode();
        //echo $conn->errorInfo();
    }
}

?>