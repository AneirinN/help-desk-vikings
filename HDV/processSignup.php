<?php
/**
 * Created by PhpStorm.
 * User: Aneirin
 * Date: 5/6/2015
 * Time: 1:38 PM
 */

session_start();
require 'includes/dbConnection.php';
$dbConn = getConnection();

//$memberID = $_POST['memberID'];
$lessonID = $_POST['lessonID'];
$memberID = $_POST['memberID'];



//INSERT
$query = " INSERT INTO Signup Values ( lessonID =:lessonID, memberID =:memberID);
$namedParameters = array();
$namedParameters[':memberID'] = $memberID;
$namedParameters[':lessonID'] = $lessonID;
$stmt = $dbConn -> prepare($sql);
$stmt ->execute($namedParameters);
//$result = $stmt -> fetch();




if( $result )
{
    echo 'Success';
}
else
{
    echo 'Query Failed';
}



?>