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
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="74.97" aria-valuemin="0" aria-valuemax="100" style="width:74.97%">
			74.9%
			</div>
		</div>

		<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2 offset">
		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">
		
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="" role="form" action="test-10.php" method="POST">
				<div class="form-group">

					<!--legend>N<sup>o</sup> 51</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
						<strong>Make a speech or presentation:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1"  title="TRUE" name="q51" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10"  title="FALSE" name="q51" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 52</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Meet influential people:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2" title="TRUE" name="q52" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20" title="FALSE" name="q52" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 53</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Lead a work project or committee:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q53" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q53" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 54</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Sell items or services:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4"  title="TRUE" name="q54" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40"  title="FALSE" name="q54" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 55</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Participate in a political campaign:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5" title="TRUE" name="q55" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50" title="FALSE" name="q55" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 56</legend>-->
					<div class="row">
						<div class="col-md-8" style="text-align:right">
							<strong>Help settle disputes:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q56" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q56" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;"class="glyphicon glyphicon-thumbs-down"></span></label>
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

	#if(isset($_POST["q46"]) && isset($_POST["q47"]) && isset($_POST["q48"] ) && isset($_POST["q49"]) && isset($_POST["q50"])) {
	$test8 = isset($_POST["q46"]) + isset($_POST["q47"]) + isset($_POST["q48"]) + isset($_POST["q49"]) + isset($_POST["q50"]);
	//echo $test8;
	//echo "<br/>";
	//echo $_SESSION["test7"];

	$test7 = $_SESSION["test7"];

	$test7_8 = $test8 + $test7;
	$_SESSION["test7_8"] = "$test7_8";
	
	//echo "<br/>";
	//echo $_SESSION["test7_8"];
	#}
?>