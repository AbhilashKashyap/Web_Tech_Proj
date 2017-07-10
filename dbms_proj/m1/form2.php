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
table, td, th{
			border: 1px solid #ddd;
			text-align: left;
}

table{
		border-collapse: collapse;
		width: 100%;
}

th,td{
	padding: 15px;
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
	$_SESSION['cust_id']=$cust_id;
	$con=mysqli_connect('localhost','root','','pizza_cafe');
	$sql="Insert into customer values('$cust_id','$cust_fname','$cust_lname','$cust_address','$cust_city','$cust_state','$cust_postcode','$cust_mobile','$cust_email')";
	mysqli_query($con,$sql);
	
	/*session_start();
    extract($_GET);
    $_SESSION['uname']=$uname;*/
?>
<div class="ola1">

<table style="width:100%">
  <tr>
    <th>Pizza id</th>
    <th>Pizza name</th> 
    <th>Sides id</th>
	<th>Sides name</th> 
	<th>Beverages id</th>
    <th>Beverages name</th> 
	<th>Toppings id</th>
    <th>Toppings name</th> 
  </tr>
  <tr>
    <td>p1</td>
	<td>asd</td>
    <td>s1</td>
	<td>side1</td>
	<td>b1</td>
	<td>bev1</td>
	<td>t1</td>
	<td>top1</td>
  </tr>
    <tr>
    <td>p2</td>
	<td>fire</td>
    <td>s2</td>
	<td>side2</td>
	<td>b2</td>
	<td>bev2</td>
	<td>t2</td>
	<td>top2</td>
  </tr>
    <tr>
    <td>p3</td>
	<td>farmhouse</td>
    <td>s3</td>
	<td>side3</td>
	<td>b3</td>
	<td>bev3</td>
	<td>t3</td>
	<td>top3</td>
  </tr>
    <tr>
    <td>p4</td>
	<td>dean</td>
    <td>s4</td>
	<td>side4</td>
	<td>b4</td>
	<td>bev4</td>
	<td>t4</td>
	<td>top4</td>
  </tr>
    <tr>
    <td>p5</td>
	<td>abcbilly</td>
    <td>s5</td>
	<td>side5</td>
	<td>b5</td>
	<td>bev5</td>
	<td>t5</td>
	<td>top5</td>
  </tr>
    <tr>
    <td>p6</td>
	<td>special</td>
    <td>s6</td>
	<td>side6</td>
	<td>b6</td>
	<td>bev6</td>
	<td>t6</td>
	<td>top6</td>
  </tr>
    <tr>
    <td>p7</td>
	<td>add</td>
    <td>s7</td>
	<td>side7</td>
	<td>b7</td>
	<td>bev7</td>
	<td>t7</td>
	<td>top7</td>
  </tr>
    <tr>
    <td>p8</td>
	<td>happy</td>
    <td>s8</td>
	<td>side8</td>
	<td>b8</td>
	<td>bev8</td>
	<td>t8</td>
	<td>top8</td>
  </tr>
    <tr>
    <td>p9</td>
	<td>great</td>
    <td>s9</td>
	<td>side9</td>
	<td>b9</td>
	<td>bev9</td>
	<td>t9</td>
	<td>top9</td>
  </tr>
    <tr>
    <td>p10</td>
	<td>lost</td>
    <td>s10</td>
	<td>side10</td>
	<td>b10</td>
	<td>bev10</td>
	<td>t10</td>
	<td>top10</td>
  </tr>
 
</table>
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