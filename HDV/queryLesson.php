<?php //Query 

 //INSERT 
 $query = " INSERT INTO Lesson ( lessonID, session, instructorID, student1, student2, student3, student4, student5, location )  VALUES ( '$lessonID', '$session', '$instructorID', '$student1', '$student2', '$student3', '$student4', '$student5', '$location' ) "; 
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
 $query = " SELECT lessonID, session, instructorID, student1, student2, student3, student4, student5, location FROM Lesson "; 
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
 $query = " UPDATE Lesson SET  lessonID = '$lessonID',  session = '$session',  instructorID = '$instructorID',  student1 = '$student1',  student2 = '$student2',  student3 = '$student3',  student4 = '$student4',  student5 = '$student5',  location = '$location' WHERE col = val "; 
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
 $query = " DELETE FROM Lesson WHERE col = val "; 
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

$lessonID = $_POST['lessonID'];  
$session = $_POST['session'];  
$instructorID = $_POST['instructorID'];  
$student1 = $_POST['student1'];  
$student2 = $_POST['student2'];  
$student3 = $_POST['student3'];  
$student4 = $_POST['student4'];  
$student5 = $_POST['student5'];  
$location = $_POST['location'];  

*/
?>