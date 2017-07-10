<?php
session_start();
$_SESSION['cname']=$_POST["cname"];
echo "Favourite team :".$_SESSION["cteam"]."<br>";
echo "Favourite cricketer :".$_SESSION["cname"]."<br>";
?>
