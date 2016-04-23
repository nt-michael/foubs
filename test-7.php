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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-value ="58.31" aria-valuemin="0" aria-valuemax="100" style="width:58.31%">
				58.3%
			</div>
		</div>
		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset">
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-8.php" method="POST">
				<div class="form-group">

					<!--<legend>N<sup>o</sup> 39</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Take a class in interpersonal relations:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1" title="TRUE" name="q39" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10" title="FALSE" name="q39" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 40</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Provide care for children:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2"  title="TRUE" name="q40" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20"  title="FALSE" name="q40" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>


					<br/><br/>

					<!--<legend>N<sup>o</sup> 41</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Belong to clubs or atten conferences and networking meetings:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q41" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q41" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 42</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Help someone “new” become acquainted with others and make friends :</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4" title="TRUE" name="q42" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40" title="FALSE" name="q42" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 43</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Teach classmates or a class:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5"  title="TRUE" name="q43" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50"  title="FALSE" name="q43" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 44</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Meet and get to know new people:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q44" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q44" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 45</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Learn about new cultures and groups of people:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline" ><input id="med7"  title="TRUE" name="q45" value="1" type="radio" required><span for="med7" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med70"  title="FALSE" name="q45" value="0" type="radio" required><span for="med70" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
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

	#if(isset($_POST["q32"]) && isset($_POST["q33"]) && isset($_POST["q34"] ) && isset($_POST["q35"]) && isset($_POST["q36"]) && isset($_POST["q37"]) && isset($_POST["q38"])){
	$test6 = isset($_POST["q32"]) + isset($_POST["q33"]) + isset($_POST["q34"]) + isset($_POST["q35"]) + isset($_POST["q36"]) + isset($_POST["q37"]) + isset($_POST["q38"]);
	//echo $test6;
	//echo "<br/>";
	//echo $_SESSION["test5"];

	$test5 = $_SESSION["test5"];

	$test5_6 = $test6 + $test5;
	$_SESSION["test5_6"] = "$test5_6";
	
	//echo "<br/>";
	//echo $_SESSION["test5_6"];
	#}
?>