<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Take Test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>
<body style="text-align: center;background:">

	<?php include('navbar.php') ?>

	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="16.66" aria-valuemin="0" aria-valuemax="100" style="width:16.66%; border-radius: 0px 10px">
				16.7%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-sm-2 col-lg-2 offset"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-3.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 7</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left;">
							<strong >Work independently, solving concrete, practical problems</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline"><input id="med7" title="TRUE" name="q7" value="1" type="radio" required><span for="med7" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>
							<label class="radio-inline"><input id="med70" title="FALSE" name="q7" value="0" type="radio" required><span for="med70" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 8</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align: left;">
							<strong>Develop film</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline"><input class="med"  title="TRUE" name="q8" value="1" type="radio" required><span for="med8" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>
							<label class="radio-inline"><input class="med"  title="FALSE" name="q8" value="0" type="radio" required><span for="med80" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>	

					<br/><br/>

					<!--<legend>N<sup>o</sup> 9</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align: left;">
							<strong>Serve in the military</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline"><input id="med9"  title="TRUE" name="q9" value="1" type="radio" required><span for="med9" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>				
							<label class="radio-inline"><input id="med90" title="FALSE" name="q9" value="0" type="radio" required><span for="med90" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 10</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align: left;">
							<strong>Repair of bikes, cars, motorcycles</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline"><input id="med10" title="TRUE" name="q10" value="1" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>
							<label class="radio-inline"><input id="med100" title="FALSE" name="q10" value="0" type="radio" required><span for="med100" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 11</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align: left;">
							<strong>Spend time browsing in a cybercafé</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline "><input id="med11"  title="TRUE" name="q11" value="1" type="radio" required><span for="med11" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med110"  title="FALSE" name="q11" value="0" type="radio" required><span for="med110" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 12</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align: left;">
							<strong>Operate a sewing or grinding machine</strong>&nbsp;
						</div>
						<div class="col-md-4" style="text-align: right">
							<label class="radio-inline"><input id="med12"  title="TRUE" name="q12" value="1" type="radio" required><span for="med12" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med120"  title="FALSE" name="q12" value="0" type="radio" required><span for="med120" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
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
	</div>
</body>
</html>
<?php

	#if(isset($_POST["q1"]) || isset($_POST["q2"]) || isset($_POST["q3"] ) || isset($_POST["q4"]) || isset($_POST["q5"]) || isset($_POST["q6"])){
	$test1 = isset($_POST["q1"]) + isset($_POST["q2"]) + isset($_POST["q3"]) + isset($_POST["q4"]) + isset($_POST["q5"]) + isset($_POST["q6"]);
	#echo "This is a variable:".  $test1;
	$_SESSION["test1"] = "$test1";
	#echo "<br/>";
	#echo "this is a session: ".  $_SESSION["test1"];
#}
?>