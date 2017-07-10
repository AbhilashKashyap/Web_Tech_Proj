<html>
<head>
<link rel="stylesheet" href="CSS/hom.css">
		<div class="center1 first"><img class="logo" src="Images/geek.jpg"></div>
		<div class="mainbar">
			<a href="home.html"><img class="barsize home" style="position:relative; top:0;left:0;" src="Images/home.jpg"></a>
			<a href="geekipedia.html"><button style="position:relative; top:-40%; left:-0.5%;" class="button home">Geekipedia</button></a>
			<a href="news.html"><button style="position:relative; top:-40%; left:-0.65%;" class="button home">News</button></a>
			<a href="feedback.html"><button style="position:relative; top:-40%; left:-0.75%;" class="button home">Feedback</button></a>
		</div>
		<form name="search1" method="post" action="test4.php" id="search" onsubmit="return false"><input type="text" id="search1" name="search" placeholder="Search.." style="position:fixed; top:16%; left:90%; z-index:6;"></form>
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
<center style="position:relative; top:25%;"><strong><h1 id="hey">Thank you for your feedback</h1></strong></center>
<hr style="color:#404040; background-color:#404040; position:relative; bottom:-30%; width:100%; z-index:3 border-style:double;">
	<div style="color:white; position:relative; bottom:-30%; text-align:center;"><p>Copyright  2016  <a href="aboutus.html">About Us</a></p>
	</div>
<script>
			document.getElementById("search").onsubmit=f1;
			function f1(){
				test=document.getElementById("search1");
				if(test.value.trim()){
					return true;
				}
				return false;			
			}
		</script>
</body>
</html>
