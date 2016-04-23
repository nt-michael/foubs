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
		<div class="progress" style="border-radius: 0px 10px;width: 97%">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33.32" aria-valuemin="0" aria-valuemax="100" style="width:33.32%">
				33.3%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-sm-2 col-lg-2 offset"></div>
		<div class="col-md-6">
		<div class="jumbotron" style="width: 100%;background-color:white; border-radius: 60px 0px; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-5.php" method="POST">
				<div class="form-group">
				
					<!--<legend>N<sup>o</sup> 20</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Observe behavioral or scientific phenomena:</strong>&nbsp;
						</div>'
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1"  title="TRUE" name="q20" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up"></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10"  title="FALSE" name="q20" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down"></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 21</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Develop a survey questionnaire for a project:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2"  title="TRUE" name="q21" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20"  title="FALSE" name="q21" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 22</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Use a miscroscope or telescope:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3" title="TRUE" name="q22" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30" title="FALSE" name="q22" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 23</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Play chess or other strategy games:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4"  title="TRUE" name="q23" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40"  title="FALSE" name="q23" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 24</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Analyze and solve abstract problems</strong>&nbsp;	
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5"  title="TRUE" name="q24" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;				
							<label class="radio-inline"><input id="med50"  title="FALSE" name="q24" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 25</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Collect data for an exercise or experiment</strong>&nbsp;
						</div>
						<div class="col-md-4"style="text-align:right">
							<label class="radio-inline"><input id="med6"  title="TRUE" name="q25" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med60"  title="FALSE" name="q25" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>


					<br/><br/>
					<button type="submit" class="btn btn-success" name="BTN">GO NEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
				</div>

			</form>
		</div>
		</div>
		<div class="col-md-4">
			<div class="well" style="width:90%; height:500px; border-right-color: green; border-right-width: 5px; border-bottom-width: 5px; border-bottom-color: green">
			</div>
		</div>
		</div>
	</div>
</body>
</html>

<?php

	#if(isset($_POST["q13"]) && isset($_POST["q14"]) && isset($_POST["q15"] ) && isset($_POST["q16"]) && isset($_POST["q17"]) && isset($_POST["q18"]) && isset($_POST["q19"])){
	$test3 = isset($_POST["q13"]) + isset($_POST["q14"]) + isset($_POST["q15"]) + isset($_POST["q16"]) + isset($_POST["q17"]) + isset($_POST["q18"]) + isset($_POST["q19"]);
	#echo "This is a variable:".  $test3;
	$_SESSION["test3"] = "$test3";
	#echo "<br/>";
	#echo "this is a session: ".  $_SESSION["test3"];
	#}
?>