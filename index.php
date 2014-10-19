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
 </head>
 <body>
 <div class="container"></div>
 </body>
 </html>