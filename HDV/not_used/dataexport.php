<?php
/**
 * Created by PhpStorm.
 * User: Aneirin
 * Date: 5/3/2015
 */

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

/*  //sample data//
  $data = array(
      array("firstname" => "Mary", "lastname" => "Johnson", "age" => 25),
      array("firstname" => "Amanda", "lastname" => "Miller", "age" => 18),
      array("firstname" => "James", "lastname" => "Brown", "age" => 31),
      array("firstname" => "Patricia", "lastname" => "Williams", "age" => 7),
      array("firstname" => "Michael", "lastname" => "Davis", "age" => 43),
      array("firstname" => "Sarah", "lastname" => "Miller", "age" => 24),
      array("firstname" => "Patrick", "lastname" => "Miller", "age" => 27)
  );
*/

  function cleanData(&$str)
  {
      if($str == 't') $str = 'TRUE';
      if($str == 'f') $str = 'FALSE';
      if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
          $str = "'$str";
      }
      if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "website_data_" . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv");

  $out = fopen("php://output", 'w');

  $flag = false;

//postgreSQL
//$result = pg_query("SELECT * FROM table ORDER BY field") or die('Query failed!');
//while(false !== ($row = pg_fetch_assoc($result))) {
//}

  foreach($data as $row) {
      if(!$flag) {
          // display field/column names as first row
          fputcsv($out, array_keys($row), ',', '"');
          $flag = true;
      }
      array_walk($row, 'cleanData');
      fputcsv($out, array_values($row), ',', '"');
  }

  fclose($out);
  exit;





