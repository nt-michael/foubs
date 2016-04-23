<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>

<body style="text-align: center">

	<?php include('navbar.php') ?>
	
	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="24.9" aria-valuemin="0" aria-valuemax="100" style="width:24.99%">
			24.9%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-sm-2 col-lg-2 offset"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">

		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-4.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 13</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Solve math problems or quizzes:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1" title="TRUE" name="q13" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px; color:;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10" title="FALSE" name="q13" value="0" type="radio" required><span for="med" class="check"></span><span style="font-size: 30px; color:;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 14</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>work with a chemistry set:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2"  title="TRUE" name="q14" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20"  title="FALSE" name="q14" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 15</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Read mystery books and solve mysteries:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q15" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;			
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q15" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 16</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Watch scientific TV programs and read scientific books or magazines:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4" title="TRUE" name="q16" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40" title="FALSE" name="q16" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 17</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Work in a laboratory:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5"  title="TRUE" name="q17" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50"  title="FALSE" name="q17" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 18</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Use or discuss computers and software:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q18" value="1" type="radio" required><span class="check" for="med6"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;				
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q18" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 19</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Compare and analyse budget figures:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med7" title="TRUE" name="q19" value="1" type="radio" required><span for="med7" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med70" title="FALSE" name="q19" value="0" type="radio" required><span for="med70" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					
					<br/><br/>

					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
				</div>
			</form>
		</div>
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green;border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">
				
			</div>
		</div>
	</div>
</body>
</html>

<?php

	#if(isset($_POST["q7"]) && isset($_POST["q8"]) && isset($_POST["q9"] ) && isset($_POST["q10"]) && isset($_POST["q11"]) && isset($_POST["q12"])){
	$test2 = isset($_POST["q7"]) + isset($_POST["q8"]) + isset($_POST["q9"]) + isset($_POST["q10"]) + isset($_POST["q11"]) + isset($_POST["q12"]);
	#echo $test2;
	#echo "<br/>";
	#echo $_SESSION["test1"];

	$test = $_SESSION["test1"];

	$test1_2 = $test2 + $test;
	$_SESSION["test1_2"] = "$test1_2";
	
	#echo "<br/>";
	#echo $_SESSION["test1_2"];
	#}
?>