<!DOCTYPE html>
<html>
<head>

<style>
body{
	background-color:black;
}		

div.margin {
    background-color:#e60000;
    color: black;
    margin: 20px 0 20px 0;
    padding: 20px;
	
	
}

div.ola1 {
    background-color:#f2f2f2;
    color: black;
    margin: 50px 150px 300px 150px;
    padding: 20px;
	border: 5px solid #999999;
  
	
	
}
h1{
	color: white;
	}
		
</style>
</head>
<body>
<div class="margin">

<center><img src="img2.png" style="width:304px;height:100px;"></center>


</div> 
<?php 
	extract($_GET);
	$con=mysqli_connect('localhost','root','','pizza_cafe');
	$sql="Insert into customer values('$cust_id','$cust_fname','$cust_lname','$cust_address','$cust_city','$cust_state','$cust_postcode','$cust_mobile','$cust_email')";
	mysqli_query($con,$sql);
?>
<center style="position:relative; top:25%;"><strong><h1 id="hey">Thank you</h1></strong></center>

</body>
</html>