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
$_db = mysqli_connect($db['host'],$db['dbuser'],$db['dbpass'],$db['dbname']);
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
 	<script type="text/javascript" src="bubble.js"></script>
 </head>
 <body>
 <div class="container">


 	<div class="row">

 		<h2 class="project-name">ATTENDENCE SHEET</h2>

 	</div>


	<div class="row week-row">


		<div class="col-sm-2 col-xs-2"></div>

		<div class="col-sm-10 col-xs-10">

			<?php 
				for ($week=0; $week <12 ; $week++) { 
			?>
				<div class="week-item col-xs-1"><?php echo 'week ' . ($week+1); ?></div>
			<?php
				}
			 ?>
		</div>
	</div>

 	<div class="row">



 		<!-- name col -->
 		<div class="col-sm-2 col-xs-2 name-row">


 			<div class="student-name">tim wu</div>
 			<div class="student-name">tim wu</div>

 			<div class="student-name new-name">
 				<input type="text" class="form-control" placeholder="name" name="student_name" id="student_name" />
 			</div>
 		</div>
 		<!-- bubble table -->
 		<div class="col-sm-10 col-xs-10 bubble-table">




 			<?php 
 				for ($j=0; $j < 2; $j++) { 
 			?>
 			<div class="row bubble-row">

 				<?php 

 					for ($i=0; $i < 12 ; $i++) { 
 				?>
 				<div class="col-xs-1 col-sm-1 bubble-item" bubble-owner="timwu" bubble-index-row="<?php echo $j; ?>" bubble-index-col="<?php echo $i+1; ?>">
 					<div class="label label-primary">捏我</div>
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