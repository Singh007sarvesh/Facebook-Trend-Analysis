<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="icon" href="images/logo.gif" type="images/x-icon">
	  <title>Facebook Trend Analysis</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  		<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
		<link href="st.css" rel="stylesheet">
	</head>
	<body background = "images/header.jpg">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="facebook.php" style = "color:#337ab7;">Facebook Trend Analysis</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="age.php">Age</a></li>
			  <li class="active"><a href="gender.php">Gender</a></li>
			  <li><a href="state.php">State</a></li>
			  <li><a href="about.php">About us</a></li>
			</ul>
		  </div>
		</nav>
		<h1 id="h">Facebook Trend Analysis On Demonetization</h1>
		<div id="header1">
		<div style = "margin-top:15%;">
			<div id="bar-example"></div>
			<script>Morris.Bar({
			  element: 'bar-example',
			  data: [
				{ y: 'Male', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Gender'=>'M']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Female', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Gender'=>'F']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
			  ],
			  xkey: 'y',
			  ykeys: ['a'],
			  labels: ['Series A']
			});</script>
			</div>
		</div>
	</body>
</html>

