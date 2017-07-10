<?php
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_database="wtproj";
$db_server=mysql_connect($db_hostname,$db_username,$db_password) or die("ould not connect");
mysql_select_db($db_database,$db_server) or die("Could not connect to database");
?>
