<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "shopping";
$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
$mysqli->select_db($mysql_database) or die("Could not select database");

?>