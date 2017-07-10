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
	$sql="Insert into orders values('$order_id','$order_date','$delivery_date','$delivered_by','$bran_id','$cust_id')";
	mysqli_query($con,$sql);
	$sql1="Insert into order_pizza values('$pizza_id','$order_id')";
	mysqli_query($con,$sql1);
	$sql2="Insert into order_bev values('$bev_id','$order_id')";
	mysqli_query($con,$sql2);
	$sql3="Insert into order_side values('$side_id','$order_id')";
	mysqli_query($con,$sql3);
	$sql4="Insert into order_top values('$top_id','$order_id')";
	mysqli_query($con,$sql4);
	
	
	/*session_start();
    extract($_GET);
    $_SESSION['uname']=$uname;*/
?>

<div class="ola1">
<form name="myForm" method="get" action="form4.php" onsubmit="return validateForm()" class="topBefore" > 
Card Number:<br><input type="text" name="card_no" ><br><br><br>
Card Name:<br><input type="text" name="card_name" ><br><br><br>
Card Type:<br><input type="text" name="card_type" ><br><br><br>
Card Expiry Date:<br><input type="text" name="card_exp_date" placeholder="dd/mm/yyyy"><br><br><br>
Card SSC:<br><input type="text" name="card_sec_code" ><br><br><br>


<input type="submit" value="Submit">
</form>


</div> 

</body>
</html>

function validateForm() {
    var s = document.forms["myForm"]["card_exp_date"].value;
   var x= new Array;

x=s.split('/')

var d = new Date();

d.setDate(x[0])
d.setMonth(x[1]-1)
d.setFullYear(x[2])

var i = parseInt(x[0]);

if(x[0]>31)
{
		alert("wrong date input "); 		
		return false;
}	



var n =d.getDay()
if(n == 0)
	n = "Sunday ";
else if(n == 1)
	n = "Monday ";
else if(n == 2)
	n = "Tuesday ";
else if(n == 3)
	n = "Wednesday ";
else if(n == 4)
	n = "Thursday ";
else if(n == 5)
	n = "Friday ";
else
	n = "Saturday ";

var res;

if(i==1||i==21||i==31)
	res="st".sup()
else if(i==2||i==22)
	res="nd".sup()
else if(i==3||i==23)
	res="rd".sup()
else
	res="th".sup()

var b = parseInt(x[1]-1);
var c;

if(b == 0)
	c = "January ";
else if(b == 1)
	c = "February ";
else if(b == 2)
	c = "March ";
else if(b == 3)
	c = "April ";
else if(b == 4)
	c = "May ";
else if(b == 5)
	c = "June ";
else if(b == 6)
	c = "July ";
else if(b == 7)
	c = "August ";
else if(b == 8)
	c = "September ";
else if(b == 9)
	c = "October ";
else if(b == 10)
	c = "November ";
else if(b==11)
	c = "December ";
else
{
		alert("wrong date input "); 		
		return false;
}

if((x[1]==4||x[1]==6||x[1]==9||x[1]==11)&&x[0]>30)
{	
		alert("wrong date input "); 		
		return false;
			
}

else if((x[1]==2&&x[2]%4==0))
{
	if(x[2]%100==0&&x[2]%400==0)
		true;
	else if(x[2]%4==0)
		true;
	else if(x[0]>28)
	{
		alert("wrong date input ");
		return false	
		
	}
}
else if(x[0]>28 && x[1]==2)
		{
			alert("wrong date input ");
			return false;	
			
		}
		


}
</script>
