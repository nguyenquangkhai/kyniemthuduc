<?php
include('Connection.php');

if(isset($_REQUEST['method']))
	$method = $_REQUEST['method'];
	
function updateEmailCount(){
	$query = "SELECT count(*) FROM email";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$emailcount  = $row[0];
	$arr = array('value'=>$emailcount);
	echo json_encode($arr);
}

function updateImageCount(){
	$query = "SELECT count(*) FROM image";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$imagecount  = $row[0];
	$arr = array('value'=>$imagecount);
	echo json_encode($arr);
}

switch($method){
	case 'email':
		call_user_func('updateEmailCount');
		break;
	case 'image':
		call_user_func('updateImageCount');
		break;
}

	
	