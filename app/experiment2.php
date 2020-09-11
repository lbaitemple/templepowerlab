<?php
require_once ('auth.php');
?>
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
		<link href="experiment2/css/styles.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="experiment2/css/jquery.fancybox.css" media="screen" />

		<link href="experiment1/css/toastr.css" rel="stylesheet"/>
		<link href="css/plugins/tutor/styles.css" rel="stylesheet" />
		<script>
			var eventTypeDown = 'mousedown';
			var eventTypeUp = 'mouseup mouseleave';
			if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
				eventTypeDown = 'touchstart';
				eventTypeUp = 'touchend';
			}
		</script>
		<script type="text/javascript">
			function viewTable1() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myQuestion = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab1");
				var str1;
				var str2;

				for (var id = 0; id < tableObj.rows.length - 1; id++) {
					var doit = "b" + id;
					console.log(document.getElementById(doit).value);
					str1 = document.getElementById(doit).value;
					myVoltage[id] = str1;
				}
				for (var i = 2; i <= 2; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 2] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment2_2 = [{
					"carray" : current
				}, {
					"varray" : voltage
				}, {
					"varray1" : myVoltage
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment2_2);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler2_2.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
					if (it == 1)
						it = it + 1;
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};
		</script>
		<script type="text/javascript">
			function viewTable2() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myQuestion = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab3");
				var str1;
				var str2;

				for (var id = 0; id < tableObj.rows.length - 1; id++) {
					var doit = "n" + id;
					console.log(document.getElementById(doit).value);
					str1 = document.getElementById(doit).value;
					myVoltage[id] = str1;
				}
				for (var i = 3; i <= 3; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 3] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment2_3 = [{
					"carray" : current
				}, {
					"varray" : voltage
				}, {
					"varray1" : myVoltage
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment2_3);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler2_3.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
					if (it == 2)
						it = it + 1;
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};
		</script>
		<script type="text/javascript">
			function viewTable3() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myQuestion = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab4");
				var str1;
				var str2;

				for (var id = 0; id < tableObj.rows.length - 1; id++) {
					var doit = "m" + id;
					console.log(document.getElementById(doit).value);
					str1 = document.getElementById(doit).value;
					myVoltage[id] = str1;
				}
				for (var i = 4; i <= 5; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 4] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment2_4 = [{
					"carray" : current
				}, {
					"varray" : voltage
				}, {
					"varray1" : myVoltage
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment2_4);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler2_4.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
					//it = it + 1;
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};
		</script>

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
							<li>
								<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
							</li>
							<li>
								<a href="captivate/index.html"><i class="fa fa-dashboard fa-fw"></i> Learning Material</a>
							</li>
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
									<li>
										<a href="grading.php">Grade Center</a>
									</li>
									<li>
										<a href="score.php">Scores and Grades</a>
									</li>
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
						<br>
						<h1 class="page-header">Experiment 2</h1>
						<h3>Voltage Buildup of a Shunt Generator</h3>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-warning">
							<div class="panel-heading">
								Step 1: Preparation
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">

								<ul>
									<li>
										Review concept for Experiment 2 before doing the experiment.  Follow this link to review the material. <a href="./captivate/callees/experiment2/">Concepts</a>
									</li>

								</ul>
								<h4>Goal</h4>
								<ul>
									<li>
										To study automatic voltage buildup of a DC shunt generator.
									</li>
									<li>
										To understand the need for the residual flux for voltage buildup.
									</li>

								</ul>
			<h4>Machine Specification</h4>
								<ul>
									<ul>
									<img   width="600px" src="images/faceplate.jpg">
									</ul>
								
								</ul>
								<h4>Equipment</h4>

								<ol>

									<li>
										Any computer or mobile device.
									</li>
									<li>
										A reliable internet connection.
									</li>

								</ol>

							</div>
							<ul class="grid cs-style-3">

								<figure>
									<img width="600px" align="center" src="images/experiment1/circuit_exp2.jpg">
									<figcaption>
										<h3>Circuit Schematic for Experiment 2</h3>
									</figcaption>
								</figure>

							</ul>

							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
				</div>

				<!-- /.panel-body -->
				<div class="row" id="act2plot">
					<div class="col-lg-12">
						<div class="col-lg-7" text-right>

							<ul width="100%" class="nav nav-tabs nav-stacked navbar-right" id="act2_1" >
								<div id="loader" >
									<span class="loader-text">Loading...</span>
								</div>

								<div id="container" >
									<div class="turbine-generator-wrap">
										<div id="turbine">
											<div class="turbine-title">
												Turbine
											</div>
											<div class="turbine-buttons-wrap js-turbine-buttons-wrap">
												<button class="turbine-button down js-turbine-button" disabled>
													-
													<br>
													Speed
												</button>
												<button class="turbine-button up js-turbine-button" disabled>
													+
													<br>
													Speed
												</button>

												<div id='indicator' class="turbine-speed-indicator js-turbine-speed-indicator" data-speed="0">
													0 RPM
												</div>
												<br>
												<div class="col-lg-12" align="center">
													<div class="onoffswitch">
														<input type="checkbox" name="onoffswitch" onclick="switchMachine()" value="0" class="onoffswitch-checkbox js-turbine-button-switch" id="myonoffswitch" unchecked disabled>
														<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
													</div>
												</div>

											</div>

										</div>
										<div id="generatorWrap">
											<canvas id="generatorCanvas" height="500" width="500"></canvas>
											<!--<div id="generatorControls">
											<span class="gen-current-indicator js-gen-current-indicator">Current: 0</span>
											<button class="generator_button js-gen-inc-button">+</button>
											<button class="generator_button minus js-gen-dec-button">-</button>
											</div>-->
										</div>

										<div class="circuit-container js-circuit-container">
											<span class="circuit js-circuit"></span>

											<span class="circuit-connection a vert js-circuit-connection js-a"></span>

											<span class="circuit-connection b vert js-circuit-connection js-b"></span>
											<span class="circuit-connection c vert js-circuit-connection js-c"></span>
											<span class="circuit-connection d hor js-circuit-connection js-d"></span>
											<span class="circuit-connection e vert js-circuit-connection js-e"></span>
											<span class="circuit-connection f hor js-circuit-connection js-f"></span>

											<span class="circuit-connection h vert js-circuit-connection js-h"></span>
											<span id="spot-a" class="circuit-hotspot a vert js-circuit-hotspot" data-connect="a"></span>
											<span id="spot-b" class="circuit-hotspot b vert js-circuit-hotspot" data-connect="b"></span>
											<span id="spot-c" class="circuit-hotspot c vert js-circuit-hotspot" data-connect="c"></span>
											<span id="spot-d" class="circuit-hotspot d hor js-circuit-hotspot" data-connect="d"></span>
											<span id="spot-e" class="circuit-hotspot e vert js-circuit-hotspot" data-connect="e"></span>
											<span id="spot-f" class="circuit-hotspot f hor js-circuit-hotspot" data-connect="f"></span>

											<span id="spot-h" class="circuit-hotspot h vert js-circuit-hotspot" data-connect="h"></span>

										</div>
									</div>
									

								<div class="components-window-wrap js-components-window-wrap">
									<div class="components-window js-components-window">
										<span class="close-x js-close-x"></span>
										<span class="components-window-heading js-components-window-heading"></span>
										<span class="component ammeter hor js-component" data-component="ammeter"><span class="component-text meter">Ammeter</span></span>
										<span class="component voltmeter hor js-component" data-component="voltmeter"><span class="component-text meter">Voltmeter</span></span>
										<span class="component resistor hor js-component" data-component="resistor"><span class="component-text resistor">Variable Resistor</span></span>
										<span class="component wire hor js-component" data-component="wire"><span class="component-text wire">Jumper Wire</span></span>

										<span class="component-option js-component-option" data-option="disconnect">Disconnect Component</span>
										<span class="component-option js-component-option" data-option="change">Change Component</span>
										<span class="component-option js-component-option js-resistor-option" data-option="resistor">Change Resistor Value</span>

										<div class="variable_resistor_body js_variable_resistor_body" data-value="">
											<img src="experiment2/images/circuit/variable_resistor_terminal.png" class="variable_resistor_terminal js_variable_resistor_terminal" data-position="">
											<span class="variable_resistor_value js_variable_resistor_value"></span>
										</div>
									</div>
								</div>
								
								</div>
								
							</ul>
						</div>

						<div class="col-lg-5">
							<div class="row">
								<div class="panel panel-warning">
									<div class="panel-heading">
										Activity 1
									</div>
									<!-- /.panel-heading -->

									<div class="panel panel-warning" >

										<div id="modal_here" class="panel-body">
											<ol>
												<li>
													Connect the circuit according to the schematic diagram below.
												</li>
												<li>
													Once the circuit is connected correctly, set the rheostat to 100 Ohm: click on the rheostat and select "Change Resistor Value" option and then drag the slider to select the correct resistance value.
												</li>
												<li>
													Set the turbine speed to "1800 rpm", then click on the switch to turn on the generator. If anything is wrong in the above steps, the generator won't start. You should fix the errors following the pop up messages.
												</li>
												<li>
													Once the generator is started, its terminal voltage will quickly rise and settle to a constant value.  This voltage buildup process is typical for any DC shunt  generator. In this experiment, the voltage data is automatically recorded and plotted.
												</li>
												<li>
													Fill up the table with calculated voltage according to equation E=I*R. Here I is the field current and R is the field resistance.
												</li>
												<li>
													Click the "plot" button in the figure to draw the "Calculated Voltage" line. Then answer the questions in the last section.
												</li>
												<li>
													Click the "Save Data & Proceed" button to save the data.
												</li>
												<li>
													Turn off the generator.
												</li>
											</ol>
											<img width="100%" src="images/experiment1/circuit_exp2.jpg">
										</div>
									</div>

									<div class="panel panel-warning" >

										<div class="plot" id="container_2" ></div>
										<input type="button" id="button_2" value="Plot">

										</button>
									</div>
									<div class="panel panel-warning">

										<div class="table-responsive">
											<table id="mytab2"  class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>Current (A)</th>
														<th>Voltage (V)</th>
														<th>Calculated Voltage(V)</th>

													</tr>
												</thead>
												<tbody id="tbody">

												</tbody>
											</table>

										</div>
										<!-- /.table-responsive -->

									</div>
									<div class="panel panel-warning">
										<div class="panel-heading">
											Analyze the charts plotted above and answer the questions
										</div>

										<h4>Report 1:</h4>

										<ul>

											<li>
												From the terminal voltage and the field resistance line on the plotted graph, predict what is the terminal voltage to which the shunt machine should build up. Discuss your result.
											</li>

										</ul>
										<textarea id="question1" class="form-control" rows="3"></textarea>										
							

										<button type="button"  onclick="viewTable()" class="btn btn-warning btn-lg btn-block">
											Save Data & Proceed
										</button>

									</div>

								</div>

							</div>

							<!-- /.col-lg-4 (nested) -->

							<!--activity2-->

							<div class="row">
								<div class="panel panel-warning">
									<div class="panel-heading">
										Activity 2
									</div>
									<!-- /.panel-heading -->

									<div class="panel panel-warning" >

										<div class="panel-body">
											<ol>
												<li>

													Keep the connections of the schematic from activity 1, change the rheostat to 200 Ohm: click on the rheostat and select "Change Resistor Value" option and then drag the slider to 200 Ohms.
												</li>
												<li>
													Set the turbine speed to "1800 rpm", then click on the switch to turn on the generator.
												</li>
												<li>
													Once the generator is started, the voltage data will be automatically recorded and plotted.
												</li>
												<li>
													Fill up the table with calculated voltage according to equation E=I*R. Here I is the field current and R is the field resistance.
												</li>
												<li>
													Click the "plot" button in the figure to draw the "Calculated Voltage" line. Then answer the questions in the last section.
												</li>
												<li>
													Click the "Save Data & Proceed" button to save the data.
												</li>
												<li>
													Turn off the generator.
												</li>

											</ol>
											<!--img width="100%" src="images/experiment1/circuit_exp2.jpg"-->
										</div>
									</div>

									<div class="panel panel-warning" >
										<div class="panel-heading">
											Figure for load and calculated voltage at field resistance equal to 200 Ohms.
										</div>
										<div class="plot" id="container_1" ></div>
										<input type="button" id="button_1" value="Plot">

										</button>
									</div>
									<div class="panel panel-warning">

										<div class="table-responsive">
											<table id="mytab1"  class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>Current (A)</th>
														<th>Voltage (V)</th>
														<th>Calculated Voltage(V)</th>

													</tr>
												</thead>
												<tbody id="tbody1">

												</tbody>
											</table>

										</div>
										<!-- /.table-responsive -->

									</div>
									<div class="panel panel-warning">
										<div class="panel-heading">
											Analyze the charts plotted above and answer the questions
										</div>

										<h4>Report 2:</h4>

										<ul>

											<li>
												From the terminal voltage and the field resistance line on the plotted graph, predict what is the terminal voltage value to which the shunt machine should build up. Discuss your result.
											</li>

										</ul>
										<textarea id="question2" class="form-control" rows="3"></textarea>										
							

										<button type="button"  onclick="viewTable1()" class="btn btn-warning btn-lg btn-block">
											Save Data & Proceed
										</button>

									</div>

								</div>

							</div>

							<!-- /.col-lg-4 (nested) -->
							<!--activity 2 ends-->
							<!--activity 3 -->
							<div class="row">
								<div class="panel panel-warning">
									<div class="panel-heading">
										Activity 3
									</div>
									<!-- /.panel-heading -->

									<div class="panel panel-warning" >

										<div class="panel-body">
											<ol>
												<li>

													Keep the connections of the schematic from activity 2, change the rheostat to 300 Ohm: click on the rheostat and select "Change Resistor Value" option and then drag the slider to 300 Ohms.
												</li>
												<li>
													Set the turbine speed to "1800 rpm", then click on the switch to turn on the generator.
												</li>
												<li>
													Once the generator is started, voltage data will be automatically recorded and plotted.
												</li>
												<li>
													Fill up the table with calculated voltage according to equation E=I*R. Here I is the field current and R is the field resistance.
												</li>
												<li>
													Click the "plot" button in the figure to draw the "Calculated Voltage" line. Then answer the questions in the last section.
												</li>
												<li>
													Click the "Save Data & Proceed" button to save the data.
												</li>
												<li>
													Turn off generator.
												</li>
											</ol>
											<!--img width="100%" src="images/experiment1/circuit_exp2.jpg"-->
										</div>
									</div>

									<div class="panel panel-warning" >

										<div class="plot" id="container_3" ></div>
										<input type="button" id="button_3" value="Plot">

										</button>
									</div>
									<div class="panel panel-warning">

										<div class="table-responsive">
											<table id="mytab3"  class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>Current (A)</th>
														<th>Voltage (V)</th>
														<th>Calculated Voltage(V)</th>

													</tr>
												</thead>
												<tbody id="tbody3">

												</tbody>
											</table>

										</div>
										<!-- /.table-responsive -->

									</div>
									<div class="panel panel-warning">
										<div class="panel-heading">
											Analyze the charts plotted above and answer the questions
										</div>

										<h4>Report 3:</h4>

										<ul>

											<li>
												From the terminal voltage and the field resistance line on the plotted graph, predict what is the terminal voltage value to which the shunt machine should build up. Discuss your result.
											</li>

										</ul>
										<textarea id="question3" class="form-control" rows="3"></textarea>										
							

										<button type="button"  onclick="viewTable2()" class="btn btn-warning btn-lg btn-block">
											Save Data & Proceed
										</button>

									</div>

								</div>

							</div>
							<!--activity 3 ends-->
							<!--activity 4 -->
							<div class="row">
								<div class="panel panel-warning">
									<div class="panel-heading">
										Activity 4
									</div>
									<!-- /.panel-heading -->

									<div class="panel-body">
										<ol>
											<li>

												Keep the connections of the schematic from activity 3, change the rheostat to 800 Ohm: click on the rheostat and select "Change Resistor Value" option and then drag the slider to 800 Ohms.
											</li>
											<li>
												Set the turbine speed to "1800 rpm", then click on the switch to turn on the generator.
											</li>
											<li>
												Once the generator is started, voltage data will be automatically recorded and plotted.
											</li>
											<li>
												Fill up the table with calculated voltage according to equation E=I*R. Here I is the field current and R is the field resistance.
											</li>
											<li>
												Click the "plot" button in the figure to draw the "Calculated Voltage" line. Then answer the questions in the last section.
											</li>
											<li>
												Click the "Submit Data & Reports" button to finish experiment 2.
											</li>
										</ol>
										<!--img width="100%" src="images/experiment1/circuit_exp2.jpg"-->
									</div>
								</div>

								<div class="panel panel-warning" >

									<div class="plot" id="container_4" ></div>
									<input type="button" id="button_4" value="Plot">

									</button>
								</div>
								<div class="panel panel-warning">

									<div class="table-responsive">
										<table id="mytab4"  class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th>Current (A)</th>
													<th>Voltage (V)</th>
													<th>Calculated Voltage(V)</th>

												</tr>
											</thead>
											<tbody id="tbody4">

											</tbody>
										</table>

									</div>
									<!-- /.table-responsive -->

								</div>
								<div class="panel panel-warning">
									<div class="panel-heading">
										Analyze the charts plotted above and answer the questions
									</div>

									<h4>Report 4:</h4>

									<ul>

										<li>
											From the terminal voltage and the field resistance line on the plotted graph, predict what is the terminal voltage value to which the shunt machine should build up. What is the critical field resistance for this machine? Discuss your result.
										</li>
										<li>
											Suppose the field rheostat is set at 100 ohms.  What would be the terminal voltage if the field coil connections are reversed?  Give reasons.
										</li>

									</ul>
									<textarea id="question4" class="form-control" rows="10"></textarea>									
						

									<div class="panel panel-warning">

										<h4>Report 5:</h4>
										<ul>
											<li>
												Discuss overall results of the experiment.
											</li>
										</ul>
										<textarea id="question5" class="form-control" rows="5"></textarea>										
						

										<button type="button"  onclick="viewTable3()" class="btn btn-warning btn-lg btn-block">
											Submit Data & Reports
										</button>

									</div>

								</div>

							</div>
							<!--activity 4 ends-->
						</div>

					</div>

				</div>
				<!-- /.panel -->

			</div>
		</div>


