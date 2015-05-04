<?php //Query 

 //INSERT 
 $query = " INSERT INTO Members ( memberID, firstName, lastName, gender, birthday, email, address, zip, city, state, phone1, phone2, schoolD, skill, clubs, hand, height, contactID )  VALUES ( '$memberID', '$firstName', '$lastName', '$gender', '$birthday', '$email', '$address', '$zip', '$city', '$state', '$phone1', '$phone2', '$schoolD', '$skill', '$clubs', '$hand', '$height', '$contactID' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //SELECT 
 $query = " SELECT memberID, firstName, lastName, gender, birthday, email, address, zip, city, state, phone1, phone2, schoolD, skill, clubs, hand, height, contactID FROM Members "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //UPDATE 
 $query = " UPDATE Members SET  memberID = '$memberID',  firstName = '$firstName',  lastName = '$lastName',  gender = '$gender',  birthday = '$birthday',  email = '$email',  address = '$address',  zip = '$zip',  city = '$city',  state = '$state',  phone1 = '$phone1',  phone2 = '$phone2',  schoolD = '$schoolD',  skill = '$skill',  clubs = '$clubs',  hand = '$hand',  height = '$height',  contactID = '$contactID' WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //DELETE 
 $query = " DELETE FROM Members WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }
/*
//post parameters	

$memberID = $_POST['memberID'];  
$firstName = $_POST['firstName'];  
$lastName = $_POST['lastName'];  
$gender = $_POST['gender'];  
$birthday = $_POST['birthday'];  
$email = $_POST['email'];  
$address = $_POST['address'];  
$zip = $_POST['zip'];  
$city = $_POST['city'];  
$state = $_POST['state'];  
$phone1 = $_POST['phone1'];  
$phone2 = $_POST['phone2'];  
$schoolD = $_POST['schoolD'];  
$skill = $_POST['skill'];  
$clubs = $_POST['clubs'];  
$hand = $_POST['hand'];  
$height = $_POST['height'];  
$contactID = $_POST['contactID']; 
	
*/
?>