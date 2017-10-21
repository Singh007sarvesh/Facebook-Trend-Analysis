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
			  <li class="active"><a href="age.php">Age</a></li>
			  <li><a href="gender.php">Gender</a></li>
			  <li><a href="state.php">State</a></li>
			  <li><a href="about.php">About us</a></li>
			</ul>
		  </div>
		</nav>
		<h1 id="hh">Facebook Trend Analysis On Demonetization</h>
		<div id="header">
		<div style = "margin-top:15%;">
		<div id="bar-example"></div>
			<script>Morris.Bar({
			  element: 'bar-example',
			  data: [
				{ y: 'Age 16-20', a:<?php
  $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'15','$lt'=>'21')));
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 21-30', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'20','$lt'=>'31')));
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 31-40', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'29','$lt'=>'41')));
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 41-50', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'39','$lt'=>'51')));;
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 51-60', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'50','$lt'=>'61')));
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 61-70', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'60','$lt'=>'71')));
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'Age 71-80', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(array("Age"=>array('$gt'=>'71','$lt'=>'90')));
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>}
			  ],
			  xkey: 'y',
			  ykeys: ['a'],
			  labels: ['Series A']
			});</script>
			</div>
		</div>
	</body>
</html>

