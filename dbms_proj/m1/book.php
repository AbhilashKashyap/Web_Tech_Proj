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

 
<center><h1>Tables</h1></center>

<div class="ola1">
<?php 
    session_start();
    extract($_GET);
    /*$_SESSION['cust_id']=$cust_id;*/
    $con=mysqli_connect('localhost','root','','pizza_cafe');

    $query = "select emp_id,emp_fname,emp_lname,emp_address,emp_mobile from employee where emp_city = '$from' ";
    $result = $con->query($query);
    if(!$result)
        die($con->error);

    $rows = $result->num_rows;
    echo "<table border: '2px'><tr> <th> Employee ID </th> <th> Fname </th> <th> Lname </th> <th> Address </th> <th> Mobile </th> </tr>";
    for($j = 0 ; $j < $rows ; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for($k = 0 ; $k < 5 ; ++$k)
            echo "<td>$row[$k]</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</div>

</body>

<script>
 var a = document.forms["myForm"]["cust_email"].value;
    var atpos = a.indexOf("@");
    var dotpos = a.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=a.length) {
        alert("Not a valid e-mail address");
        return false;
    
}
</script>
</html>