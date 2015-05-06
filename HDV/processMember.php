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
$firstName = $_POST['field_1'];
$lastName = $_POST['field_2'];
$gender = $_POST['field_3'];
$birthday = $_POST['field_7'];
$email = $_POST['field_12'];
$address = $_POST['field_8'];
$zip = $_POST['field_11'];
$city = $_POST['field_9'];
$state = $_POST['field_10'];
$phone1 = $_POST['field_13'];
$phone2 = $_POST['field_14'];
$schoolD = $_POST['schoolD'];
$status = $_POST['field_16'];
$skill = $_POST['field_17'];
$clubs = $_POST['field_18'];
$hand = $_POST['field_4'];
$height = $_POST['field_5'];
$emergencyContactID = $_POST['field_6'];
$guardianContactID = $_POST['field_15'];

function isMember($first,$last){
    global $dbConn;
    $sql = "SELECT memberID FROM Members WHERE firstName = :firstName AND lastName =:lastName";
    $namedParameters = array();
    $namedParameters[':firstName'] = $first;
    $namedParameters[':lastName'] = $last;
    $stmt = $dbConn -> prepare($sql);
    $stmt ->execute($namedParameters);
    $result = $stmt -> fetch();
    //print_r($result);
    if ($result){
        return true;
    } else {
        return false;
    }
}

if (isMember($firstName, $lastName)) {
    //INSERT
    $query = " INSERT INTO Members ( memberID, firstName, lastName, gender, birthday, email,
                                    address, zip, city, state, phone1, phone2, schoolD, skill,
                                    clubs, hand, height, contactID )
                     VALUES ( memberID =:memberID, firstName =:firstName, lastName =:lastName, gender =:gender, birthday =:birthday, email =: email,
                     address =: address, zip =:zip, city =:city, state =:state, phone1 =:phone1, phone2 =:phone2, schoolID =:schoolD, skill =:skill,
                     clubs =:clubs, hand =:hand, height =:height, emergencyContactID =:emergencyContactID, guardianContactID =:guardianContactID ) ";
    $namedParameters = array();
    $namedParameters[':memberID'] = $memberID;
    $namedParameters[':firstName'] = $firstName;
    $namedParameters[':lastName'] = $lastName;
    $namedParameters[':gender'] = $gender;
    $namedParameters[':birthday'] = $birthday;
    $namedParameters[':email'] = $email;
    $namedParameters[':address'] = $address;
    $namedParameters[':zip'] = $zip;
    $namedParameters[':city'] = $city;
    $namedParameters[':state'] = $state;
    $namedParameters[':phone1'] = $phone1;
    $namedParameters[':phone2'] = $phone2;
    $namedParameters[':schoolD'] = $schoolD;
    $namedParameters[':skill'] = $skill;
    $namedParameters[':clubs'] = $clubs;
    $namedParameters[':hand'] = $hand;
    $namedParameters[':height'] = $height;
    $namedParameters[':emergencyContactID'] = $emergencyContactID;
    $namedParameters[':guardianContactID'] = $guardianContactID;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    //$result = $stmt -> fetch();


    if ($result) {
        echo 'Success';
    } else {
        echo 'Query Failed';
    }

}





?>