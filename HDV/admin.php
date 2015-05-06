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
    header("Location: login.html");
}



if (isset ($_GET['deleteForm'])){  //checking whether we have clicked on the "Delete" button

    echo " Deleting record...";
    $sql = "DELETE FROM soc_college
             WHERE collegeId = :collegeId";
    $namedParameters = array();
    $namedParameters[':collegeId'] = $_GET['collegeId'];
    $stmt = $dbConn -> prepare($sql);
    //$stmt->execute($namedParameters);

}


?>




<html>
<head>
    <title></title>


    <link href="css/styles.css" rel="stylesheet" />

    <!-- don't need to declare language, default is javascript -->
    <script>
        function confirmDelete(collegeName){
            //alert("hi"); //testing purposes

            var deleteRecord = confirm("Do you want to delete " + collegeName + "?");
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

    <h2>Update/Delete Colleges:</h2>



    <table>

        <?php

        $colleges = getColleges();
        foreach ($colleges as $college) {
            echo "<tr>";
            echo "<td>" . $college['collegeName'] . "</td>";
            ?>  <td>
		         <form action="updateCollege.php">
		             <input type="hidden" name="collegeId" value="<?=$college['collegeId']?>" />
		             <input type="submit" value="Update" name="updateForm"/>
		         </form>
		    </td>
		    <td>
		         <form onsubmit="return confirmDelete('<?=$college['collegeName']?>')">
		             <input type="hidden" name="collegeId" value="<?=$college['collegeId']?>" />
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
