<?php
    session_start();
    extract($_GET);
    $_SESSION['uname']=$uname;
    echo("session set successfully");
     $_SESSION['cteam']=$_GET['cteam'];
    ?>
    
 <!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post" action="session3.php">
    <label>Favourite cricketer :<input type="text" name="cname"/></label>
    <input type="submit"/>
    </form>
</body>
</html>
