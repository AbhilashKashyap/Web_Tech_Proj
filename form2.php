<html>
<head>
<link rel="stylesheet" href="CSS/hom.css">
		<div class="center1 first"><img class="logo" src="Images/geek.jpg"></div>
		<div class="mainbar">
			<a href="home.html"><img class="barsize home" style="position:relative; top:0;left:0;" src="Images/home.jpg"></a>
			<input type="text" name="search" placeholder="Search.." style="position:absolute; top:25%; left:90%;">
			<button style="position:relative; top:-40%; left:-0.5%;" class="button home">Geekipedia</button>
			<button style="position:relative; top:-40%; left:-0.65%;" class="button home">News</button>
			<a href="feedback.html"><button style="position:relative; top:-40%; left:-0.75%;" class="button home">Feedback</button></a>
		</div>
<style>
body {
		background-image:url("Feedback/img_13.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-position:fixed;		
}
#hey{
	font: italic bold Georgia, serif;
	position:relative;
	color:white;
	top:50%;
}
</style>
</head>
<body>
<?php 
	extract($_GET);
	$con=mysqli_connect('localhost','root','','wtproj');
	$sql="Insert into feedback values('$FirstName','$email','$bday','$occupation','$feedback')";
	mysqli_query($con,$sql);
?>
<center><strong><h1 id="hey">Thank you for your feedback</h1></strong></center>

</body>
</html>
