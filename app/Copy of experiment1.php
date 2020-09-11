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
		<link href="experiment1/css/styles.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="experiment1/css/jquery.fancybox.css" media="screen" />

		<link href="experiment1/css/toastr.css" rel="stylesheet"/>
		<script type="text/javascript">
			function viewTable() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab1");
				var str1;
				var str2;

				//tableObj.rows[0].cells.length
				for (var i = 1; i < tableObj.rows.length; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("v" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myVoltage[i - 1] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(i+" "+myVoltage[i-1]);
				}
				for (var i = 1; i <= 5; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str2 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myCurrent[i - 1] = str2;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment1_1 = [{
					"varray" : myVoltage
				}, {
					"qarray" : myCurrent
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment1_1);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};

			//var obj = jQuery.parseJSON ('experiment1_1' );
			function viewTable2() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myVoltage1 = new Array();
				var myVoltage2 = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab2");
				var str1;
				var str2;
				var str3;
				var str4;

				//tableObj.rows[0].cells.length
				for (var i = 1; i < tableObj.rows.length; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str1 = document.getElementById("b" + i).value;
					str2 = document.getElementById("h" + i).value;
					str3 = document.getElementById("e" + i).value;
					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myVoltage[i - 1] = str1;
					myVoltage1[i - 1] = str2;
					myVoltage2[i - 1] = str3;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(i+" "+myVoltage[i-1]);
				}
				for (var i = 6; i <= 7; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str4 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myCurrent[i - 6] = str4;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment1_2 = [{
					"varray" : myVoltage,
					"varray1" : myVoltage1,
					"varray2" : myVoltage2
				}, {
					"qarray" : myCurrent
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment1_2);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler1_2.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};

			function viewTable3() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myVoltage1 = new Array();
				var myVoltage2 = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab3");
				var str1;
				var str2;
				var str3;
				var str4;

				//tableObj.rows[0].cells.length
				for (var i = 1; i < tableObj.rows.length; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str1 = document.getElementById("i" + i).value;
					str2 = document.getElementById("g" + i).value;
					str3 = document.getElementById("f" + i).value;
					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myVoltage[i - 1] = str1;
					myVoltage1[i - 1] = str2;
					myVoltage2[i - 1] = str3;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(i+" "+myVoltage[i-1]);
				}
				for (var i = 8; i <= 8; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str4 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myCurrent[i - 8] = str4;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment1_3 = [{
					"varray" : myVoltage,
					"varray1" : myVoltage1,
					"varray2" : myVoltage2
				}, {
					"qarray" : myCurrent
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment1_3);
				request = new XMLHttpRequest();
				if (confirm("Do you want to submit your answer? It may overwrite your records.")) {
					request.open("POST", "JSON_Handler1_3.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
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
						<h1 class="page-header">Experiment 1</h1>
						<h3>Magnetization Characteristics of a Separately Excited Machine</h3>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								Step 1: Preparation
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<h4>Review</h4>
								<ul>
									<li>
										If you didn't finish the Knowledge Concept for Experiment 1, please go to this <a href="./captivate/callees/experiment1/">link</a> and review the concepts.
									</li>

								</ul>
								<h4>Goal</h4>
								<ul>
									<li>
										The goal of this lab is to experimentally determine the magnetization curve for a DC machine.
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
									<li>
										Pen and paper if preferred to the digital table.
									</li>
								</ol>

							</div>
							<ul class="grid cs-style-3">

								<figure>
									<img width="600px" src="images/experiment1/circuit_exp1.jpg">
									<figcaption>
										<h3>Circuit Schematic for Experiment 1</h3>
									</figcaption>
								</figure>

							</ul>

							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-7" text-right>

							<ul width="100%" class="nav nav-tabs nav-stacked navbar-right" id="act1">
								<iframe src='experiment1/generator.php' id="info2" class="iframe" name='info' width="100%" height="700 px" frameborder=0  scrolling=auto seamless="seamless" align="left"></iframe>
							</ul>
						</div>
						<div class="col-lg-5">
<div class="row">
							<div class="panel panel-primary">
								<div class="panel-heading">
									Activity 1: Magnetization Curve
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<!--input type="button" data-toggle="modal" data-target="#myModal" value="Hint: Show Schematic"-->

									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">
														<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Follow the schematic to connect the circuit</h4>
												</div>
												<div class="modal-body">
													<img width="100%" src="images/experiment1/circuit_exp1.jpg">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">
														Close
													</button>

												</div>
											</div>
										</div>
									</div>
									<!--div id="loader">
									<span class="loader-text">Loading...</span>
									</div>
									<div id="container">
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
									</div>
									<div class="turbine-speed-indicator js-turbine-speed-indicator" data-speed="0">
									0 RPM
									</div>
									</div>
									<div class="generator_wrap" id="generatorWrap">
									<canvas class="generator_canvas" id="generatorCanvas" height="500" width="500"></canvas>
									<!--<div id="generatorControls">
									<span class="gen-current-indicator js-gen-current-indicator">Current: 0</span>
									<button class="generator_button js-gen-inc-button">+</button>
									<button class="generator_button minus js-gen-dec-button">-</button>
									</div>-->
									<!--/div>
									</div>
									<div class="circuit-container js-circuit-container">
									<span class="circuit js-circuit"></span>

									<span class="circuit-connection a vert js-circuit-connection js-a"></span>
									<span class="circuit-connection b vert js-circuit-connection js-b"></span>
									<span class="circuit-connection c vert js-circuit-connection js-c"></span>
									<span class="circuit-connection d hor js-circuit-connection js-d"></span>
									<span class="circuit-connection e vert js-circuit-connection js-e"></span>
									<span class="circuit-connection f hor js-circuit-connection js-f"></span>
									<span class="circuit-connection g vert js-circuit-connection js-g"></span>
									<span class="circuit-connection h vert js-circuit-connection js-h"></span>
									<span class="circuit-hotspot a vert js-circuit-hotspot" data-connect="a"></span>
									<span class="circuit-hotspot b vert js-circuit-hotspot" data-connect="b"></span>
									<span class="circuit-hotspot c vert js-circuit-hotspot" data-connect="c"></span>
									<span class="circuit-hotspot d hor js-circuit-hotspot" data-connect="d"></span>
									<span class="circuit-hotspot e vert js-circuit-hotspot" data-connect="e"></span>
									<span class="circuit-hotspot f hor js-circuit-hotspot" data-connect="f"></span>
									<span class="circuit-hotspot g vert js-circuit-hotspot" data-connect="g"></span>
									<span class="circuit-hotspot h vert js-circuit-hotspot" data-connect="h"></span>

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

									<!--<div class="variable_resistor_body js_variable_resistor_body" data-value="">
									<img src="images/circuit/variable_resistor_terminal.png" class="variable_resistor_terminal js_variable_resistor_terminal" data-position="">
									<span class="variable_resistor_value js_variable_resistor_value"></span>
									</div>-->
									<!--/div>
									</div-->

								</div>

								<!-- /.panel-body -->

								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												Follow the steps below to find the voltage for different field currents.
											</div>
											<div class="panel-body">
												<ol>
													<li>
														Connect the circuit according to the schematic diagram.
													</li>
													<li>
														Once the circuit is connected correctly, set the speed of the turbine to "1800 rpm" by clicking the "+" button. Then turn on the generator by clicking the switch button.
													</li>
													<li>
														Read the voltage value when the current is "0.0 A", then fill this value into the table.
													</li>
													<li>
														Decrease the field resistance by clicking the "-" button of the left Rheostat, thus increasing the field current. Read the current values in steps of 0.1 A and fill these values into the table. Then turn off the generator.
													</li>
												</ol>
											</div>
											<img width="100%" src="images/experiment1/circuit_exp1.jpg">
											<!-- /.table-responsive -->
										</div>
									</div>

									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												Generator terminal voltage for different field currents
											</div>
											<div class="table-responsive">
												<form>
													<table id="mytab1"  class="table table-bordered table-hover table-striped">
														<thead>
															<tr>
																<th>Current (A)</th>
																<th>Voltage (V)</th>

															</tr>
														</thead>
														<tbody>
															<tr>
																<td>0</td>
																<td>
																<input size="4" type="text" id="v1">
																</td>

															</tr>
															<tr>
																<td>0.1</td>
																<td>
																<input size="4" type="text" id="v2">
																</td>

															</tr>
															<tr>
																<td>0.2</td>
																<td>
																<input size="4" type="text" id="v3">
																</td>

															</tr>
															<tr>
																<td>0.3</td>
																<td>
																<input size="4" type="text" id="v4">
																</td>
															</tr>
															<tr>
																<td>0.4</td>
																<td>
																<input size="4" type="text" id="v5">
																</td>
															</tr>
															<tr>
																<td>0.5</td>
																<td>
																<input size="4" type="text" id="v6">
																</td>
															</tr>
															<tr>
																<td>0.6</td>
																<td>
																<input size="4" type="text" id="v7">
																</td>
															</tr>
															<tr>
																<td>0.7</td>
																<td>
																<input size="4" type="text" id="v8">
																</td>
															</tr>
															<tr>
																<td>0.8</td>
																<td>
																<input size="4" type="text" id="v9">
																</td>
															</tr>
															<tr>
																<td>0.9</td>
																<td>
																<input size="4" type="text" id="v10">
																</td>
															</tr>
															<tr>
																<td>1.0</td>
																<td>
																<input size="4" type="text" id="v11">
																</td>
															</tr>
															<tr>
																<td>1.1</td>
																<td>
																<input size="4" type="text" id="v12">
																</td>
															</tr>
															<tr>
																<td>1.2</td>
																<td>
																<input size="4" type="text" id="v13">
																</td>
															</tr>
														</tbody>

													</table>
													<p>
														Plot the magnetization curve.
													</p>
											</div>
											<!-- /.table-responsive -->
										</div>
									</div>

									<!-- /.col-lg-4 (nested) -->

									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												Plot the data from the table
											</div>
											<div class="plot" id="container_1" ></div>
											<input type="button" id="button_1" value="Plot">

											</button>
										</div>
									</div>
									<div class="col-lg-12">

										<div class="panel panel-default">
											<div class="panel-heading">
												Analyze the above plot and answer the following questions
											</div>
											<h4>Question 1:</h4>

											<ul>

												<li>
													Discuss the magnetization characteristic of the generator. In particular, discuss residual voltage and magnetic saturation.</p>

												</li>

											</ul>
											<textarea id="question1" class="form-control" rows="3"></textarea>
											<h4>Question 2:</h4>

											<ul>

												<li>
													Generator induced emf is given by the equation E = KI<sub>f</sub>, where I<sub>f</sub> is the field current. Using your experimental data, estimate the constant K.
												</li>

											</ul>
											<textarea id="question2" class="form-control" rows="3"></textarea>
											<h4>Question 3:</h4>

											<ul>

												<li>
													In light of your experimental data, can K be considered a true constant? Why or why not? Discuss.
												</li>

											</ul>
											<textarea id="question3" class="form-control" rows="3"></textarea>
											<h4>Question 4:</h4>

											<ul>

												<li>
													Generator induced emf can be described by E = K<sub>a</sub>&phi;&omega;, where &phi; = K<sub>f</sub>I<sub>f</sub>.  This gives E = K<sub>a</sub>K<sub>f</sub>&omega;I<sub>f</sub>.  Find the product K<sub>a</sub>K<sub>f</sub>.
												</li>

											</ul>
											<textarea id="question4" class="form-control" rows="3"></textarea>
											<h4>Question 5:</h4>

											<ul>

												<li>
													What additional information would you need to estimate the pole flux?   
												</li>

											</ul>
											<textarea id="question5" class="form-control" rows="3"></textarea>																																																															
								






											<button type="button"  onclick="viewTable()" class="btn btn-primary btn-lg btn-block">
												Save Data & Proceed
											</button>
										</div>
									</div>

								</div>

							</div>
							<!-- /.panel -->

						</div>
						<!--div class="row">
						<br><br><br>
						<div class="col-lg-7">
						<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="700" data-offset-bottom="5000">
						<iframe src='experiment1/generator.php' id="info2" class="iframe" name='info' width="100%" height="700 px" seamless="seamless" align="left"></iframe>
						</ul>
						</div>
						</div-->

						<div class="row" id="act2title">
							
								<div class="panel panel-primary">
									<div class="panel-heading">
										Activity 2: Repeat Experiment 1 for a different speed values.
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">

										<p>
											Repeat the experiment for 1600 rpm, 1400 rpm, and 1200 rpm. Record all data.
										</p>

									</div>

									<!-- /.panel-body -->
									<div class="row" id="act2plot">

										<div class="col-lg-12">

											<div class="panel panel-default" >
												<div class="panel-heading">
													Follow the steps below to find the voltage according to field current.
												</div>
												<div class="panel-body">
													<ol>
														<li>
															Set the speed to 1600 rpm.  Then turn on the generator by clicking the on/off switch.
														</li>
														<li>
															Read the voltage value when the current is "0.0 A", then fill this value into the table.
														</li>
														<li>
															Decrease the field resistance by clicking the "-" button of the left Rheostat, thus increasing the field current. Read the current values in steps of 0.1 A and fill these values into the table. Then turn off the generator.
														</li>
														<li>
															Repeat step 2 to 4 by changing speed of turbine to 1400 rpm and 1200 rpm.
														</li>
													</ol>
													<img width="100%" src="images/experiment1/circuit_exp1.jpg">
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													Please fill in the table below
												</div>
												<div class="table-responsive">
													<table id="mytab2"  class="table table-bordered table-hover table-striped">
														<thead>
															<tr>
																<th>Current (A)</th>
																<th>Voltage at 1600 rpm(V)</th>
																<th>Voltage at 1400 rpm(V)</th>
																<th>Voltage at 1200 rpm(V)</th>

															</tr>
														</thead>
														<tbody>
															<tr>
																<td>0</td>
																<td>
																<input size="4" type="text" id="b1">
																</td>
																<td>
																<input size="4" type="text" id="h1">
																</td>
																<td>
																<input size="4" type="text" id="e1">
																</td>

															</tr>
															<tr>
																<td>0.1</td>
																<td>
																<input size="4" type="text" id="b2">
																</td>
																<td>
																<input size="4" type="text" id="h2">
																</td>
																<td>
																<input size="4" type="text" id="e2">
																</td>

															</tr>
															<tr>
																<td>0.2</td>
																<td>
																<input size="4" type="text" id="b3">
																</td>
																<td>
																<input size="4" type="text" id="h3">
																</td>
																<td>
																<input size="4" type="text" id="e3">
																</td>

															</tr>
															<tr>
																<td>0.3</td>
																<td>
																<input size="4" type="text" id="b4">
																</td>
																<td>
																<input size="4" type="text" id="h4">
																</td>
																<td>
																<input size="4" type="text" id="e4">
																</td>
															</tr>
															<tr>
																<td>0.4</td>
																<td>
																<input size="4" type="text" id="b5">
																</td>
																<td>
																<input size="4" type="text" id="h5">
																</td>
																<td>
																<input size="4" type="text" id="e5">
																</td>
															</tr>
															<tr>
																<td>0.5</td>
																<td>
																<input size="4" type="text" id="b6">
																</td>
																<td>
																<input size="4" type="text" id="h6">
																</td>
																<td>
																<input size="4" type="text" id="e6">
																</td>
															</tr>
															<tr>
																<td>0.6</td>
																<td>
																<input size="4" type="text" id="b7">
																</td>
																<td>
																<input size="4" type="text" id="h7">
																</td>
																<td>
																<input size="4" type="text" id="e7">
																</td>
															</tr>
															<tr>
																<td>0.7</td>
																<td>
																<input size="4" type="text" id="b8">
																</td>
																<td>
																<input size="4" type="text" id="h8">
																</td>
																<td>
																<input size="4" type="text" id="e8">
																</td>
															</tr>
															<tr>
																<td>0.8</td>
																<td>
																<input size="4" type="text" id="b9">
																</td>
																<td>
																<input size="4" type="text" id="h9">
																</td>
																<td>
																<input size="4" type="text" id="e9">
																</td>
															</tr>
															<tr>
																<td>0.9</td>
																<td>
																<input size="4" type="text" id="b10">
																</td>
																<td>
																<input size="4" type="text" id="h10">
																</td>
																<td>
																<input size="4" type="text" id="e10">
																</td>
															</tr>
															<tr>
																<td>1.0</td>
																<td>
																<input size="4" type="text" id="b11">
																</td>
																<td>
																<input size="4" type="text" id="h11">
																</td>
																<td>
																<input size="4" type="text" id="e11">
																</td>
															</tr>
															<tr>
																<td>1.1</td>
																<td>
																<input size="4" type="text" id="b12">
																</td>
																<td>
																<input size="4" type="text" id="h12">
																</td>
																<td>
																<input size="4" type="text" id="e12">
																</td>
															</tr>
															<tr>
																<td>1.2</td>
																<td>
																<input size="4" type="text" id="b13">
																</td>
																<td>
																<input size="4" type="text" id="h13">
																</td>
																<td>
																<input size="4" type="text" id="e13">
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- /.table-responsive -->
											</div>

										</div>
										<!-- /.col-lg-4 (nested) -->
										<!--div class="col-lg-7" text-right>

										<ul width="100%" class="nav nav-tabs nav-stacked navbar-right" id="act1_2">
										<iframe src='experiment1/generator.php' id="info2" class="iframe" name='info' width="100%" height="700 px" frameborder=0  scrolling=auto seamless="seamless" align="left"></iframe>
										</ul>
										</div-->

									</div>

									<div class="panel panel-default" >
										<div class="panel-heading">
											Magnetization curve for different speeds
										</div>
										<div class="plot" id="container_2" ></div>
										<input type="button" id="button_2" value="Plot">

										</button>
									</div>

									<div class="row">

										<!-- /.col-lg-8 (nested) -->
										<div class="col-lg-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													Analyze the above plot and answer the following questions.
												</div>

												<h4>Question 6:</h4>

												<ul>

													<li>
														Explain how the generated voltage changes with machine speed.
													</li>

												</ul>
												<textarea id="question6" class="form-control" rows="3"></textarea>																																																																								
															
 <h4>Question 7:</h4>

												<ul>

													<li>
														How significant is change in the residual voltage with speed?  How significant is change in the machine terminal voltage with speed for rated field current?
													</li>

												</ul>
												<textarea id="question7" class="form-control" rows="3"></textarea>																																																																								
									
								</ul>






												<button type="button"  onclick="viewTable2()" class="btn btn-primary btn-lg btn-block">
													Save Data & Proceed
												</button>

											</div>
										</div>
									</div>

								</div>
								<!-- /.panel -->

							
						</div>

						<div class="row" id="act3title">
							
								<div class="panel panel-primary">
									<div class="panel-heading">
										Activity 3: Repeat the Experiments
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">

										<p>
											Set the Field current at 0.5A. Vary the prime mover speed from 800 rpm to 1800 rpm in steps of 100 rpm. Record corresponding terminal voltage. Repeat for field current at 0.8A and 1A.
										</p>

									</div>

									<!-- /.panel-body -->
									<div class="row" id="act3plot">

										<div class="col-lg-12">

											<div class="panel panel-default">
												<div class="panel-heading">
													Follow the steps below to find the voltage according to field current.
												</div>
												<div class="panel-body">
													<ol>
														<li>
															Set the field current to 0.5A.  Then turn on the generator by clicking the ON/OFF switch.

														</li>
														<li>
															Change the speed of the turbine from "800 rpm" to "1800 rpm" by clicking the "+" button.  Read the value of the voltmeter eachtime and record the value to the table.Then turn off the generator.
														</li>

														<li>
															Repeat step 2 to 3 by changing the value of ammeter to 0.8 A and 1 A. Record all data.
														</li>
													</ol>
													<img width="100%" src="images/experiment1/circuit_exp1.jpg">
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													Record all experimental data in the table below:
												</div>
												<div class="table-responsive">
													<table id="mytab3"  class="table table-bordered table-hover table-striped">
														<thead>
															<tr>
																<th>Speed (rpm)</th>
																<th>Voltage (V) at current = 0.5A</th>
																<th>Voltage (V) at current = 0.8A</th>
																<th>Voltage (V) at current = 1A</th>

															</tr>
														</thead>
														<tbody>
															<tr>
																<td>800</td>
																<td>
																<input size="4" type="text" id="i1">
																</td>
																<td>
																<input size="4" type="text" id="g1">
																</td>
																<td>
																<input size="4" type="text" id="f1">
																</td>

															</tr>
															<tr>
																<td>900</td>
																<td>
																<input size="4" type="text" id="i2">
																</td>
																<td>
																<input size="4" type="text" id="g2">
																</td>
																<td>
																<input size="4" type="text" id="f2">
																</td>

															</tr>
															<tr>
																<td>1000</td>
																<td>
																<input size="4" type="text" id="i3">
																</td>
																<td>
																<input size="4" type="text" id="g3">
																</td>
																<td>
																<input size="4" type="text" id="f3">
																</td>

															</tr>
															<tr>
																<td>1100</td>
																<td>
																<input size="4" type="text" id="i4">
																</td>
																<td>
																<input size="4" type="text" id="g4">
																</td>
																<td>
																<input size="4" type="text" id="f4">
																</td>
															</tr>
															<tr>
																<td>1200</td>
																<td>
																<input size="4" type="text" id="i5">
																</td>
																<td>
																<input size="4" type="text" id="g5">
																</td>
																<td>
																<input size="4" type="text" id="f5">
																</td>
															</tr>
															<tr>
																<td>1300</td>
																<td>
																<input size="4" type="text" id="i6">
																</td>
																<td>
																<input size="4" type="text" id="g6">
																</td>
																<td>
																<input size="4" type="text" id="f6">
																</td>
															</tr>
															<tr>
																<td>1400</td>
																<td>
																<input size="4" type="text" id="i7">
																</td>
																<td>
																<input size="4" type="text" id="g7">
																</td>
																<td>
																<input size="4" type="text" id="f7">
																</td>
															</tr>
															<tr>
																<td>1500</td>
																<td>
																<input size="4" type="text" id="i8">
																</td>
																<td>
																<input size="4" type="text" id="g8">
																</td>
																<td>
																<input size="4" type="text" id="f8">
																</td>
															</tr>
															<tr>
																<td>1600</td>
																<td>
																<input size="4" type="text" id="i9">
																</td>
																<td>
																<input size="4" type="text" id="g9">
																</td>
																<td>
																<input size="4" type="text" id="f9">
																</td>
															</tr>
															<tr>
																<td>1700</td>
																<td>
																<input size="4" type="text" id="i10">
																</td>
																<td>
																<input size="4" type="text" id="g10">
																</td>
																<td>
																<input size="4" type="text" id="f10">
																</td>
															</tr>
															<tr>
																<td>1800</td>
																<td>
																<input size="4" type="text" id="i11">
																</td>
																<td>
																<input size="4" type="text" id="g11">
																</td>
																<td>
																<input size="4" type="text" id="f11">
																</td>
															</tr>

														</tbody>
													</table>
												</div>
												<!-- /.table-responsive -->
											</div>

										</div>
										<!-- /.col-lg-4 (nested) -->
										<!--div class="col-lg-7" text-right>

										<ul width="100%" class="nav nav-tabs nav-stacked navbar-right"  id="act1_3" >
										<iframe src='experiment1/generator.php' id="info2" class="iframe" name='info' width="100%" height="700 px" frameborder=0  scrolling=auto seamless="seamless" align="left"></iframe>
										</ul>
										</div-->

									</div>

									<div class="panel panel-default" >
										<div class="panel-heading">
											Plot the data from the table
										</div>
										<div class="plot" id="container_3" ></div>
										<input type="button" id="button_3" value="Plot">

										</button>
									</div>

									<div class="row">

										<!-- /.col-lg-8 (nested) -->
										<div class="col-lg-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													Based on your experimental data, answer the following questions:
												</div>

												<h4>Question 8:</h4>

												<ul>

													<li>
														Discuss your observations of the above plot.
													</li>

												</ul>
												<textarea id="question8" class="form-control" rows="3"></textarea>																																																					


												<button type="button"  onclick="viewTable3()" class="btn btn-primary btn-lg btn-block">
													Submit Data & Reports
												</button>

											</div>
										</div>
									</div>

								</div>
								<!-- /.panel -->

							
						</div>
						
					</div>
				</div>
			</div>

			<!-- /#wrapper -->

			<script src="js/jquery-1.10.2.js"></script>
			<script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

			<script></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
			<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
			<!-- Page-Level Plugin Scripts - Flot -->
			<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
			<!-- SB Admin Scripts - Include with every page -->
			<script src="js/sb-admin.js"></script>

			<!-- Page-Level Demo Scripts - Flot - Use for reference -->

			<script src="js/plugins/hover/modernizr.custom.js"></script>
			<script src="experiment1/js/toastr.js"></script>
			<script type="text/javascript" src="experiment1/js/plugins/numeric-1.2.6.min.js"></script>
			<script>
				var eventTypeDown = 'mousedown';
				var eventTypeUp = 'mouseup mouseleave';
				if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
					eventTypeDown = 'touchstart';
					eventTypeUp = 'touchend';
				}
			</script>
			<!--script src="experiment1/js/sparks.js"></script>
			<script src="experiment1/js/generator.js"></script>
			<script src="experiment1/js/circuit_checker.js"></script>
			<script src="experiment1/js/generator_1.js"></script>
			<script src="experiment1/js/circuit_checker_1.js"></script>
			<script src="experiment1/js/generator_2.js"></script>
			<script src="experiment1/js/circuit_checker_2.js"></script>

			<script src="experiment1/js/circuit.js"></script-->

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
							text : 'Experiment 1',
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
							text : 'Experiment 1 activity 2',
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
						}, {
							name : '1400 rpm',
							data : [null]
						}, {
							name : '1200 rpm',
							data : [null]
						}]

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
						data : [[0, myVoltage_b[1]], [0.1, myVoltage_b[2]], [0.2, myVoltage_b[3]], [0.3, myVoltage_b[4]], [0.4, myVoltage_b[5]], [0.5, myVoltage_b[6]], [0.6, myVoltage_b[7]], [0.7, myVoltage_b[8]], [0.8, myVoltage_b[9]], [0.9, myVoltage_b[10]], [1.0, myVoltage_b[11]], [1.1, myVoltage_b[12]], [1.2, myVoltage_b[13]]]
						//data: [[a, b],[c,d], [e,f]]
					});
					chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1400 rpm',
						data : [[0, myVoltage_h[1]], [0.1, myVoltage_h[2]], [0.2, myVoltage_h[3]], [0.3, myVoltage_h[4]], [0.4, myVoltage_h[5]], [0.5, myVoltage_h[6]], [0.6, myVoltage_h[7]], [0.7, myVoltage_h[8]], [0.8, myVoltage_h[9]], [0.9, myVoltage_h[10]], [1.0, myVoltage_h[11]], [1.1, myVoltage_h[12]], [1.2, myVoltage_h[13]]]
						//data: [[a, b],[c,d], [e,f]]
					});
					chart.addSeries({
						animation : {
							duration : 4000
						},
						name : '1200 rpm',
						data : [[0, myVoltage_e[1]], [0.1, myVoltage_e[2]], [0.2, myVoltage_e[3]], [0.3, myVoltage_e[4]], [0.4, myVoltage_e[5]], [0.5, myVoltage_e[6]], [0.6, myVoltage_e[7]], [0.7, myVoltage_e[8]], [0.8, myVoltage_e[9]], [0.9, myVoltage_e[10]], [1.0, myVoltage_e[11]], [1.1, myVoltage_e[12]], [1.2, myVoltage_e[13]]]//data: [[a, b],[c,d], [e,f]]
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
text : 'Experiment 1 activity 3',
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
				$(function() {
					$(window).bind("load resize", function() {
						width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
						if (width < 1200) {
							$(window).off('.affix');
							$("#act1_2").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							$("#act1_3").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							//$("#act2_1").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							//$("#act5_1").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							//$("#act5_2").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							//$("#act5_3").removeClass("affix affix-top affix-bottom").removeData("bs.affix");
							document.getElementById("act1_2").style.marginTop = "0px";
							document.getElementById("act1_3").style.marginTop = "0px";
							//document.getElementById("act2_1").style.marginTop = "0px";
							//document.getElementById("act5_1").style.marginTop = "0px";
							//document.getElementById("act5_2").style.marginTop = "0px";
							//document.getElementById("act5_3").style.marginTop = "0px";
						} else {

						}
					});
				});
			</script>

	</body>

</html>
