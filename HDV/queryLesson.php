<?php //Query 

 //INSERT
/*
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
*/

require 'includes/dbConnection.php';

$dbConn = getConnection();



if( $result ) {
    //echo 'Success';
}
else {
    //echo 'Query Failed';
}

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:100px;border:1px solid black;border-collapse:collapse;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="spash page">
    <meta name="author" content="Help-Desk-Vikings">

    <title>AT&T Pebble Beach Junior Golf Assoc. Lessons</title>

    <!--    <link rel="icon" href="img/favicon.ico">-->
    <link rel="shortcut icon" href="img/logo.png" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.flatly.css" rel="stylesheet">

    <!--        <link href="css/style.css" rel="stylesheet" />-->

</head>
<body>
<div class="container-fluid">

<!--    <img src="img/logo.png" class="img-responsive" alt="Logo">-->


    <?php

    $sql = " SELECT * FROM Instructor";
    $stmt = $dbConn -> prepare($sql);
    $stmt->execute();
    $instructor = $stmt->fetchAll();


    echo "<br /><br /> List of all the Lessons: <br /><br />";


    //try to print out table with firstname, lastname
    echo "<table style='border: solid 1px black;border-collapse:collapse;'>";
    echo "<tr><th>Lesson #</th><th>Session #</th><th>Instructor</th><th><pre>           </pre></th>
      <th>Location</th><th>Date</th><th>Students Enrolled</th></tr>";

    try {
        //$sql = " SELECT lessonID, session, instructorID, location, date, studentCount FROM Lesson ";
        $sql = "SELECT Lesson.lessonID, Lesson.session, Instructor.firstName, Instructor.lastName,
                   Lesson.location, Lesson.date, Lesson.studentCount
            FROM Lesson INNER JOIN Instructor
            ON Lesson.instructorID = Instructor.instructorID
            ORDER BY Lesson.lessonID";
        $stmt = $dbConn -> prepare($sql);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $dbConn = null;
    echo "</table>";



    ?>

    <form action="index.php" method="post" class="form-signin">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="mainPage">Back</button>
    </form>



</div> <!-- /container -->


</body>
</html>

