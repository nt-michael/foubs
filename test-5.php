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
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="41.65" aria-valuemin="0" aria-valuemax="100" style="width:41.65%">
				41.6%
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 col-md-2 col-lg-2 offset"></div>
		<div class="col-md-6 col-sm-6 col-lg-6">

		<div class="jumbotron" style="background-color:white; border-radius: 60px 0px;width: 100%; height: 60%;line-height: 100%">
			<form class="form-inline" role="form" action="test-6.php" method="POST">
				<div class="form-group">
					
					<!--<legend>N<sup>o</sup> 26</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Design posters,flyers or brochures:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med1" title="TRUE" name="q26" value="1" type="radio" required><span for="med1" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med10" title="FALSE" name="q26" value="0" type="radio" required><span for="med10" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>
					
					<br/><br/>

					<!--<legend>N<sup>o</sup> 27</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Take photographs:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med2"  title="TRUE" name="q27" value="1" type="radio" required><span for="med2" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med20"  title="FALSE" name="q27" value="0" type="radio" required><span for="med20" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 28</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Work independently in an open or unstructured environment:</strong>&nbsp;
						</div>'
						<div class="col-md-4">
							<label class="radio-inline"><input id="med3"  title="TRUE" name="q28" value="1" type="radio" required><span for="med3" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med30"  title="FALSE" name="q28" value="0" type="radio" required><span for="med30" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 29</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Conceptualize new ways to solve problems or accomplish tasks:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med4" title="TRUE" name="q29" value="1" type="radio" required><span for="med4" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input id="med40" title="FALSE" name="q29" value="0" type="radio" required><span for="med40" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 30</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Draw,sketch,paint or sculpt:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input id="med5"  title="TRUE" name="q30" value="1" type="radio" required><span for="med5" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;	
							<label class="radio-inline"><input id="med50"  title="FALSE" name="q30" value="0" type="radio" required><span for="med50" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
						</div>
					</div>

					<br/><br/>

					<!--<legend>N<sup>o</sup> 31</legend>-->
					<div class="row">
						<div class="col-md-8"style="text-align:right">
							<strong>Read or write poetry:</strong>&nbsp;
						</div>
						<div class="col-md-4">
							<label class="radio-inline"><input class="med6"  title="TRUE" name="q31" value="1" type="radio" required><span for="med6" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-up" ></span></label>&nbsp;&nbsp;
							<label class="radio-inline"><input class="med60"  title="FALSE" name="q31" value="0" type="radio" required><span for="med60" class="check"></span><span style="font-size: 30px;color:"class="glyphicon glyphicon-thumbs-down" ></span></label>
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

	#if(isset($_POST["q20"]) && isset($_POST["q21"]) && isset($_POST["q22"] ) && isset($_POST["q23"]) && isset($_POST["q24"]) && isset($_POST["q25"])){
	$test4 = isset($_POST["q20"]) + isset($_POST["q21"]) + isset($_POST["q22"]) + isset($_POST["q23"]) + isset($_POST["q24"]) + isset($_POST["q25"]);
	#echo $test4;
	#echo "<br/>";
	#echo $_SESSION["test3"];

	$test3 = $_SESSION["test3"];

	$test3_4 = $test4 + $test3;
	$_SESSION["test3_4"] = "$test3_4";
	
	#echo "<br/>";
	#echo $_SESSION["test3_4"];
	#}
?>