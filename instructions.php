<?php 

$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>
<!doctype html>
<html >
<head>
<link rel="stylesheet" href="instruction.css"/>
<script>
function startQuiz(url){
	window.location = url;
}
</script>
</head>
<body >
<?php echo $msg; ?>
<h2 class="hea">General Instructions:</h2>

<div class="info">
<ol>
<li> The duration of the examination is 2 Hrs only. The candidates are required to be present at
the test venue at least 15 minutes prior to the scheduled test time.</li>
<li>Candidates are going to take a computer based online Test at a workstation.</li>
<li> Candidate can write the exam in any internet browsing center anywhere in India.</li>
<li> Candidate can use their own laptop with internet connection and write the exam in their own
convenient place.</li>
<li> Candidates are not allowed to access any unauthorized software/program during the
examination.</li>
<li> Candidates are allowed to use only mouse during the examination.</li>
<li>Candidate should not impersonate others to allow others to impersonate him/her in the
examination.</li>
<li>In case of system failure (power/machine/internet) the candidate will be allowed to reappear
as soon as the problem is rectified. He/she can continue the exam with the same username.
and password from where he/she is made a break</li>
</ol>
</div>


<button class="butto" onClick="startQuiz('quiz.php?question=1')">Click Here To Begin</button>
</body>
</html>