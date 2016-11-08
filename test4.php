	<html>
	<head>
	<style>
		.sres{
			width:100%;
			height:10px;
			z-index:4;
			margin-top:1px;
			margin-bottom:1px;
			top:-10%;
		}
		a,.white{
			color:white;
		}
		.container{
			position:absolute;
			top:24%;
			left:12%;
			width:80%;
		}
	</style>
	</head>
	<link rel="stylesheet" href="CSS/hom.css">
		<div class="first"><img class="logo" src="Images/geek.jpg"></div>
		<div class="mainbar">
			<a href="home.html"><img class="barsize home" style="position:relative; top:0;left:0;" src="Images/home.jpg"></a>
			<a href="geekipedia.html"><button style="position:relative; top:-40%; left:-0.5%;" class="button home">Geekipedia</button></a>
			<button style="position:relative; top:-40%; left:-0.65%;" class="button home">News</button>
			<a href="feedback.html"><button style="position:relative; top:-40%; left:-0.75%;" class="button home">Feedback</button></a>
		</div>
		<form name="search1" method="post" action="test4.php" id="search" onsubmit="return false"><input type="text" id="search1" name="search" placeholder="Search.." style="position:fixed; top:16%; left:90%; z-index:6;"></form>
		
	<?php
	extract($_POST);
	$search=trim($search);
	$query=explode(' ',$search);
	$myfile = fopen("query.txt", "w") or die("Unable to open file!");
	foreach ($query as $i){
        	fputs($myfile,$i.' ');
	}
	fclose($myfile);
	exec("try.exe");
	unlink("query.txt");
	$myfile2 = fopen("ds2.txt", "r") or die("Unable to open file!");
  $link_array=array("home.html"=>'Geek World Homepage','aboutus.html'=>'About the Authors','feedback.html'=>'Give us your feedback!','geekipedia.html'=>'Geekipedia Index','pokemon.html'=>'Geekipedia Pokemon Page','sonic.html'=>'Geekipedia Sonic Page','star.html'=>'Geekipedia Star Wars page','startrek.html'=>'Geekipedia Star Trek page');
	$flag=1;
	echo "<div class='container'>";
	while(! feof($myfile2)){
		$result=fgets($myfile2);
		$result=explode(',',$result);
		if(isset($result[1])){
		echo "<div class='sres'><a href=".$result[1].">".$result[0]."-".$link_array[trim($result[1])]."</a></div><br>";
		$flag=0;
		}
	}
	if($flag){
		echo "<strong class='white'>No results Found.</strong>";
	}
	echo "</div>";
	fclose($myfile2);
    unlink("ds2.txt");
?>
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
	<body>
</body>
</html>