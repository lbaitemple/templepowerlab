<?php
$str_json = file_get_contents('php://input');

	require_once ('config.php');
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	session_start();
	$id=$_SESSION['SESS_MEMBER_ID']; 
	
	//echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>';
	$result = mysqli_query($con, "insert into exp1_2 (member_id,json) values ('$id','$str_json')");

?>