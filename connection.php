<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
$servername = "localhost";
$username = "root";
$password = "django";
$dbname = "ems";
//$conn = mysql_connect($servername,$username,$password);
$conn = mysqli_connect($servername,$username,$password,$dbname) or die("Connection failed: " . mysqli_connect_error());
//$db=mysql_select_db($dbname);
?>
