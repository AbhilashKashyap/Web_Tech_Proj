<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="form.css">

<style>
		

div.margin {
    margin: 20px 0 20px 0;
    padding: 20px;
	
	
}

div.ola1 {
    margin: 50px 150px 300px 150px;
    padding: 20px;
	border: 5px solid #999999;
    background-color: #34495e;
    text-align: center;
	
	
}
		
</style>
</head>
<body>
<div class="block -berry edge--bottom">
    <h1>Pizza Cafe|</h1>

    <nav class="menu">
        <a href="demo2.html" class=".menuitem">Home</a>
        <a href="about.html" class=".menuitem">About</a>
        <a href="table.html" class=".menuitem">Info</a>
        <a href="pizza_home.html" class=".menuitem">Customer</a>
        <a href="emp.html" class=".menuitem">Employee</a>
        <a href="#" class=".menuitem">Contact</a>
        <div class="animation start-home"></div>
    </nav>
    </div>

</div>

<?php 
	session_start();
	extract($_GET);
	$cust_id=$_SESSION['cust_id'];
	$con=mysqli_connect('localhost','root','','pizza_cafe');
	$sql="Insert into payment values('$card_no','$card_name','$card_type','$card_exp_date','$card_sec_code','$cust_id')";
	mysqli_query($con,$sql);
	
	/*session_start();
    extract($_GET);
    $_SESSION['uname']=$uname;*/
?>

<center style="position:relative; top:25%;"><strong><h1 id="hey">Thank you</h1></strong></center>



</body>
</html>


