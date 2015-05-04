<?php
session_start();
require 'includes/dbConnection.php';
$dbConn = getConnection();

if (!isset($_SESSION['username'])){
    header("Location: index.php");
}



?>


<html>
<head>
    <title></title>
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>


<div id="wrapper">

    <?echo "Record has been updated!";?>
    <br />



    <br /><a href="admin.php">Go Back</a><br />

    <form method="post">

<!--        College Name: <input type="text" name="collegeName" value="--><?//=$result['collegeName']?><!--"> <br />-->

    <form id="form1" name="form1" method="post" action="post">
        <label for="lessonID">Lessonid</label><input type="text" name="lessonID" id="lessonID" />
        <br class="clear" />
        <label for="session">Session</label><input type="text" name="session" id="session" />
        <br class="clear" />
        <label for="instructorID">Instructorid</label><input type="text" name="instructorID" id="instructorID" />
        <br class="clear" />
        <label for="student1">Student1</label><input type="text" name="student1" id="student1" />
        <br class="clear" />
        <label for="student2">Student2</label><input type="text" name="student2" id="student2" />
        <br class="clear" />
        <label for="student3">Student3</label><input type="text" name="student3" id="student3" />
        <br class="clear" />
        <label for="student4">Student4</label><input type="text" name="student4" id="student4" />
        <br class="clear" />
        <label for="student5">Student5</label><input type="text" name="student5" id="student5" />
        <br class="clear" />
        <label for="location">Location</label><input type="text" name="location" id="location" />
        <br class="clear" />

        <input type="submit" name="updateForm" value="Update!">
    </form>


</div>
</body>
</html>