<html>
<head>
</head>
<body>
    <?php
    session_start();
    echo("<h1>Welcome to the world of cricket</h1>");
    if(isset($_SESSION["uname"]))
        echo "welcome back ".$_SESSION["uname"]."<br>";
    else
        echo "<h2>Who are you??</h2>"; 
    ?>
    
    <form method="get" action="session2.php"> 
    <input type="text" name="uname">
    
    
    <label>Favourite Team : <input type="text" name="cteam"></label> 
  
    <input type="submit">
    </form>
</body>
</html>
