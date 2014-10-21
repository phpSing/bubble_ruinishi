<?php 
/*!
*	SQL init for bubble sheet
*/
$db = array(
	'host' => 'localhost',
	'dbname' => 'bubble', //shiruini_fake2
	'dbuser' => 'root', //shiruini_huahua
	'dbpass' => 'root' //198730wu
	);

$db2 = array(
	'host' => 'localhost',
	'dbname' => 'shiruini_fake2', //shiruini_fake2
	'dbuser' => 'shiruini_huahua', //shiruini_huahua
	'dbpass' => '198730wu' //198730wu
	);
$_db = mysqli_connect($db['host'],$db['dbuser'],$db['dbpass'],$db['dbname']);
$act = $_REQUEST['act'];
if ($act == 'create_student') {
	$student_name = $_REQUEST['student_name'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$sql = "INSERT INTO student (student_name, student_lastip) VALUES ('".$student_name."', '".$ip."')";
	if ($_db->query($sql)) {
		echo json_encode(array('error'=>0,'msg'=>'success'));
	} else {
		echo json_encode(array('error'=>1,'msg'=>'fail', 'sql'=>$sql));
	}
}
 ?>