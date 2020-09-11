<?php
	require_once('auth.php');
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
		<link href="experiment4/css/styles.css" rel="stylesheet" type="text/css">
		<link href="css/plugins/tutor/styles.css" rel="stylesheet" />

<script type="text/javascript">
			function viewTable() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var myVoltage = new Array();
				var myVoltage1 = new Array();
				var myQuestion = new Array();
				var myTable = new Array();
				var tableObj = document.getElementById("mytab1");
				var str1;
				var str2;
				var str3;
				var str4;
				var str5;

				//tableObj.rows[0].cells.length
				for (var i = 1; i < tableObj.rows.length; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str1 = document.getElementById("v" + i).value;
					str2 = document.getElementById("b" + i).value;
					str3 = document.getElementById("h" + i).value;
					//str2 = text.value;
					myCurrent[i - 1] = str1;
					myVoltage[i - 1] = str2;
					myVoltage1[i - 1] = str3;
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
					str4 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 1] = str4;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment4 = [{
					"carray" : myCurrent
				}, {
					"varray" : myVoltage
				}, {
					"varray1" : myVoltage1
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment4);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler4.php", true);

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
										<a href="grading.php">Grade Center</a></li><li><a href="score.php">Scores and Grades</a></li>
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
						<br><h1 class="page-header">Experiment 4</h1>
						<h3>Series Generator Load Characteristics</h3>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								Step 1: Preparation
							</div>
							<!-- /.panel-heading -->
							<div id="modal_here" class="panel-body">
								<h4>Review</h4>
								<h4>Pre-laboratory Question:</h4>

								<ul>

									<li>
										Review the default rating of the generator, such as nominal speed, maximum field current, and nominal terminal voltage.  A machine must never be operated beyond the rated condition specified by the manufacturer. What are the default ratings?
								</ul>
								<textarea id="Pretest" class="form-control" rows="3"></textarea>
								<ul>
									<li>
										If you didn't finish the Knowledge Concept for Experiment 4, please go to this <a href="./captivate/callees/experiment4/">link</a> and review the concepts.
									</li>

								</ul>
								<h4>Goal</h4>
								<ol>
									<li>
										To study properties of shunt generator under varying loads.

									</li>
									<li>

										To understand the concept of armature reaction.

									</li>
									<li>

										To study efficiency and voltage regulation of the machine.
									</li>
								</ol>
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
									<img width="600px" src="images/experiment1/circuit_exp4.jpg">
									<figcaption>
										<h3>Circuit Schematic for Experiment 4</h3>
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
						<div class="panel panel-info">
							<div class="panel-heading">
								Step 2: Virtual Experiment
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								
								<!--5 starts-->
								<div class="col-lg-5">
											<div class="row">

												<div class="panel panel-info">
													<div class="panel-heading">
														Follow the steps below to find the rated voltage and field current.
													</div>
													<div class="panel-body">
											<ol>
												<li>
													Once the circuit is connected correctly, set the prime mover speed at 1800 rpm. Keep the load terminal open. Measure the generator terminal voltage.
												</li>
												<li>

													Switch on the load circuit.  Vary the load current from 0 to 5A in steps of 0.5A (click on "-" untill it reaches the lowest).  For each step, record the field current.
												</li>
												<li>
													For each value of the load current, calculate the terminal voltage by solving the generator circuit model.  Plot the calculated terminal voltage and the actual terminal voltage as a function of the load current.
												</li>
											</ol>
										</div>
													<!-- /.table-responsive -->
												</div>

												<!--Instruction ends-->

												<div class="panel panel-info">
													<div class="panel-heading">
														Please fill the table below
													</div>
													<div class="table-responsive">
														<table id="mytab1"  class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>Load Current (A)</th>
														<th>Field Current (A)</th>
														<th>Terminal Voltage (V)</th>
														<th>Calculated Voltage (V)</th>

													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0</td>
														<td>
														<input size="4" type="text" id="v1">
														</td>
														<td>
														<input size="4" type="text" id="b1">
														</td>
														<td>
														<input size="4" type="text" id="h1">
														</td>

													</tr>
													<tr>
														<td>0.5</td>
														<td>
														<input size="4" type="text" id="v2">
														</td>
														<td>
														<input size="4" type="text" id="b2">
														</td>
														<td>
														<input size="4" type="text" id="h2">
														</td>

													</tr>
													<tr>
														<td>1</td>
														<td>
														<input size="4" type="text" id="v3">
														</td>
														<td>
														<input size="4" type="text" id="b3">
														</td>
														<td>
														<input size="4" type="text" id="h3">
														</td>

													</tr>
													<tr>
														<td>1.5</td>
														<td>
														<input size="4" type="text" id="v4">
														</td>
														<td>
														<input size="4" type="text" id="b4">
														</td>
														<td>
														<input size="4" type="text" id="h4">
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>
														<input size="4" type="text" id="v5">
														</td>
														<td>
														<input size="4" type="text" id="b5">
														</td>
														<td>
														<input size="4" type="text" id="h5">
														</td>
													</tr>
													<tr>
														<td>2.5</td>
														<td>
														<input size="4" type="text" id="v6">
														</td>
														<td>
														<input size="4" type="text" id="b6">
														</td>
														<td>
														<input size="4" type="text" id="h6">
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>
														<input size="4" type="text" id="v7">
														</td>
														<td>
														<input size="4" type="text" id="b7">
														</td>
														<td>
														<input size="4" type="text" id="h7">
														</td>
													</tr>
													<tr>
														<td>3.5</td>
														<td>
														<input size="4" type="text" id="v8">
														</td>
														<td>
														<input size="4" type="text" id="b8">
														</td>
														<td>
														<input size="4" type="text" id="h8">
														</td>

													</tr>
													<tr>
														<td>4</td>
														<td>
														<input size="4" type="text" id="v9">
														</td>
														<td>
														<input size="4" type="text" id="b9">
														</td>
														<td>
														<input size="4" type="text" id="h9">
														</td>
													</tr>
													<tr>
														<td>4.5</td>
														<td>
														<input size="4" type="text" id="v10">
														</td>
														<td>
														<input size="4" type="text" id="b10">
														</td>
														<td>
														<input size="4" type="text" id="h10">
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>
														<input size="4" type="text" id="v11">
														</td>
														<td>
														<input size="4" type="text" id="b11">
														</td>
														<td>
														<input size="4" type="text" id="h11">
														</td>
													</tr>

												</tbody>
											</table>
													</div>
													<!-- /.table-responsive -->
												</div>

											</div>
											<!--Table Ends-->

										</div>
								<!--5 ends-->
								<!--7 starts-->
								<br>
								<br>
								<div class="col-lg-7" text-right>
											<ul width="100%" class="nav nav-tabs nav-stacked navbar-right" >
												<iframe src='experiment4/generator.php' id="info" class="iframe" name='info' width="100%" height="700 px" seamless="seamless" align="left"></iframe>
											</ul>
										</div>
								<!--7 ends-->
							
							</div>
							<!-- /.panel-body ends -->
							
							<div class="row">
										<div class="col-lg-6">
											<div class="panel panel-info">
												<div class="panel-heading">
													Plot the field current from the table
												</div>
												<div class="plot" id="container_1" ></div>
												<button id="button_1" class="autocompare">
													Plot
												</button>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="panel panel-info">
												<div class="panel-heading">
													Plot the calculated and recorded voltages from the table
												</div>
												<div class="plot" id="container_2" ></div>
												<button id="button_2" class="autocompare">
													Plot
												</button>
											</div>
										</div>

										<!--plot ends-->
										<div class="col-lg-8">
											<div class="panel panel-info">
												<div class="panel-heading">
													Please analyse the charts plotted above and answer the questions
												</div>

													<h4>Question 1:</h4>

											<ul>

												<li>
													Plot the calculated terminal voltage and the actual terminal voltage as a function of the load current.  Are the two plots the same? If not, discuss why not.  Also discuss the overall load voltage profile.
												</li>

											</ul>
											<textarea id="question1" class="form-control" rows="3"></textarea>																																
															
 <h4>Question 2:</h4>

											<ul>

												<li>
													For each load current, compute the load power and the overall efficiency of the machine. Discuss your result.
												</li>

											</ul>
											<textarea id="question2" class="form-control" rows="3"></textarea>																																
									
							
 <h4>Question 3:</h4>

											<ul>

												<li>
													Compare the load voltage profile of a series generator with that of a shunt generator.
												</li>

											</ul>
											<textarea id="question3" class="form-control" rows="3"></textarea>																																
									
								
 <h4>Question 4:</h4>

											<ul>

												<li>
													Discuss possible approaches to controlling the terminal voltage of a series generator to a desired voltage.
												</li>
											</ul>
											<textarea id="question4" class="form-control" rows="3"></textarea>																																
									
								
 <h4>Question 5:</h4>

											<ul>

												<li>
													Was there a residual voltage when you started this experiment?  What would happen if there were no residual voltage?
												</li></ul>
												<textarea id="question5" class="form-control" rows="3"></textarea>																																		
									

												<button type="button"  onclick="viewTable()" class="btn btn-infocess btn-lg btn-block">
													Submit Data & Reports
												</button>

											</div>
										</div>
									</div>
								</div>
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
							<!--all ends-->

						

				<script src="js/jquery-1.10.2.js"></script>
				<!--tutor js start-->
		<script src="js/plugins/tutor/countries.js"></script>
		<script src="js/plugins/tutor/tutor_exp4.js"></script>
		<!--tutor js end-->
				 <script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

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

				<script type="text/javascript" src="experiment4/js/plugins/numeric-1.2.6.min.js"></script>
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

			


				<script>
					$(function() {
						$('#container_1').highcharts({

							title : {
								text : 'Magnetization Curve',
								x : -20 //center
							},
							subtitle : {
								text : 'Experiment 4 Activity 1',
								x : -20
							},
							xAxis : {
								title : {
									text : 'Load Current (A)'
								},
								min : 0,
								tickInterval : 0.5,
								max : 5
							},
							yAxis : {

								plotLines : [{
									value : 0,
									width : 0.1,
									color : '#808080'
								}],
								title : {
									text : 'Field Current (A)'
								},
								min : 0,
								tickInterval : 0.2,
								max : 1.4
							},
							tooltip : {
								valueSuffix : 'A'
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
								name : 'Exp 4',
								data : [null, null]
							}]

						});
					});
					$('#button_1').click(function() {
						var myVoltage = new Array();
						var chart = $('#container_1').highcharts();
						for ( i = 1; i <= 11; i++) {

							myVoltage[i] = parseFloat(document.getElementById("v" + i).value);
							//alert(myVoltage[i]);
						}
						chart.series[0].remove(true);

						chart.addSeries({
							animation : {
								duration : 4000
							},
							name : 'Exp 3',
							data : [[0, myVoltage[1]], [0.5, myVoltage[2]], [1, myVoltage[3]], [1.5, myVoltage[4]], [2, myVoltage[5]], [2.5, myVoltage[6]], [3, myVoltage[7]], [3.5, myVoltage[8]], [4, myVoltage[9]], [4.5, myVoltage[10]], [5, myVoltage[11]]]
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
								text : 'Experiment 4 Activity 1',
								x : -20
							},
							xAxis : {
								title : {
									text : 'Load Current (A)'
								},
								min : 0,
								tickInterval : 0.5,
								max : 5
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
								name : 'Terminal',
								data : [null]
							}, {
								name : 'Calculated',
								data : [null]
							}]

						});
					});
					$('#button_2').click(function() {
						var myVoltage_b = new Array();
						var myVoltage_h = new Array();

						var chart = $('#container_2').highcharts();
						for ( i = 1; i <= 11; i++) {

							myVoltage_b[i] = parseFloat(document.getElementById("b" + i).value);
							myVoltage_h[i] = parseFloat(document.getElementById("h" + i).value);

							//alert(myVoltage[i]);
						}
						chart.series[0].remove(true);
						chart.series[0].remove(true);

						chart.addSeries({
							animation : {
								duration : 4000
							},
							name : 'Terminal',
							data : [[0, myVoltage_b[1]], [0.5, myVoltage_b[2]], [1, myVoltage_b[3]], [1.5, myVoltage_b[4]], [2, myVoltage_b[5]], [2.5, myVoltage_b[6]], [3, myVoltage_b[7]], [3.5, myVoltage_b[8]], [4, myVoltage_b[9]], [4.5, myVoltage_b[10]], [5, myVoltage_b[11]]]
							//data: [[a, b],[c,d], [e,f]]
						});
						chart.addSeries({
							animation : {
								duration : 4000
							},
							name : 'Calculated',
							data : [[0, myVoltage_h[1]], [0.5, myVoltage_h[2]], [1, myVoltage_h[3]], [1.5, myVoltage_h[4]], [2, myVoltage_h[5]], [2.5, myVoltage_h[6]], [3, myVoltage_h[7]], [3.5, myVoltage_h[8]], [4, myVoltage_h[9]], [4.5, myVoltage_h[10]], [5, myVoltage_h[11]]]
							//data: [[a, b],[c,d], [e,f]]
						});

						//chart.addSeries([[0,i], [0.1,14.0], [0.2,17.0], [0.3,135.6], [0.4,14.5], [0.5,21.4], [0.6,19], [0.7,20], [0.8,21], [0.9,29],[1.0,29],[1.1,29],[1.2,29]] );
					});

				</script>

			
			

	</body>

</html>
