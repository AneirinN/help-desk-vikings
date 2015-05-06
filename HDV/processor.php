<?php

/*
$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
    // Checkbox handling
    $field_2_opts = $_POST['field_2'][0];

    include("config.inc.php");
    $link = mysql_connect($db_host,$db_user,$db_pass);
    if(!$link) die ('Could not connect to database: '.mysql_error());
    mysql_select_db($db_name,$link);
    $query = "INSERT into `".$db_table."` (field_1,field_2,field_3,field_4,field_5,field_6,field_7,field_8,field_9,field_10,field_11,field_12,field_13,field_14) VALUES ('" . $_POST['field_1'] . "','" . $_POST['field_2'] . "','" . $_POST['field_3'] . "','" . $_POST['field_4'] . "','" . $_POST['field_5'] . "','" . $_POST['field_6'] . "','" . $_POST['field_7'] . "','" . $_POST['field_8'] . "','" . $_POST['field_9'] . "','" . $_POST['field_10'] . "','" . $_POST['field_11'] . "','" . $_POST['field_12'] . "','" . $_POST['field_13'] . "','" . $_POST['field_14'] . "')";
    mysql_query($query);
    mysql_close($link);


    include("confirm.html");

} else {
    echo "Invalid Captcha String.";
}
*/

?>