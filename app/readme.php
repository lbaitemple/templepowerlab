<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Readme</title>
<style type="text/css">
<!--
body {
	font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	color: #99CC00;
	margin: 0px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 18px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
h2 {
	color: #99CC00;
	margin: 15px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 14px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
a {
	color: #2D3954;
	font-size: 11px;
}
a:hover {
	color: #99CC00;
}
-->
</style>
</head>

<body>
<h1>Readme</h1>
<p>Below is a brief description of all PHP files you will find in the download archive.</p>
<ol>
  <li>config.php - This script contains the database connection details. Edit this file to specify your own database's connection details.</li>
  <li>register-form.php - A simple registration form</li>
  <li>register-exec.php - Handler script for the the above form. This script will create member accounts for you.</li>
  <li>login-form.php - Login form</li>
  <li>login-exec.php - Handler script for the above login form. This script authenticates the login details and then sets up a session for the user.</li>
  <li>logout.php - Script used to logout a user from the session.</li>
  <li>member-index.php - Sample password protected page.</li>
  <li>member-profile.php - Sample password protected page.</li>
  <li>auth.php - Include this script at the top of any page you want to password protect. This script checks whether the user is logged in or not.</li>
</ol>
<h2>Notes</h2>
<ul>
  <li>Make sure that you edit the <b>config.php</b> file and change the connections details to match your own environment.</li>
  <li>The script is meant to be a teaching tool for PHP newbies and is not meant to be used in production environments.</li>
</ul>
</body>
</html>
