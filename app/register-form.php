<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Virtual Power Laboratory V1.0</title>

		<!-- Core CSS - Include with every page -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Page-Level Plugin CSS - Dashboard -->
		<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
		<link href="css/plugins/timeline/timeline.css" rel="stylesheet">

		<!-- SB Admin CSS - Include with every page -->
		<link href="css/sb-admin.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="js/plugins/hover/component.css" />
		<link href="experiment1/css/styles.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="experiment1/css/jquery.fancybox.css" media="screen" />

	</head>
<body>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<div class="col-lg-12">
						<h3 class="page-header">Registration Page</h3>
						<div class="row">

							<div class="col-lg-5">
								<div class="panel panel-default">
									<div class="panel-heading">
										Please Register as a New User
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
<div class="table-responsive">
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="300" border="0" align="left" cellpadding="2" cellspacing="0">
  	<div class="form-group">
<label>First Name</label>
														<input name="fname" type="text" class="textfield form-control" id="fname" placeholder="First Name">
														<label>Last Name</label>
														<input name="lname" type="text" class="textfield form-control" id="lname" placeholder="Last Name">
														<label>User Name</label>
														<input name="login" type="text" class="textfield form-control" id="login" placeholder="User Name">
														<label>Password</label>
														<input name="password" type="password" class="textfield form-control" id="password" placeholder="Password"/>
										
														<label>Confirm Password</label>
														<input name="cpassword" type="password" class="textfield form-control" id="cpassword" placeholder="Confirm Password"/>
														<label>Email Adress</label>
														<input name="email" type="email" class="textfield form-control" id="email" placeholder="Email Address">
													
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
    </div>
  </table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="js/bootstrap.js"></script>
		<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
		<!-- Page-Level Plugin Scripts - Flot -->
		<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
		<!-- SB Admin Scripts - Include with every page -->
		<script src="js/sb-admin.js"></script>

		<!-- Page-Level Demo Scripts - Flot - Use for reference -->

		<script src="js/plugins/hover/modernizr.custom.js"></script>
</body>
</html>