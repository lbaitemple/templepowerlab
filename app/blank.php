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

		<div id="wrapper">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Virtual Power Laboratory V1.0</a>
				</div>
				<!-- /.navbar-header -->

				<ul class="nav navbar-top-links navbar-right">
					<!--li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-messages">
					<li>
					<a href="#">
					<div>
					<strong>John Smith</strong>
					<span class="pull-right text-muted">
					<em>Yesterday</em>
					</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<strong>John Smith</strong>
					<span class="pull-right text-muted">
					<em>Yesterday</em>
					</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<strong>John Smith</strong>
					<span class="pull-right text-muted">
					<em>Yesterday</em>
					</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a class="text-center" href="#">
					<strong>Read All Messages</strong>
					<i class="fa fa-angle-right"></i>
					</a>
					</li>
					</ul>
					<!-- /.dropdown-messages >
					</li-->
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-tasks">
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Experiment 1</strong>
										<span class="pull-right text-muted">0% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											<span class="sr-only">0% Complete (success)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Experiment 2</strong>
										<span class="pull-right text-muted">0% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											<span class="sr-only">0% Complete</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Experiment 3</strong>
										<span class="pull-right text-muted">0% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											<span class="sr-only">0% Complete (warning)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Experiment 4</strong>
										<span class="pull-right text-muted">0% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											<span class="sr-only">0% Complete (danger)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<!--li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
					<li>
					<a href="#">
					<div>
					<i class="fa fa-comment fa-fw"></i> New Scores
					<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<i class="fa fa-twitter fa-fw"></i> 3 New Followers
					<span class="pull-right text-muted small">12 minutes ago</span>
					</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<i class="fa fa-envelope fa-fw"></i> Message Sent
					<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<i class="fa fa-tasks fa-fw"></i> New Task
					<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="#">
					<div>
					<i class="fa fa-upload fa-fw"></i> Server Rebooted
					<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
					</a>
					</li>
					<li class="divider"></li>
					<li>
					<a class="text-center" href="#">
					<strong>See All Alerts</strong>
					<i class="fa fa-angle-right"></i>
					</a>
					</li>
					</ul>
					<!-- /.dropdown-alerts >
					</li-->
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->

				<div class="navbar-default navbar-static-top" role="navigation">
					<div class="sidebar-collapse">
						<ul class="nav" id="side-menu">
							<li class="sidebar-search">
								<div class="input-group custom-search-form">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											<i class="fa fa-search"></i>
										</button> </span>
								</div>
								<!-- /input-group -->
							</li>
							<li>
								<li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li><li><a href="captivate/index.html"><i class="fa fa-dashboard fa-fw"></i> Learning Material</a></li>
							</li>
							<li>
								<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Generator Experiments<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="experiment1.php">Experiment 1</a>
									</li>
									<li>
										<a href="experiment2.php">Experiment 2</a>
									</li>
									<li>
										<a href="experiment3.php">Experiment 3</a>
									</li>
									<li>
										<a href="experiment4.php">Experiment 4</a>
									</li>
									<li>
										<a href="experiment5.php">Experiment 5</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="tables.php"><i class="fa fa-bar-chart-o fa-fw"></i> Motor Experiments<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
										
									<li>
										<a href="experiment6.php">Experiment 6</a>
									</li>
									<li>
										<a href="experiment7.php">Experiment 7</a>
									</li>
									<li>
										<a href="experiment8.php">Experiment 8</a>
									</li>
									<li>
										<a href="experiment9.php">Experiment 9</a>
									</li>
								</ul>
							</li>
							<!--li>
							<a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
							</li-->
							<li>
								<a href="#"><i class="fa fa-wrench fa-fw"></i> User Managements<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
										<li>
										<a href="students.php">Students</a>
									</li>
									<li>
										<a href="Import.php">Import Students</a>
									</li>
									<li>
										<a href="Teachers.php">Teachers</a>
									</li>
									<!--li>
									<a href="typography.php">Typography</a>
									</li>
									<li>
									<a href="grid.php">Grid</a>
									</li>
									</ul>
									<!-- /.nav-second-level -->
									</ul>
							</li>
							<!--li>
							<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							<li>
							<a href="#">Second Level Item</a>
							</li>
							<li>
							<a href="#">Second Level Item</a>
							</li>
							<li>
							<a href="#">Third Level <span class="fa arrow"></span></a>
							<ul class="nav nav-third-level">
							<li>
							<a href="#">Third Level Item</a>
							</li>
							<li>
							<a href="#">Third Level Item</a>
							</li>
							<li>
							<a href="#">Third Level Item</a>
							</li>
							<li>
							<a href="#">Third Level Item</a>
							</li>
							</ul>
							<!-- /.nav-third-level >
							</li>
							</ul>
							<!-- /.nav-second-level >
							</li>
							<li>
							<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							<li>
							<a href="blank.php">Blank Page</a>
							</li>
							<li>
							<a href="login.php">Login Page</a>
							</li>
							</ul>
							<!-- /.nav-second-level >
							</li-->
						</ul>
						<!-- /#side-menu -->
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<br><h1 class="page-header">This is blank page</h1>
						<h3></h3>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				
				
			
			
			
		
			
					
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
			<script src="experiment1/js/sparks.js"></script>
			<script src="experiment1/js/generator.js"></script>
			<script src="experiment1/js/circuit_checker.js"></script>
			<script src="experiment1/js/generator_1.js"></script>
			<script src="experiment1/js/circuit_checker_1.js"></script>
						<script src="experiment1/js/generator_2.js"></script>
			<script src="experiment1/js/circuit_checker_2.js"></script>
			
			<script src="experiment1/js/circuit.js"></script>

			<script src="js/plugins/morris/morris.js"></script>
			<script src="http://code.highcharts.com/highcharts.js"></script>
			<script src="http://code.highcharts.com/modules/exporting.js"></script>

			<script>
				$(function() {
					$('#container_1').highcharts({

						title : {
							text : 'Magnetization Curve',
							x : -20 //center
						},
						subtitle : {
							text : 'Experiment 1 Step 2',
							x : -20
						},
						xAxis : {
							title : {
								text : 'Current (A)'
							},
							min : 0,
							tickInterval : 0.1,
							max : 1.2
						},
						yAxis : {

							plotLines : [{
								value : 0,
								width : 0.1,
								color : '#808080'
							}],
							title : {
								text : 'Voltage (V)'
							},
							min : 0,
							tickInterval : 20,
							max : 140
						},
						tooltip : {
							valueSuffix : 'V'
						},
						legend : {
							layout : 'vertical',
							align : 'right',
							verticalAlign : 'middle',
							borderWidth : 0
						},
						plotOptions : {
							series : {
								marker : {
									enabled : false
								},
								animation : {
									duration : 3000,
									easing : 'linear'
								}
							}
						},
						series : [{
							name : 'Experiment 1',
							data : [null, null]
						}]

					});
				});
				$('#button_1').click(function() {
					var myVoltage = new Array();
					var chart = $('#container_1').highcharts();
					for ( i = 1; i <= 13; i++) {

						myVoltage[i] = parseFloat(document.getElementById("v" + i).value);
						//alert(myVoltage[i]);
					}
					chart.series[0].remove(true);

					chart.addSeries({
						animation : {
							duration : 4000
						},
						name : 'Experiment 1',
						data : [[0, myVoltage[1]], [0.1, myVoltage[2]], [0.2, myVoltage[3]], [0.3, myVoltage[4]], [0.4, myVoltage[5]], [0.5, myVoltage[6]], [0.6, myVoltage[7]], [0.7, myVoltage[8]], [0.8, myVoltage[9]], [0.9, myVoltage[10]], [1.0, myVoltage[11]], [1.1, myVoltage[12]], [1.2, myVoltage[13]]]
						//data: [[a, b],[c,d], [e,f]]
					});
					//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
				});

			</script>
			
						<script>
				$(function() {
					$('#container_2').highcharts({

						title : {
							text : 'Magnetization Curve',
							x : -20 //center
						},
						subtitle : {
							text : 'Experiment 1 Step 3',
							x : -20
						},
						xAxis : {
							title : {
								text : 'Current (A)'
							},
							min : 0,
							tickInterval : 0.1,
							max : 1.2
						},
						yAxis : {

							plotLines : [{
								value : 0,
								width : 0.1,
								color : '#808080'
							}],
							title : {
								text : 'Voltage (V)'
							},
							min : 0,
							tickInterval : 20,
							max : 140
						},
					
						legend : {
							layout : 'vertical',
							align : 'right',
							verticalAlign : 'middle',
							borderWidth : 0
						},
						plotOptions : {
							series : {
								marker : {
									enabled : false
								},
								animation : {
									duration : 3000,
									easing : 'linear'
								}
							}
						},
						
						series : [{
						 name : '1600 rpm',
							data : [null]
						},
						{
						 name : '1400 rpm',
							data : [null]
						},
						{
						 name : '1200 rpm',
							data : [null]
						}
						]
						

					});
				});
				$('#button_2').click(function() {
					var myVoltage_b = new Array();
					var myVoltage_h = new Array();
					var myVoltage_e = new Array();
					var chart = $('#container_2').highcharts();
					for ( i = 1; i <= 13; i++) {

						myVoltage_b[i] = parseFloat(document.getElementById("b" + i).value);
						myVoltage_h[i] = parseFloat(document.getElementById("h" + i).value);
						myVoltage_e[i] = parseFloat(document.getElementById("e" + i).value);
						//alert(myVoltage[i]);
					}
					chart.series[0].remove(true);
chart.series[0].remove(true);
chart.series[0].remove(true);
					chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1600 rpm',
						data : [[0, myVoltage_b[1]], 
						[0.1, myVoltage_b[2]], 
						[0.2, myVoltage_b[3]], 
						[0.3, myVoltage_b[4]], 
						[0.4, myVoltage_b[5]], 
						[0.5, myVoltage_b[6]], 
						[0.6, myVoltage_b[7]], 
						[0.7, myVoltage_b[8]], 
						[0.8, myVoltage_b[9]], 
						[0.9, myVoltage_b[10]], 
						[1.0, myVoltage_b[11]], 
						[1.1, myVoltage_b[12]], 
						[1.2, myVoltage_b[13]]]
						//data: [[a, b],[c,d], [e,f]]
					});
							chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1400 rpm',
						data : [[0, myVoltage_h[1]], 
						[0.1, myVoltage_h[2]], 
						[0.2, myVoltage_h[3]], 
						[0.3, myVoltage_h[4]],
						[0.4, myVoltage_h[5]], 
						[0.5, myVoltage_h[6]], 
						[0.6, myVoltage_h[7]], 
						[0.7, myVoltage_h[8]], 
						[0.8, myVoltage_h[9]], 
						[0.9, myVoltage_h[10]], 
						[1.0, myVoltage_h[11]], 
						[1.1, myVoltage_h[12]], 
						[1.2, myVoltage_h[13]]]
						//data: [[a, b],[c,d], [e,f]]
					});
							chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1200 rpm',
						data : [[0, myVoltage_e[1]], 
						[0.1, myVoltage_e[2]], 
						[0.2, myVoltage_e[3]], 
						[0.3, myVoltage_e[4]],
						[0.4, myVoltage_e[5]], 
						[0.5, myVoltage_e[6]], 
						[0.6, myVoltage_e[7]], 
						[0.7, myVoltage_e[8]], 
						[0.8, myVoltage_e[9]], 
						[0.9, myVoltage_e[10]], 
						[1.0, myVoltage_e[11]], 
						[1.1, myVoltage_e[12]], 
						[1.2, myVoltage_e[13]]]//data: [[a, b],[c,d], [e,f]]
					});
					//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
				});

			</script>
			
						<script>
				$(function() {
					$('#container_3').highcharts({

						title : {
							text : 'Magnetization Curve',
							x : -20 //center
						},
						subtitle : {
							text : 'Experiment 1 Step 4',
							x : -20
						},
						xAxis : {
							title : {
								text : 'Speed (rpm)'
							},
							min : 800,
							tickInterval : 100,
							max : 1800
						},
						yAxis : {

							plotLines : [{
								value : 0,
								width : 0.1,
								color : '#808080'
							}],
							title : {
								text : 'Voltage (V)'
							},
							min : 0,
							tickInterval : 20,
							max : 140
						},
					
						legend : {
							layout : 'vertical',
							align : 'right',
							verticalAlign : 'middle',
							borderWidth : 0
						},
						plotOptions : {
							series : {
								marker : {
									enabled : false
								},
								animation : {
									duration : 3000,
									easing : 'linear'
								}
							}
						},
						
						series : [{
						 name : '0.5 A',
							data : [null]
						},
						{
						 name : '0.8 A',
							data : [null]
						},
						{
						 name : '1 A',
							data : [null]
						}
						]
						

					});
				});
				$('#button_3').click(function() {
					var myVoltage_b = new Array();
					var myVoltage_h = new Array();
					var myVoltage_e = new Array();
					var chart = $('#container_3').highcharts();
					for ( i = 1; i <= 11; i++) {

						myVoltage_b[i] = parseFloat(document.getElementById("i" + i).value);
						myVoltage_h[i] = parseFloat(document.getElementById("g" + i).value);
						myVoltage_e[i] = parseFloat(document.getElementById("f" + i).value);
						//alert(myVoltage[i]);
					}
					chart.series[0].remove(true);
chart.series[0].remove(true);
chart.series[0].remove(true);
					chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '0.5 A',
						data : [[800, myVoltage_b[1]], 
						[900, myVoltage_b[2]], 
						[1000, myVoltage_b[3]], 
						[1100, myVoltage_b[4]], 
						[1200, myVoltage_b[5]], 
						[1300, myVoltage_b[6]], 
						[1400, myVoltage_b[7]], 
						[1500, myVoltage_b[8]], 
						[1600, myVoltage_b[9]], 
						[1700, myVoltage_b[10]], 
						[1800, myVoltage_b[11]]]
						//data: [[a, b],[c,d], [e,f]]
					});
							chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '0.8 A',
						data : [[800, myVoltage_h[1]], 
						[900, myVoltage_h[2]], 
						[1000, myVoltage_h[3]], 
						[1100, myVoltage_h[4]],
						[1200, myVoltage_h[5]], 
						[1300, myVoltage_h[6]], 
						[1400, myVoltage_h[7]], 
						[1500, myVoltage_h[8]], 
						[1600, myVoltage_h[9]], 
						[1700, myVoltage_h[10]], 
						[1800, myVoltage_h[11]], 
						]
						//data: [[a, b],[c,d], [e,f]]
					});
							chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1 A',
						data : [[800, myVoltage_e[1]], 
						[900, myVoltage_e[2]], 
						[1000, myVoltage_e[3]], 
						[1100, myVoltage_e[4]],
						[1200, myVoltage_e[5]], 
						[1300, myVoltage_e[6]], 
						[1400, myVoltage_e[7]], 
						[1500, myVoltage_e[8]], 
						[1600, myVoltage_e[9]], 
						[1700, myVoltage_e[10]], 
						[1800, myVoltage_e[11]], 
						]//data: [[a, b],[c,d], [e,f]]
					});
					//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
				});

			</script>
			<script type="text/javascript" src="experiment1/js/jquery.fancybox.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('.fancybox').fancybox();
				});
			</script>

	</body>

</html>