<!--tutor start here -->
<div class="container" style="margin-right:-500px;margin-bottom: 200px">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat with Tutor</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <!--div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>Hi! This is the tutor for this virtual power laboratory. Please type your question below and I will find a proper answer for you.</p>
                                <time datetime="">Tutor • 0 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div-->
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/tutor.png" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>Hi! This is the tutor for this virtual power laboratory. Please type your question below and I will find a proper answer for you.</p>
                                <time datetime="2009-11-13T20:00"></time>
                            </div>
                        </div>
                    </div>
                    
                    <!--div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>Hi! How are you?</p>
                                <time datetime="">Tutor • 5 min ago</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                    
                                        <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/tutor.png" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>I'm doing good. Thank you!</p>
                                <time datetime="2009-11-13T20:00">Tutor • 5 min ago</time>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>How can I find the experiment concept?</p>
                                <time datetime="">Tutor • 0 min ago</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                    
                                        <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="images/tutor.png" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>I've found the closest answer to your question that has 83% likelihood. Please click <a>here</a> to view it.</p>
                                <time datetime="2009-11-13T20:00">Tutor • 0 min ago</time>
                            </div>
                        </div>
                    </div!-->
                    
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        
                        </span>
                    </div>
                </div>
    		</div>
        </div>
    </div>
    
    <!--div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-cog"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
        </ul>
    </div-->
