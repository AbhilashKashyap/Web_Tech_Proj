
<!DOCTYPE html>
<html>
	<head>
		<title> PicsArt </title>
		<link rel="shortcut icon" href="Images/logo2.png">
		<link rel="stylesheet" type="text/css" href="intro.css">
		<link rel="stylesheet" type="text/css" href="form.css">
		<link rel="stylesheet" type="text/css" href="CSS/Writeup.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/hom.css"/>
		<link rel="stylesheet" href="CSS/animate.css">
		<link rel="stylesheet" href="JS/wow.min.js">
		<script src="JS/wow.min.js">
		</script>
<style>
		

div.margin {
    margin: 20px 0 20px 0;
    padding: 20px;
	
	
}

div.hey {
    margin: 50px 150px 300px 150px;
    padding: 20px;
	border: 5px solid #0059b3;
    background-color: #b3d9ff;
    text-align: center;
	position:relative;
	top:10%;
	
	
}


		
</style>
	</head>

	<body>
	
		<link rel="stylesheet" href="CSS/hom.css">
		<div class="first"><img class="logo" src="Images/logo3.png"></div>
		
		
		<div class="hi">
<div class="block -berry edge--bottom">
    

    <nav class="menu">
        <a href="home.html" class=".menuitem">Home</a>
        <a href="aboutus.html" class=".menuitem">About Us</a>
        <a href="image.html" class=".menuitem">Image processing</a>
        <a href="ibm.html" class=".menuitem">IBM Watson</a>
        <a href="django.html" class=".menuitem">Using Django</a>
        <a href="feedback.html" class=".menuitem">Feedback</a>		
        <div class="animation start-home"></div>
    </nav>
    </div>

</div>



<h1 class="ola1 wow fadeInLeft animated">Feedback</h1>
<?php 
	extract($_GET);
	$con=mysqli_connect('localhost','root','','ML');
	$sql="Insert into feedback values('$FirstName','$email','$bday','$occupation','$feedback')";
	mysqli_query($con,$sql);
?>
<center style="position:relative; top:25%;"><strong><h1 id="hey">Thank you for your feedback</h1></strong></center>

</body>

</html>



		
	

	
