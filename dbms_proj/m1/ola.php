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
        <a href="#" class=".menuitem">About</a>
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
	$_SESSION['cust_id']=$cust_id;
	$con=mysqli_connect('localhost','root','','pizza_cafe');
	$sql="Insert into customer values('$cust_id','$cust_fname','$cust_lname','$cust_address','$cust_city','$cust_state','$cust_postcode','$cust_mobile','$cust_email')";
	mysqli_query($con,$sql);
	
	/*session_start();
    extract($_GET);
    $_SESSION['uname']=$uname;*/
?>
<center style="position:relative; top:25%;"><strong><h1 id="hey">Thank you</h1></strong></center>
<div class="ola1">
<form name="myForm" method="get" action="form3.php" onsubmit="return validateForm()" class="topBefore" > 
Order ID:<br><input type="text" name="order_id" ><br><br>
Branch ID:<br><input type="text" name="bran_id" ><br><br>
Order Date:<br><input type="text" name="order_date" ><br><br>
Delivery Date:<br><input type="text" name="delivery_date" ><br><br>
Delivery By:<br><input type="text" name="delivered_by" ><br><br>
Pizza ID:<br><input type="text" name="pizza_id" ><br><br>
Beverages ID:<br><input type="text" name="bev_id" ><br><br>
Sides ID:<br><input type="text" name="side_id" ><br><br>
Toppings ID:<br><input type="text" name="top_id" ><br><br>


<input type="submit" value="Submit">
</form>


</div> 

</body>
</html>