<?php
session_start();
session_destroy();
header("Location: index.php");  //takes users back to login screen

?>