</div>
<!-- tutor ends here-->
		</div>

		<!-- /#wrapper -->

		<script src="js/jquery-1.10.2.js"></script>
		<!--tutor js start-->
		<script src="js/plugins/tutor/countries.js"></script>
		<script src="js/plugins/tutor/tutor_exp2.js"></script>
		<!--tutor js end-->
		<script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

		<script>
			$("nav.navbar-fixed-top").autoHidingNavbar();
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
		<script src="experiment2/js/toastr.js"></script>
		<script type="text/javascript" src="experiment2/js/plugins/numeric-1.2.6.min.js"></script>
		<script>
			var eventTypeDown = 'mousedown';
			var eventTypeUp = 'mouseup mouseleave';
			if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
				eventTypeDown = 'touchstart';
				eventTypeUp = 'touchend';
			}
		</script>
		<script src="experiment2/js/sparks.js"></script>
		<script src="experiment2/js/generator.js"></script>
		<script src="experiment2/js/circuit_checker.js"></script>

		<script src="experiment2/js/circuit.js"></script>

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
						text : 'Experiment 2 Activity 2',
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
						name : 'Voltage',
						data : [null]
					}, {
						name : 'Calculated',
						data : [null]
					}]

				});
			});
			$('#button_1').click(function() {
				var myVoltage_v = new Array();
				var chart = $('#container_1').highcharts();

				//chart.series[1].remove(true);
				var mySeries = [];
				for (var i = 0; i < current.length; i++) {
					mySeries.push([parseFloat(current[i]), parseFloat(document.getElementById("b" + i).value)]);

				}
				chart.series[1].setData(mySeries);

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
						text : 'Experiment 2 Activity 1',
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
						name : 'Voltage',
						data : [null]
					}, {
						name : 'Calculated',
						data : [null]
					}]

				});
			});
			$('#button_2').click(function() {
				var myVoltage_v = new Array();
				var chart = $('#container_2').highcharts();

				//chart.series[1].remove(true);
				var mySeries = [];
				for (var i = 0; i < current.length; i++) {
					mySeries.push([parseFloat(current[i]), parseFloat(document.getElementById("v" + i).value)]);

				}
				chart.series[1].setData(mySeries);

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
						text : 'Experiment 2 Activity 3',
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
						name : 'Voltage',
						data : [null]
					}, {
						name : 'Calculated',
						data : [null]
					}]

				});
			});
			$('#button_3').click(function() {
				var myVoltage_v = new Array();
				var chart = $('#container_3').highcharts();

				//chart.series[1].remove(true);
				var mySeries = [];
				for (var i = 0; i < current.length; i++) {
					mySeries.push([parseFloat(current[i]), parseFloat(document.getElementById("n" + i).value)]);

				}
				chart.series[1].setData(mySeries);

				//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
			});

		</script>

		<script>
			$(function() {
				$('#container_4').highcharts({

					title : {
						text : 'Magnetization Curve',
						x : -20 //center
					},
					subtitle : {
						text : 'Experiment 2 Activity 4',
						x : -20
					},
					xAxis : {
						title : {
							text : 'Current (A)'
						},
						min : 0,
						tickInterval : 0.02,
						max : 0.1
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
						tickInterval : 1,
						max : 5
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
								enabled : true
							},
							animation : {
								duration : 3000,
								easing : 'linear'
							}
						}
					},

					series : [{
						name : 'Voltage',
						data : [null]
					}, {
						name : 'Calculated',
						data : [null]
					}]

				});
			});
			$('#button_4').click(function() {
				var myVoltage_v = new Array();
				var chart = $('#container_4').highcharts();

				//chart.series[1].remove(true);
				var mySeries = [];
				for (var i = 0; i < current.length; i++) {
					mySeries.push([parseFloat(current[i]), parseFloat(document.getElementById("m" + i).value)]);

				}
				chart.series[1].setData(mySeries);

				//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
			});

		</script>
		<script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

		<script>
			$("nav.navbar-fixed-top").autoHidingNavbar();
		</script>
		<script>
			$(function() {
				$(window).bind("load resize", function() {
					width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
					if (width < 1200) {
						$(window).off('.affix');
						//$("#act1_2").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						//$("#act1_3").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						$("#act2_1").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						//$("#act5_1").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						//$("#act5_2").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						//$("#act5_3").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
						//document.getElementById("act1_2").style.marginTop = "0px";
						//document.getElementById("act1_3").style.marginTop = "0px";
						document.getElementById("act2_1").style.marginTop = "0px";
						//document.getElementById("act5_1").style.marginTop = "0px";
						//document.getElementById("act5_2").style.marginTop = "0px";
						//document.getElementById("act5_3").style.marginTop = "0px";
					} else {

					}
				});
			});
		</script>
		<script>
			it = 0;
			var voltage = [];
			var current = [];

			function switchMachine() {
				var $turbine_speed_indicator = $('.js-turbine-speed-indicator');
				var $turbine_buttons = $('.js-turbine-button');
				var $turbine_buttons_switch = document.getElementById("myonoffswitch");
				//console.log($turbine_buttons_switch.checked);
				$ammeter1 = $('.js-b.ammeter');
				$voltmeter1 = $('.js-h.voltmeter');
				var res = document.getElementById("indicator").innerHTML.split(" ");
				if ($turbine_buttons_switch.checked == true) {
					disableResistor();
					//alert(res[0]);
					var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
					$turbine_speed_indicator.attr('data-speed', res[0]);
					circuit_checker.experiments['exp1'].calculate();
					$turbine_buttons.attr('disabled', true);
					//enable "-"
					$('.js-a.resistor .down').attr('disabled', false);
					var array = [100, 200, 300, 800];
					//alert(array[it]);

					//resistor-a check "100,200,300,800"
					//alert(document.getElementById('resistor-a').innerHTML);
					if ((document.getElementById('resistor-a').innerHTML == array[it] + " Ohms")) {
						//draw table, save data
						toastr.success("<div>You set the rheostats correctly. </div>");

						var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
						if (turbine_speed != 1800) {
							toastr.warning("<div>Please set the speed to 1800 RPM </div>");
							return;
						}
						toastr.success("<div>Speed is set correctly. Figure and table will be generated on the right. </div>");
						var string = document.getElementById('resistor-a').innerHTML;
						var res = string.split(" ");
						//alert(res[0]);
						voltage = [];
						current = [];
						calVoltage(res[0]);
						//insert table
						//if(res[0]!="100")
						//{var new_tbody = document.createElement('tbody');
						//populate_with_new_rows(new_tbody);
						//t=document.getElementById("tbody");
						//t.parentNode.replaceChild(new_tbody, t);}
						var myname = nameya(res[0]);
						var mytag = tagya(res[0]);
						var mycon = conya(res[0]);
						var elmtTable = document.getElementById(myname);
						var tableRows = elmtTable.getElementsByTagName('tr');
						var rowCount = tableRows.length;

						for (var x = rowCount - 1; x > 0; x--) {
							elmtTable.deleteRow(x);
						}
						for ( i_size = 0; i_size < current.length; i_size++) {
							var table = document.getElementById(myname);
							var row = table.insertRow(i_size + 1);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							var cell3 = row.insertCell(2);
							cell1.innerHTML = current[i_size];
							cell2.innerHTML = voltage[i_size];
							cell3.innerHTML = '<input size="4" type="text" id="' + mytag + i_size + '"></input>'
						}
						//alert(1);
						//draw figure
						var chart = $('#' + mycon).highcharts();
						var mySeries = [];
						for (var i = 0; i < current.length; i++) {
							mySeries.push([parseFloat(current[i]), parseFloat(voltage[i])]);

						}
						chart.series[0].setData(mySeries);

					} else {
						toastr.warning("<div>The rheostat should be set to " + array[it] + " Ohms</div>");
					}

				} else {
					enableResistor();
					$turbine_speed_indicator.attr('data-speed', 0);
					circuit_checker.experiments['exp1'].calculate();
					$turbine_buttons.attr('disabled', false);
					//set speed to 0
					//$turbine_speed_indicator.html('0 RPM');
					//disable "-"
					$('.js-a.resistor .up').attr('disabled', true);
					$('.js-a.resistor .down').attr('disabled', true);
					//ammeter to 0
					calcExp1.current1 = 0;
					$ammeter1.html('0.00A');
					//voltmeter to 0
					$voltmeter1.html('0.00V');
				}
			}

			function nameya(arg) {
				if (arg == 100)
					return 'mytab2';
				else if (arg == 200)
					return 'mytab1';
				else if (arg == 300)
					return 'mytab3';
				else if (arg == 800)
					return 'mytab4';

			}

			function tagya(arg) {
				if (arg == 100)
					return 'v';
				else if (arg == 200)
					return 'b';
				else if (arg == 300)
					return 'n';
				else if (arg == 800)
					return 'm';

			}

			function conya(arg) {
				if (arg == 100)
					return 'container_2';
				else if (arg == 200)
					return 'container_1';
				else if (arg == 300)
					return 'container_3';
				else if (arg == 800)
					return 'container_4';

			}

			function calVoltage(R_ex) {
				temp = 5 * Math.random();
				voltage[0] = temp.toFixed(2);
				current[0] = 0;
				var k = 0;
				var n = 19;
				var I_f = 0;
				var i_f = 0;
				var size = 12;
				var Speed = 1800;
				//E=K*Speed*(coth(I_f/a)-a/I_f)+0.5*randn(1);
				E = 0.5 + ((0.5 * Math.random() * 5 * Speed) / 1800 );
				//console.log(E);
				var R_f = 0;
				R_f = parseInt(R_f) + parseInt(R_ex);
				//console.log(R_f);
				i_f = parseFloat(E) / parseInt(R_f);
				//console.log(i_f);
				var d_i = 0.05;
				var I_s = [];
				var K = 0.07;
				//var E = parseFloat(R_f) + 1;
				var cnt = 0;
				//if ( Math.abs(I_f - i_f) < (size-1)*d_i ){
				iteration = 0;

				while (1) {
					I_f = parseFloat(I_f) + parseFloat(d_i);
					var Kmul = numeric.mul(K, Speed);
					var arg = numeric.div(I_f, 0.05);
					var arg_r = numeric.div(0.05, I_f);
					var e = Math.exp(2);
					var coth = (Math.exp(arg) + Math.exp(0 - arg)) / (Math.exp(arg) - Math.exp(0 - arg)) - arg_r;
					E = numeric.mul(Kmul, coth) + 0.5 * Math.random();
					//console.log(numeric.div(E, I_f));
					if (numeric.div(E, I_f) >= R_f) {
						i_f = numeric.div(E, R_f);
						//console.log(i_f);
						//console.log(I_f);
						I_s[I_s.length] = I_f;
						cnt++;
						//document.getElementById("c" + k).value = I_f;
						//document.getElementById("v" + k).value = E;
						//document.getElementById("t" + k).value = E;
						current[k + 1] = I_f.toFixed(2);
						voltage[k + 1] = E.toFixed(2);
						$ammeter1.html(current[k + 1] + 'A');
						//voltmeter to 0
						$voltmeter1.html(voltage[k + 1] + 'V');
						k++;
					} else {
						i_f = numeric.div(E, R_f);
						//console.log(i_f);
						//console.log(I_f);
						I_s[I_s.length] = I_f;
						cnt++;
						//document.getElementById("c" + k).value = I_f;
						//document.getElementById("v" + k).value = E;
						//document.getElementById("t" + k).value = E;

						k++;
						//alert("Experiement Finished." + voltage + "  ==" + current);
						return;
					}
				}
				//console.log(cnt);
				//console.log(I_s);

			}

			function disableResistor() {
				document.getElementById("spot-a").className = document.getElementById("spot-a").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)b(?!\S)/g, '');
				document.getElementById("spot-a").className = document.getElementById("spot-a").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)c(?!\S)/g, '');
				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)d(?!\S)/g, '');
				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-f").className = document.getElementById("spot-f").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-f").className = document.getElementById("spot-f").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

			}

			function enableResistor() {
				//document.getElementById("spot-b").classList.add("b");
				document.getElementById("spot-a").classList.add("circuit-hotspot");
				document.getElementById("spot-a").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-c").classList.add("c");
				document.getElementById("spot-c").classList.add("circuit-hotspot");
				document.getElementById("spot-c").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-d").classList.add("d");
				document.getElementById("spot-d").classList.add("circuit-hotspot");
				document.getElementById("spot-d").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-e").classList.add("circuit-hotspot");
				document.getElementById("spot-e").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-f").classList.add("circuit-hotspot");
				document.getElementById("spot-f").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-e").classList.add("e");

			}
		</script>
		<script type="text/javascript">
			function viewTable() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myQuestion = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab2");
				var str1;
				var str2;

				for (var id = 0; id < tableObj.rows.length - 1; id++) {
					var doit = "v" + id;
					console.log(document.getElementById(doit).value);
					str1 = document.getElementById(doit).value;
					myVoltage[id] = str1;
				}
				for (var i = 1; i <= 1; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 1] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment2_1 = [{
					"carray" : current
				}, {
					"varray" : voltage
				}, {
					"varray1" : myVoltage
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment2_1);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler2_1.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
					if (it == 0)
						it = it + 1;
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};
		</script>
	</body>

</html>
