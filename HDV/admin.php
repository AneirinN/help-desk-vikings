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

function getReports()
{
    global $dbConn;
    
    $sql = "SELECT * FROM Lesson ORDER BY lessonId";
    $stmt = $dbConn -> prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    
    
    /*
    total number
    schools
    list by skill
    average age
    
    */
}

if (!isset($_SESSION['username'])) {   //checks whether the user has logged in
    header("Location: login.html");
}



if (isset ($_GET['deleteForm'])){  //checking whether we have clicked on the "Delete" button

    echo " Deleting record...";
    $sql = "DELETE FROM Lessons
             WHERE lessonId = :lessonId";
    $namedParameters = array();
    $namedParameters[':lessonId'] = $_GET['lessonId'];
    $stmt = $dbConn -> prepare($sql);
    
    //commented out to prevent unwanted deleting in testing
    //$stmt->execute($namedParameters);

}


?>




<html>
<head>
    <title></title>


    <link href="css/styles.css" rel="stylesheet" />

    <!-- don't need to declare language, default is javascript -->
    <script>
        function confirmDelete(lessonId){
            //alert("hi"); //testing purposes

            var deleteRecord = confirm("Do you want to delete Lesson " + lessonId + "?");
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




    <br>
    Highly confidential information!
    <br><br>

    <form action="logout.php">
        <input type="submit" value="Logout!" name="logout">
    </form>

    <h2>Update/Delete Lessons:</h2>



    <table>

        <?php

        $lessons = getLessons();
        foreach ($lessons as $lesson) {
            echo "<tr>";
            echo "<td>Lesson " . $lesson['lessonId'] . "</td>";
            ?>  <td>
		         <form action="updateLesson.php">
		             <input type="hidden" name="lessonId" value="<?=$lesson['lessonId']?>" />
		             <input type="submit" value="Update" name="updateForm"/>
		         </form>
		    </td>
		    <td>
		         <form onsubmit="return confirmDelete('<?=$lesson['lessonId']?>')">
		             <input type="hidden" name="lessonId" value="<?=$lesson['lessonId']?>" />
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
