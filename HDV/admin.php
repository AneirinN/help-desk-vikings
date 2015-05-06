<?php
session_start();  // Starts a new session or resumes an existing one
require 'includes/dbConnection.php';
$dbConn = getConnection();


function getLessons(){
    global $dbConn;

    $sql = "SELECT * FROM Lesson ORDER BY lessonId";
    $stmt = $dbConn -> prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

if (!isset($_SESSION['username'])) {   //checks whether the user has logged in
    header("Location: index.php");
}



if (isset ($_GET['deleteForm'])){  //checking whether we have clicked on the "Delete" button

    echo " Deleting record...";
    $sql = "DELETE FROM Lesson
             WHERE lessonID = :lessonID";
    $namedParameters = array();
    $namedParameters[':lessonID'] = $_GET['lessonID'];
    $stmt = $dbConn -> prepare($sql);
    //$stmt->execute($namedParameters);

}


?>




<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">



    <title>AT&T Pebble Beach Junior Golf Assoc. Admin Page</title>



    <!--    <link rel="icon" href="img/favicon.ico">-->
    <link rel="shortcut icon" href="img/logo.png" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <link href="css/styles.css" rel="stylesheet" />

    <!-- don't need to declare language, default is javascript -->
    <script>
        function confirmDelete(lessonName){
            //alert("hi"); //testing purposes

            var deleteRecord = confirm("Do you want to delete " + lessonName + "?");
            if (!deleteRecord){
                return false;
            } else {
                return true;
            }
        }

    </script>


</head>

<body>


<div id="wrapper">
    <h3><?echo "Welcome " . $_SESSION['adminName'];?></h3>


    <br><!--    Highly confidential information!--><br>

    <form action="logout.php">
        <input type="submit" value="Logout!" name="logout">
    </form>

    <h2>Update/Delete Lessons:</h2>



    <table>

        <?php

        $lessons = getLessons();
        foreach ($lessons as $lesson) {
            echo "<tr>";
            echo "<td>" . $lesson['lessonID'] . "</td>";
            echo "<td>" . $lesson['session'] . "</td>";
            echo "<td>" . $lesson['location'] . "</td>";
            echo "<td>" . $lesson['date'] . "</td>";
            ?>  <td>
		         <form action="updateLesson.php">
		             <input type="hidden" name="lessonID" value="<?=$lesson['lessonID']?>" />
		             <input type="submit" value="Update" name="updateForm"/>
		         </form>
		    </td>
		    <td>
		         <form onsubmit="return confirmDelete('<?=$lesson['lessonName']?>')">
		             <input type="hidden" name="lessonID" value="<?=$lesson['lessonID']?>" />
		             <input type="submit" value="Delete" name="deleteForm"/>
		         </form>
		    </td>
		   </tr>

		 <?php
        } //closes foreach

        ?>

    </table>

</div>
</body>
</html>
