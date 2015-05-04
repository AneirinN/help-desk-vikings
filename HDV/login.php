<?php
session_start();
if (isset($_POST['loginForm'])) {
    require 'dbConnection.php';
    
    $dbConn = getConnection();


    $sql ="SELECT * FROM Administrator WHERE username = :username AND password = :password";
    
    $namedParameters = array();
    $namedParameters[":username"] = $_POST['username'];
    $namedParameters[":password"] = sha1($_POST['password']);
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $result = $stmt->fetch();
    
    if(empty($result)){
        header("Location: index.php?error='WRONG USERNAME OR PASSWORD'");

    } else {

        $_SESSION['username'] = $result['username'];
        $_SESSION['adminName'] = $result['firstName'] . " " . $result['lastName'];

        header("Location: admin.php");
    }
    
    
}
