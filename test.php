
<?php
	session_start();
?>
<?php #include('navbar.php') ?>
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

<body style="text-align: center; "><!--#F5F5F5-->
<?php require('navbar.php') ?>
	<br/><br/>

	
	
	<div class="container">
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="8.33" aria-valuemin="0" aria-valuemax="100" style="width:8.33%; border-radius: 0px 10px">
				8.3%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-sm-2 col-lg-2 offset"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">
		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px; width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-2.php" method="POST">
				
				<!-- Place there values -->
				<div class="form-group">
					<!--<legend>N<sup>o</sup> 1</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left">
							<strong>Drive a bus or truck or operate large machines</strong>
						</div>
						<div class="col-md-4" style="text-align:right">
							<label class="radio-inline"><input id="med"  title="TRUE" name="q1" value="1" type="radio" required><span for="med" class="check"></span><span style="font-size: 30px; color:;"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med1" title="FALSE" name="q1" value="0" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px; color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>


					<!--<legend>N<sup>o</sup> 2</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left">
							<strong>Use carpentry tools to build items with woods</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">	
							<label class="radio-inline"><input id="med2" title="TRUE" name="q2" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20" title="FALSE" name="q2" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 3</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left;">
							<strong>Plant trees</strong>
						</div>
						<div class="col-md-4" style="text-align: right;">
							<label class="radio-inline"><input id="med3" title="TRUE" name="q3" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30" title="FALSE" name="q3" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 4</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left">
							<strong>Repair stereos(radios), computers or small appliance:</strong>
						</div>
						<div class="col-md-4" style="text-align: right">				
							<label class="radio-inline"><input id="med4" title="TRUE" name="q4" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40" title="FALSE" name="q4" value="0" type="radio" required><span for="med40" class="check"></span><span for="med40" style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 5</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:left">
							<strong>Hunt or fish</strong>
						</div>
						<div class="col-md-4" style="text-align: right">
							<label class="radio-inline"><input id="med5" title="TRUE" name="q5" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;color:" class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med50" title="FALSE" name="q5" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 6</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align: left">
							<strong>Raise or train animals</strong>
						</div>
						<div class="col-md-4" style="text-align: right">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q6" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q6" value="0" type="radio" required><span for="med60"class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
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