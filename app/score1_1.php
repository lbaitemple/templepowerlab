<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$score = clean($_POST['score']);

	//Input Validations
	if($score == '') {
		$errmsg_arr[] = 'Score missing';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	
	//Create INSERT query
	$qry = "INSERT INTO members(,exp1_1) VALUES('$score')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
			header("Refresh:0");
		//header("location: register-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>