<?php


function getConnection(){
    $host = "54.213.207.93";
    $dbname = "att_golf";
    $username = "root";
    $password = "csumb-hdv";

    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn;
}

?>