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
		<link href="experiment6/css/styles.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="experiment6/css/jquery.fancybox.css" media="screen" />

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
						<h1 class="page-header">Experiment 6</h1>
						<h3>Starting of a Shunt Motor</h3>
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
								<h4>Review</h4>
								<h4>Pre-laboratory Question:</h4>

								<ul>
									<li>
									 Review the default rating of the motor, such as nominal speed, maximum field current, and nominal terminal voltage.  A machine must never be operated beyond the rated condition specified by the manufacturer. What are the default ratings?
							</li>
								<textarea id="Pretest" class="form-control" rows="3"></textarea>																																																
									
								</ul>






								<ul>
									<li>
										If you didn't finish the Knowledge Concept for Experiment 2 or have difficulties answer the above question, please go to this <a href="./captivate/callees/EXP6/">link</a> and review the concepts.
									</li>

								</ul>
								<h4>Goal</h4>
								<ul>
									<li>
										To learn how to start a shunt motor
									</li>

									<li>
										To learn how to change the direction of rotation
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
									<img width="600px" align="center" src="images/experiment1/circuit_exp6.jpg">
									<figcaption>
										<h3>Circuit Schematic for Experiment 6</h3>
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

							<ul width="100%" class="nav nav-tabs nav-stacked navbar-right" id="act6_1">
								<!--iframe src='experiment2/generator.php' id="info2" class="iframe" name='info' width="100%" height="700 px" frameborder=0  scrolling=auto seamless="seamless" align="left"></iframe-->
								<div id="loader">
			<span class="loader-text">Loading...</span>
		</div>
		<div id="container">
			<div class="turbine-generator-wrap">
				<div id="turbine">
					<div class="turbine-title">
						Tachometer
					</div>
					<div class="turbine-buttons-wrap js-turbine-buttons-wrap">
						
						
						<div id="speedometer"   align="left"></div>
									<!--button class="turbine-button down js-turbine-button" disabled>
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
						</div-->
						<div class="col-lg-12" align="center">
							<div class="onoffswitch">
								<input type="checkbox" name="onoffswitch" onclick="switchMachine()" value="0" class="onoffswitch-checkbox js-turbine-button-switch" id="myonoffswitch" unchecked disabled>
								<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
							</div>
							<span id="timer" >20 secs</span>
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
				<span id="spot-a" class="circuit-hotspot a vert js-circuit-hotspot" data-connect="a"></span>
				<span id="spot-b" class="circuit-hotspot b vert js-circuit-hotspot" data-connect="b"></span>
				<span id="spot-c" class="circuit-hotspot c vert js-circuit-hotspot" data-connect="c"></span>
				<span id="spot-d" class="circuit-hotspot d hor js-circuit-hotspot" data-connect="d"></span>
				<span id="spot-e" class="circuit-hotspot e vert js-circuit-hotspot" data-connect="e"></span>
				<span id="spot-f" class="circuit-hotspot f hor js-circuit-hotspot" data-connect="f"></span>
				<span id="spot-g" class="circuit-hotspot g vert js-circuit-hotspot" data-connect="g"></span>
				<span id="spot-h" class="circuit-hotspot h vert js-circuit-hotspot" data-connect="h"></span>

			</div>

		</div>
		<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

						</button>
						<h4 class="modal-title" id="myModalLabel">Schematic</h4>
					</div>
					<div class="modal-body">
						<img width="100%" src="images/experiment1/circuit_exp6.jpg" />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="solModal" tabindex="-1" role="dialog" aria-labelledby="solModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

						</button>
						<h4 class="modal-title" id="myModalLabel">Solution</h4>
					</div>
					<div class="modal-body">
						<img width="100%" src="images/experiment1/exp6_sol.jpg" />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="components-window-wrap js-components-window-wrap">
			<div class="components-window js-components-window">
				<span class="close-x js-close-x"></span>
				<span class="components-window-heading js-components-window-heading"></span>
				<span class="component ammeter hor js-component" data-component="ammeter"><span class="component-text meter">Ammeter</span></span>
				<span class="component voltmeter hor js-component" data-component="voltmeter"><span class="component-text meter">Power Supply</span></span>
				<span class="component resistor hor js-component" data-component="resistor"><span class="component-text resistor">Variable Resistor</span></span>
				<span class="component wire hor js-component" data-component="wire"><span class="component-text wire">Jumper Wire</span></span>

				<span class="component-option js-component-option" data-option="disconnect">Disconnect Component</span>
				<span class="component-option js-component-option" data-option="change">Change Component</span>
				<span class="component-option js-component-option js-resistor-option" data-option="resistor">Change Resistor Value</span>

				<!--<div class="variable_resistor_body js_variable_resistor_body" data-value="">
				<img src="images/circuit/variable_resistor_terminal.png" class="variable_resistor_terminal js_variable_resistor_terminal" data-position=""-->
				<span class="variable_resistor_value js_variable_resistor_value"></span>
				
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
									<div id="modal_here" class="panel-body">


									</div>
									<div class="panel panel-warning" >
										
										<div class="panel-body">
										<ol>
														<!--li>
															Set the power supply to 120V dc.  Set the field resistance to the lowest value so that field current is maximum to produce a high starting torque.
														</li-->
														<li>

															Connect the circuit according to the schematic correctly.  Switch on the power supply and monitor the motor speed and the armature current.
														</li>
														<li>
															As the machine speeds up, cut down the starter resistance in several steps, typically about four to five steps.
														</li>
														<li>
															The motor assumes full speed in a few seconds, the data acquisition system automatically records the motor speed and the armature current which will be displayed on the computer monitor.
														</li>
														<li>
															Note the direction of rotation.  Shut down the motor.
														</li>
														<!--li>
															Reset the starter resistance.  Interchange the polarity of the power supply.  Restart the motor and note the direction of rotation. Shut down the motor.
														</li-->
														<!--li>
															Reset the starter resistance.  Interchange the polarity of the field coil.  Restart the motor and note the direction of rotation.  Shut down the motor.
														</li-->
													</ol>
											<img width="100%" src="images/experiment1/circuit_exp6.jpg">
										</div>
									</div>

									<div class="panel panel-warning" >
										<div class="panel-heading">
														Plot the speed and the motor current as a function of time.
													</div>
													<div class="plot" id="container_1" ></div>
										
									</div>
											<div class="panel panel-warning" >
									<div class="panel-heading">
														Plot the calculated and terminal voltages from the table
													</div>
													<div class="plot" id="container_2" ></div>
											
									</div>
								
									<div class="panel panel-warning">
										<div class="panel-heading">
														Please analyze the charts plotted above and answer the questions
													</div>

													<h4>Question 1:</h4>

													<ul>

														<li>
															Plot the motor speed and current.  Interpret the starting process by observing the plots of motor speed and the motor current as a function of time.
														</li>

													</ul>
													<textarea id="question1" class="form-control" rows="3"></textarea>																																														
															
 <h4>Question 2:</h4>

													<ul>

														<li>
														Using the machine parameters and a starter resistance of 20 ohms, calculate the starting current.  Does it compare with the actual starting current of the motor?
														</li>

													</ul>
													<textarea id="question2" class="form-control" rows="3"></textarea>																																														
									
								
 <h4>Question 3:</h4>

													<ul>

														<li>
														Would you be able to start the motor using a smaller starter resistance, say 10 ohms?  Why or why not?
														
															</li>

													</ul>
													<textarea id="question3" class="form-control" rows="3"></textarea>																																														
									
							
 <h4>Question 4:</h4>

													<ul>

														<li>
												Would you be able to start the motor with a larger starter resistance, say 30 ohms?  Why or why not?	</li>

													</ul>
													<textarea id="question4" class="form-control" rows="3"></textarea>		
													
													
													
													 <h4>Question 5:</h4>

													<ul>

														<li>
														Use the circuit model of the motor to design a five-segment starter resistance.  Armature current during the starting process must not exceed 120% of the rated value.
														</li>

													</ul>
													<textarea id="question5" class="form-control" rows="3"></textarea>		

			 <h4>Question 6:</h4>

													<ul>

														<li>
													(Please skip this) Did the direction of rotation of the motor reverse in Step 6 of the experiment? Explain. Hint: Use the basic motor principle to find the direction of rotation.		
													</li>

													</ul>
													<textarea id="question6" class="form-control" rows="3"></textarea>		
			 <h4>Question 7:</h4>

													<ul>

														<li>
													(Please skip this) The the direction of rotation of the motor reverse in Step 7? Explain. 	
													</li>

													</ul>
													<textarea id="question7" class="form-control" rows="3"></textarea>	

										<button type="button"  onclick="viewTable()" class="btn btn-warning btn-lg btn-block">
											Submit Data & Reports
										</button>

									</div>

								</div>

							</div>

							<!-- /.col-lg-4 (nested) -->

						



