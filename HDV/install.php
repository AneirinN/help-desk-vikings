<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
         Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>AT&T Pebble Beach Jr. Golf Association - Summer Golf Lesson Series 2015</title>

    <meta name="description" content="">
    <meta name="author" content="Help-Desk-Vikings">

    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">


    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- calendar stuff -->
    <link rel="stylesheet" type="text/css" href="calendar/calendar-blue2.css" />
    <script type="text/javascript" src="calendar/calendar.js"></script>
    <script type="text/javascript" src="calendar/calendar-en.js"></script>
    <script type="text/javascript" src="calendar/calendar-setup.js"></script>
    <!-- END calendar stuff -->

    <script src="js/signups.js"></script>

</head>

<body onLoad="collapseAll()">

	<div id="mainForm">




		<div id="formHeader">
				<h2 class="formInfo">hdv</h2>
				<p class="formInfo">att golf signups</p>
		</div>


		<BR/><form method=post action=install.php><ul class=mainForm><li class=mainForm><label class=formFieldQuestion>
<?php
 if(isset($_POST['submit']))
  {
	 mysql_connect($_POST['dbHostName'], $_POST['dbUser'], $_POST['dbPassword']);
	 mysql_select_db($_POST['dbName']);
	 mysql_query("CREATE TABLE `" . $_POST['dbTable']  . "` (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id) ,
	 field_1 TEXT ,
	 field_2 TEXT ,
	 field_3 TEXT ,
	 field_4 TEXT ,
	 field_5 TEXT ,
	 field_6 TEXT ,
	 field_7 TEXT ,
	 field_8 TEXT ,
	 field_9 TEXT ,
	 field_10 TEXT ,
	 field_11 TEXT ,
	 field_12 TEXT ,
	 field_13 TEXT ,
	 field_14 TEXT )") or die("Error! Table not be created.");

	echo "Table created. ";

	 $handle = fopen('config.inc.php', 'w');
	$content = "<?php
 \$db_host = \"" . $_POST['dbHostName'] . "\";";
	$content .= "\$db_user = \"" . $_POST['dbUser'] . "\";";
	$content .= "\$db_pass = \"" . $_POST['dbPassword'] . "\";";
	$content .= "\$db_name = \"" . $_POST['dbName'] . "\";";
	$content .= "\$db_table = \"" . $_POST['dbTable'] . "\";";
	$content .= "
?>";

	 if (fwrite($handle, $content) === FALSE) 
	{ 
		echo "Cannot write to file."; 
 		exit;
 	}

	 fclose($handle);

	echo "Configuration file written (config.inc.php). ";

}
 else
{ ?>
<li class="mainForm"><label class="formFieldQuestion">Hostname&nbsp;&nbsp;</label><input class=mainForm type=text name=dbHostName size='20' value='localhost'></li><li class="mainForm"><label class="formFieldQuestion">User&nbsp;&nbsp;</label><input class=mainForm type=text name=dbUser size='20' value='dbuser'></li><li class="mainForm"><label class="formFieldQuestion">Password&nbsp;&nbsp;</label><input class=mainForm type=text name=dbPassword size='20' value=''></li><li class="mainForm"><label class="formFieldQuestion">Database&nbsp;&nbsp;</label><input class=mainForm type=text name=dbName size='20' value='attgolf'></li><li class="mainForm"><label class="formFieldQuestion">Table&nbsp;&nbsp;</label><input class=mainForm type=text name=dbTable size='20' value=''></li><li class="mainForm"><input class=mainForm type=submit name=submit value='Install'></li></form>
<?php }

?></div>


    <div id="footer">
        <p class="footer"> &copy; Copyright  by Help-Desk-Vikings, CSUMB </p>
    </div>

</body>
</html>