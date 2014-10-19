<?php 
/*!
*	Bubble Attendence Sheet
*/
$db = array(
	'host' => 'localhost',
	'dbname' => 'bubble',
	'dbuser' => 'root',
	'dbpass' => 'root'
	);
//$_db = mysqli_connect($db['host'],$db['dbuser'],$db['dbpass'],$db['dbname']);
?>
 <!doctype html>
 <html lang="en">
 <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=no">	
 	<title>Bubble Attendence Sheet - Ruini Shi</title>
 	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="jquery.js"></script>
 	<script type="text/javascript" src="jquery-mobile.js"></script>
 	<script type="text/javascript" src="bubble.js"></script>
 </head>
 <body>
 <div class="container">


 	<div class="row">

 		<h2 class="project-name">ATTENDENCE SHEET</h2>

 	</div>

 	<div class="row">



 		<!-- name col -->
 		<div class="col-sm-2 col-xs-2">

 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>

 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>
 		</div>
 		<!-- bubble table -->
 		<div class="col-sm-10 col-xs-10 bubble-table">

 			<?php 
 				for ($ii=0; $ii < 10; $ii++) { 
 			?>
 			<div class="row bubble-row">

 				<?php 

 					for ($i=0; $i < 12 ; $i++) { 
 				?>
 				<div class="col-xs-1 col-sm-1 bubble-item">
 					捏我
 				</div>	
 				<?php
 					}
 				 ?>

 			</div>
 			<?php		
 				}
 			 ?>

 		</div>
 	</div>


 </div>
 </body>
 </html>