<!--activity2-->
						
							

							<!-- /.col-lg-4 (nested) -->
							<!--activity 2 ends-->
							<!--activity 3 -->

							<!--activity 3 ends-->
							<!--activity 4 -->
							
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
		<script src="js/plugins/tutor/tutor_exp6.js"></script>
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
		<script src="experiment6/js/toastr.js"></script>
		<script type="text/javascript" src="experiment6/js/plugins/numeric-1.2.6.min.js"></script>
		<script>
			var eventTypeDown = 'mousedown';
			var eventTypeUp = 'mouseup mouseleave';
			if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
				eventTypeDown = 'touchstart';
				eventTypeUp = 'touchend';
			}
		</script>
		<script src="experiment6/js/sparks.js"></script>
		<script src="experiment6/js/generator.js"></script>
		<script src="experiment6/js/circuit_checker.js"></script>

		<script src="experiment6/js/circuit.js"></script>

		<script src="js/plugins/morris/morris.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
			<link rel="stylesheet" type="text/css" href="experiment6/techometer/speedometer.css" media="screen" />

		<script type="text/javascript" src="experiment6/techometer/xcanvas.js"></script>
		<script type="text/javascript" src="experiment6/techometer/tbe.js"></script>

		<script type="text/javascript" src="experiment6/techometer/digitaldisplay.js"></script>
		<script type="text/javascript" src="experiment6/techometer/speedometer.js"></script>
		<script type="text/javascript" src="experiment6/techometer/themes/default.js"></script>

		<script type="text/javascript" src="experiment6/techometer/example.js"></script>
		<script type="text/javascript" src="experiment6/techometer/controls.js"></script>
					<script>
						$(function() {
							$('#container_1').highcharts({

								title : {
									text : 'Current Curve',
									x : -20 //center
								},
								subtitle : {
									text : 'Experiment 6',
									x : -20
								},
								xAxis : {
									title : {
										text : 'Time (seconds)'
									},
									min : 0,
									tickInterval : 2,
									max : 20
								},
								yAxis : {

									plotLines : [{
										value : 0,
										width : 0.1,
										color : '#808080'
									}],
									title : {
										text : 'Armature Current (A)'
									},
									min : 0,
									tickInterval : 2,
									max : 14
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
									name : 'Current',
									data : [null, null]
								}]

							});
						});


					</script>

					<script>
						$(function() {
							$('#container_2').highcharts({

								title : {
									text : 'Speed Curve',
									x : -20 //center
								},
								subtitle : {
									text : 'Experiment 6',
									x : -20
								},
								xAxis : {
									title : {
										text : 'Time (seconds)'
									},
									min : 0,
									tickInterval : 2,
									max : 20
								},
								yAxis : {

									plotLines : [{
										value : 0,
										width : 0.1,
										color : '#808080'
									}],
									title : {
										text : 'Speed (rpm)'
									},
									min : 0,
									tickInterval : 400,
									max : 2000
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
									name : 'Speed',
									data : [null, null]
								}]

							});
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
				chart.series[1].addSeries(mySeries);

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
	<script type="text/javascript">
						var count;
						var counter;
						var S=[];
						var W=[];
						var j=0;
						//var SS=[5,6,7,8];
						var C = [];
						function switchMachine() {
							//var $turbine_speed_indicator = $('.js-turbine-speed-indicator');
							var $turbine_buttons = $('.js-turbine-button');
							var $turbine_buttons_switch = document.getElementById("myonoffswitch");
							//console.log($turbine_buttons_switch.checked);
							$ammeter1 = $('.js-a.ammeter');
							$ammeter2 = $('.js-f.ammeter');
							$power = $('.js-g.voltmeter');
							//var res = document.getElementById("indicator").innerHTML.split(" ");
							if ($turbine_buttons_switch.checked == true) {
								//alert(res[0]);
								//var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
								//$turbine_speed_indicator.attr('data-speed', res[0]);
								circuit_checker.experiments['exp1'].calculate();
								//$turbine_buttons.attr('disabled', true);
								//enable "-" set to 20 ohms
								$('.js-d.resistor .down').attr('disabled', false);

								count = 20;
								//speedometer.update(100);
								document.getElementById("timer").style.color = "black";
								document.getElementById("timer").innerHTML = count + " secs";
								counter = setInterval(timer, 1000);
									//speedometer.update(100);
				//speed = 100;

				/*(function(i) {
					setInterval(function() {
						speed -= 10;
						speedometer.animatedUpdate(speed, 500);
					}, 1000)
				})(i);*/
	

								//1000 will  run it every 1 second
								//clearInterval(counter);

								disableResistor();
								
							} else {
								//$turbine_speed_indicator.attr('data-speed', 0);
								//circuit_checker.experiments['exp1'].calculate();
								S = [];
								C = [];
								W=[];
								j=0;
									var $generator = $('#generatorCanvas');
  							var turbine_speed =  $('.js-turbine-speed-indicator').attr('data-speed');
   							
							$generator.trigger( "updateGenerator", [0] );
							speedometer.update(0);
								console.log(S);
								//$turbine_buttons.attr('disabled', false);
								//set speed to 0
								//$turbine_speed_indicator.html('0 RPM');
								//disable "-"
								$('.js-d.resistor .up').attr('disabled', true);
								$('.js-d.resistor .down').attr('disabled', true);
								//ammeter to 0
								calcExp1.current1 = 0;
								calcExp1.current2 = 0;
								$ammeter1.html('0.00A');
								$ammeter2.html('0.00A');
								//voltmeter to 0
								//$voltmeter1.html('0.00V');
								clearInterval(counter);
								enableResistor();
							}
						}

						function timer() {
							count = count - 1;
							document.getElementById("timer").innerHTML = count + " secs";
							
							var $generator = $('#generatorCanvas');
  							var turbine_speed =  $('.js-turbine-speed-indicator').attr('data-speed');
   							$ammeter1 = $('.js-a.ammeter');
    						$ammeter2 = $('.js-f.ammeter');
							//set ammeter
							$ammeter1.html(0.80 + 'A');
							
							var value=parseFloat(C[(20-count)*10]);
							if (count==0) value=parseFloat(C[199]);
							$ammeter2.html(value.toFixed(2) + 'A');
							//set speed
							
							
							var value_1=parseFloat(S[(20-count)*10]);
							if (count==0) value_1=parseFloat(S[199]);
							$generator.trigger( "updateGenerator", [value_1/1000] );
							speedometer.animatedUpdate(value_1, 500);
							//rotate machine
							
							if (count == 14) {
								document.getElementById("timer").style.color = "red";
							}
							if (count <= 0) {
								clearInterval(counter);
								//counter ended, do something here
								return;
							}

							//Do code for showing the number of seconds here
						}

						function disableResistor() {
							document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
							//document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)b(?!\S)/g, '');
							document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

							document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
							//document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)c(?!\S)/g, '');
							document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

							document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
							//document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)d(?!\S)/g, '');
							document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

							document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
							document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
							document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

						}

						function enableResistor() {
							//document.getElementById("spot-b").classList.add("b");
							document.getElementById("spot-b").classList.add("circuit-hotspot");
							document.getElementById("spot-b").classList.add("js-circuit-hotspot");

							//document.getElementById("spot-c").classList.add("c");
							document.getElementById("spot-c").classList.add("circuit-hotspot");
							document.getElementById("spot-c").classList.add("js-circuit-hotspot");

							//document.getElementById("spot-d").classList.add("d");
							document.getElementById("spot-d").classList.add("circuit-hotspot");
							document.getElementById("spot-d").classList.add("js-circuit-hotspot");

							document.getElementById("spot-e").classList.add("e");
							document.getElementById("spot-e").classList.add("circuit-hotspot");
							document.getElementById("spot-e").classList.add("js-circuit-hotspot");
						}
					</script>
			
			<script type="text/javascript">
			//var SS = [];
			function cutDown(){
var a=.05;   		// flux model
var K=0.07; 		// flux model
var R_f0=150; 		// field resistance
var R_a=1; 			// armature resistance
var R_s=0.2;  		// series field
var R_starter = 0; 	// starter resistance
var T_load=0; 
var N_f=1000; 		// number of turns in shunt field
var N_s=150; 		// number of turns in series field
var J_m=5.0e-03; 	// motor inertia 7.5
var D_m=0.7e-03; 	// friction coefficient 1.5
var Delta=0.1; 		// sampling time
var A_d = Math.exp( numeric.mul((0-D_m),Delta)/J_m );
var B_d = numeric.div(K,D_m)*(1-A_d);
var C_d = (-1/D_m)*(1-A_d);
var R_f;
//var w=0;

//motor model in discrete time





	//var SS = [];
	//var SS = [5, 6, 7, 8];
	//var j = 0;
	
	R_starter = 20 - 5*(j+1);
	$('.resistor_value').html(R_starter+" Ohms");
	if(R_starter==0){
		$('.js-d.resistor .down').attr('disabled', true);
	}
	var V_t =120;// document.getElementById("v_in").value;
	
	var new_Speed = 0;
	
	var speed_error = 999;
	var iter = 0;
	var step = 0;
	var res = document.getElementById("timer").innerHTML.split(" ");
	
	var t = 20-res[0];
	var index=parseInt(t/0.1);
	var Speed = S[index-1];
	var w = W[index-1];
	var x = numeric.div(I_f,a);
	var y = numeric.div(a,I_f);
	
	//Hyperbolic cotangent of x = coth x = (e^x + e^-x)/(e^x - e^-x)
	var coth = ( Math.exp(x)+Math.exp(0-x) )/( Math.exp(x)-Math.exp(0-x) );
	var Phi = parseFloat(coth) - parseFloat(y);
	var iter = 0;
	
	while(1){

		var E_a = numeric.mul(K,Speed,Phi) + 0.1*Math.random();
		//Armature current
		var u = parseInt(V_t)-parseFloat(E_a);
		var v = parseFloat(R_a)+parseInt(R_starter);
		var I_a = numeric.div(u,v);
		I_a = I_a.toPrecision(4);
		
		var f1 = numeric.mul(A_d,w);
		var f2 = numeric.mul(B_d,Phi,I_a);
		var f3 = numeric.mul(C_d,T_load);
		
		w = parseFloat(f1) + parseFloat(f2) + parseFloat(f3);
		new_Speed = (60*w)/(2*Math.PI);
		
		speed_error = parseFloat(new_Speed) - parseFloat(Speed);
		Speed = new_Speed.toPrecision(5);
		t = index*0.1;
		t  += parseFloat(Delta); 
		t = t.toPrecision(3);
		//index=parseInt(t/0.1);
		C[index] = I_a;
		S[index]=Speed;
		W[index]=w;
		//console.log("t is :"+t);
		
		//console.log("Speed is :"+Speed);
		//console.log("index is :"+index);
		index++;
		if(parseInt(t)==20)break;
		//j++;
	}
	if(j==3)
	{var timerr=[];
								for(var jar=0; jar<=199; jar++)
									{
										timerr[jar]=jar/10;
									}
								//console.log(timerr[10]);
								var chart = $('#container_2').highcharts();
						var mySeries = [];
						for (var i = 0; i < timerr.length; i++) {
							mySeries.push([timerr[i], parseFloat(S[i])]);

						}
						if (chart.series[0].length > 0) {
						chart.series[0].remove(true);}
						chart.series[0].setData(mySeries);
						
						var chart_1 = $('#container_1').highcharts();
						var mySeries_1 = [];
						for (var i = 0; i < timerr.length; i++) {
							mySeries_1.push([timerr[i], parseFloat(C[i])]);

						}
						if (chart_1.series[0].length > 0) {
						chart_1.series[0].remove(true);}
						chart_1.series[0].setData(mySeries_1);}
	j++;
	//console.log(W);
	console.log(C);
}</script>
		<script type="text/javascript">
			function viewTable() {
				//myCurrent = []; //Clear the array
				//myVoltage = [];
				//mytable = [];
				var myCurrent = new Array();
				var mySpeed = new Array();
				var myTime = new Array();
				var myQuestion = new Array();
				//var myTable = new Array();
				//var tableObj = document.getElementById("mytab2");
				var str1;
			
				myCurrent=C;
				mySpeed=S;
				mySpeed[0]='0';
				//myuestion

			
				for (var i = 1; i <= 7; i++) {
					//myCurrent[i-1]= tableObj.rows[i].cells[1].innerHTML+" ";
					//var text = tableObj.rows[i].cells[2].children[0];
					//myVoltage[i-1] = text.value;
					//str1 = tableObj.rows[0].cells[i].innerHTML;
					//str1 = document.getElementById("c" + i).value;
					str1 = document.getElementById("question" + i).value;

					//str2 = text.value;
					//myCurrent[i - 1] = str1;
					myQuestion[i - 1] = str1;

					//var m = i - 1;
					//alert(str1+"  "+str2);
					//sessionStorage.setItem("myCurrent" + m, myCurrent[m]);
					//sessionStorage.setItem("myVoltage" + m, myVoltage[m]);
					//alert(myCurrent[i - 1]);
					//alert(i+"  "+str2);
				}
				var experiment6_1 = [{
					"carray" : myCurrent
				}, {
					"speed" : mySpeed
				}, {
					"qarray" : myQuestion
				}];
				//alert("Value Saved, Please go to next page and plot the data.");
				//window.location='fancy.html'
				var str_json = JSON.stringify(experiment6_1);
				request = new XMLHttpRequest();
				if (confirm("Do you want to save your data?")) {
					request.open("POST", "JSON_Handler6_1.php", true);

					request.setRequestHeader("Content-type", "application/json");

					request.send(str_json)
					console.log("sent" + str_json);
					//it = it + 1;
				} else {

				}

				//				alert(experiment1_1[0].varray[0]);
			};
		</script>
				<script type="text/javascript">
			var speedometer;
			// Explicit onready listener for modern browsers. If you use a JS framework,
			// you should replace this code with your toolkit's "onReady" helpers (e.g.
			// $(document).ready() on jQuery, Event.observe('dom:loaded') on prototype,
			// and so on.
			document.addEventListener("DOMContentLoaded", function() {
				document.removeEventListener("DOMContentLoaded", arguments.callee, false);

				// Check out configuration and API on GitHub Wiki:
				// http://wiki.github.com/vjt/canvas-speedometer
				speedometer = new Speedometer('speedometer', {
					theme : 'default'
				});
				speedometer.draw();

			}, false);
		</script>
		<script type="text/javascript">
			function test() {
				//var meter=document.getElementById('test');
				//speedometer.update(20);
				//for(var i; i<1; i++)
				//speedometer.update('stop');
				speedometer.update(100);
				speed = 100;

				(function(i) {
					setInterval(function() {
						speed -= 10;
						speedometer.animatedUpdate(speed, 500);
					}, 1000)
				})(i);

				//speedometer.update(0, 500)
				//animatedUpdate(150, 2);
			}

		</script>

	</body>

</html>
