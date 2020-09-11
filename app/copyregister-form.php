
<!DOCTYPE html>
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

		
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">Registration Page</h3>
						<div class="row">
							<div class="col-lg-8">
								
								<!-- /.panel -->
							</div>
							<div class="col-lg-5">
								<div class="panel panel-default">
									<div class="panel-heading">
										Please Register as a New User
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
										<div class="table-responsive">

											<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
												<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
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
													</div>
													
												
														<input type="submit" name="Submit" value="Register" />
													
													
												
											</form>

										</div>
										<!-- /.table-responsive -->
									</div>
									<!-- /.panel-body -->
								</div>
								<!-- /.panel -->
							</div>
						</div>

					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- /#wrapper -->

		<script src="js/jquery-1.10.2.js"></script> <script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

    <script>
      
    </script>
		<script src="js/bootstrap.js"></script>
		<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
		<!-- Page-Level Plugin Scripts - Flot -->
		<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
		<!-- SB Admin Scripts - Include with every page -->
		<script src="js/sb-admin.js"></script>

		<!-- Page-Level Demo Scripts - Flot - Use for reference -->

		<script src="js/plugins/hover/modernizr.custom.js"></script>

		<script type="text/javascript" src="experiment1/js/plugins/numeric-1.2.6.min.js"></script>
		<script>
			var eventTypeDown = 'mousedown';
			var eventTypeUp = 'mouseup mouseleave';
			if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
				eventTypeDown = 'touchstart';
				eventTypeUp = 'touchend';
			}
		</script>


		<script src="js/plugins/morris/morris.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>



	

		<script type="text/javascript" src="js/bootstrap-confirmation.js"></script>
														<script>
	$('[data-toggle="confirmation"]').confirmation();
	$('.confirmation-callback').confirmation({
		onConfirm: function() { 
		
		//window.location.href = 'delete,php?deleteItem=';
		//window.location.href = "delete.php?deleteItem='.$row['login']";
		},
		onCancel: function() { alert('cancel') }
	});
	</script>


	</body>

</html>
