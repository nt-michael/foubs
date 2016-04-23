<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Take Test</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/radio.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<!-- The background image in css/bg.css is use with this link http://localhost:2000/img/foubs2.jpg... please take note of the port number when working with it on your machine
	-->
</head>
<body style="text-align: center">

	<?php include('navbar.php') ?>
	<div class="container">
		<div class="progress" style="border-radius: 0px 10px; width: 97%">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="49.98" aria-valuemin="0" aria-valuemax="100" style="width:49.98%">
				49.9%
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset"></div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">

			<form class="form-inline" role="form" action="test-7.php" method="POST">
				<div class="form-group">

					<!--<legend>N<sup>o</sup> 32</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Dance or act in a play:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1" title="TRUE" name="q32" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10" title="FALSE" name="q32" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 33</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Attend a concert,play and opera:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2"  title="TRUE" name="q33" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20"  title="FALSE" name="q33" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 34</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Watch movies or read articles with a musical or articles with a musical or artistic theme:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q34" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q34" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 35</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Write a creative story for fun or for publication:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4" title="TRUE" name="q35" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40" title="FALSE" name="q35" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 36</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Visit an art museum:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5"  title="TRUE" name="q36" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50"  title="FALSE" name="q36" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend >N<sup>o</sup> 37</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>play a musical instrument:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q37" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q37" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>			

					<!--<legend>N<sup>o</sup> 38</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Design a dress,piece of jewelry or furniture:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med7"  title="TRUE" name="q38" value="1" type="radio" required><span for="med7" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med70"  title="FALSE" name="q38" value="0" type="radio" required><span for="med70" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
				</div>
			</form>
		</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green;border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">	
			</div>
		</div>
		</div>
	</div>
</body>
</html>

<?php

	#if(isset($_POST["q26"]) && isset($_POST["q27"]) && isset($_POST["q28"] ) && isset($_POST["q29"]) && isset($_POST["q30"]) && isset($_POST["q31"])){
	$test5 = isset($_POST["q26"]) + isset($_POST["q27"]) + isset($_POST["q28"]) + isset($_POST["q29"]) + isset($_POST["q30"]) + isset($_POST["q31"]);
	//echo "This is a variable:".  $test5;
	$_SESSION["test5"] = "$test5";
	//echo "<br/>";
	//echo "this is a session: ".  $_SESSION["test5"];
	#}
?>