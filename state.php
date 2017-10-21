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
	</head>
	<body background = "images/header.jpg">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="facebook.php" style = "color:#337ab7;">Facebook Trend Analysis</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="age.php">Age</a></li>
			  <li><a href="gender.php">Gender</a></li>
			  <li class="active"><a href="state.php">State</a></li>
			  <li><a href="about.php">About us</a></li>
			</ul>
		  </div>
		</nav>
		<div style = "margin-top:15%;">
			<div id="bar-example"></div>
			<script>Morris.Bar({
			  element: 'bar-example',
			  data: [
				{ y: 'UP', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Utter Pradesh']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
{ y: 'MP', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Madhya Pradesh']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'MH', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'"MAHARASTRA']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'HP', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Hamianchal Pradesh']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'UK', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Uttarakhand']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Goa', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Goa']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'TN', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Tamil Nadu']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'AP', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Andhra Pradesh']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Delhi', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Delhi']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Bihar', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Bihar']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'JK', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Jharkhand']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'J&K', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Jammu & Kashmir']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Kerala', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Kerala']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Gujrat', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'GUJRAT']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Nagaland', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Nagaland']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Haryana', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Haryana']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'WB', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'West Bengal']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Pnd', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Pondicherry']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Tripura', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Tripura']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'NGD', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Nagaland']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'MGH', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Meghalaya']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'Manipur', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Manipur']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
{ y: 'TS', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'']);
   $c=0;
   foreach($docu as $doc)
   {
         $c=$c+1;
   }
   echo $c;
?>},
				{ y: '', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'RAJSTHAN']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'K', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Karnataka']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'HR', a:<?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Hariyana']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?> },
				{ y: 'CG', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Chhattisgarh']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
?>},
				{ y: 'ArP', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'"Andhra Pradesh"']);
   $c=0;
   foreach($docu as $doc)
   {
   		$c=$c+1;
   }
   echo $c;
  
?>},
				{ y: 'Assam', a: <?php
   $m = new MongoClient();
   $db = $m->facebook_db;
   $d=$db->record;
   $docu=$d->find(['Address'=>'Assam']);
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
	</body>
</html>

