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
                    <br><h1 class="page-header">Answer Database</h1><h2>Under Development</h2>
                    <div id="answers">
                    	
                    	<!--div id="answer1"  class="col-lg-8">
                    		<p>In each experiment there are tables and figures listed along with the experiment. In the figure you will find the Plot button. Click on the Plot button will help you plot the data you have. Please be aware that befor plotting you should follow three steps to get the data ready: </p>
                    		<ol>
                    			<li>Follow the instructions of each experiment to get the correct data;</li>
                    			<li>Fill all the data to the table untill all the cells of the table is reached;</li>
                    			<li>Make sure the button you click is paired with the table you've finished.</li>
                    		</ol>
                    		<p>Following is the figure showing the "Plot" button of a figure:</p>
                    		<img src="images/tutor/answer1.JPG"></img>
                    	</div>
                    	
                    	<div id="answer2"  class="col-lg-8">
                    		<p>To connect a circuit there are four steps you can follow:</p>
                    		<ol>
                    			<li>Locate the circuit board in each experiment. The location may vary;</li>
                    			<li>Find the circuit schematic in the instruction block, identify each component on the schematic;</li>
                    			<li>Click the area between two dots on the circuit board and then select the correct component according to the circuit schematic;</li>
                    			<li>Live instructions at the left corner of the circuit board will show you if a circuit is connected correctly.</li>
                    		</ol>
                    		<p>Hint: If you connect the circuit incorrectly, you can click again on the component and choose to whether disconnect it or change the component.</p>
                    		<p>Following is the figure showing exaple of connecting a circuit:</p>
                    		<img src="images/tutor/answer2.jpg"></img>
                    	</div>
                    	
                    	<div id="answer3"  class="col-lg-8">
                    		<p>To view the records of the students please click the button (4) in the following figure:</p>
                    		<img src="images/tutor/answer31.jpg"></img>
                    		<p>You have to select “User Managements”->”Grade Center”. You will see a list of all the records as shown below:</p>
                    		<img src="images/tutor/answer32.jpg"></img>
                    		<p>Click on “submit time” column twice, the most recent record will be shown at the first row, please click “Grade it” if you want to view the record.</p>
                    
                    		
                    	</div>
                    	
                    	<div id="answer4"  class="col-lg-8">
                    		<p>To start learning the power concepts, please click button (2) in the following figure To start the experiments, please click button (3) to begin the first experiment. It’s recommended to go through the learning material before attempting the experiments. </p>
							<img src="images/tutor/answer31.jpg"></img>
							<p>A screenshot of the power concept page is shown below, follow the numerical order in the figure below:</p>
							<img src="images/tutor/answer4.jpg"></img>
                    		
                    		
                    	</div>
                    	                    	<div id="answer5"  class="col-lg-8">
                    		<p>Once finished with all of the knowledge base material, you will be redirected to an experiment concept page. It’s similar in content to the power concept page and can be seen in figure below:</p>
							<img src="images/tutor/answer5.jpg"></img>
				
                    		
                    		
                    	</div>
                    	
                    	<div id="answer6"  class="col-lg-8">
                    		<p>The Instructions for experiment 1 are shown below:</p>
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
                    	
                    	                    	<div id="answer7"  class="col-lg-8">
                    		<p>The Instructions for experiment 2 are shown below:</p>
                    				
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
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer8"  class="col-lg-8">
                    		<p>The Instructions for experiment 3 are shown below:</p>
                    				<ul>
															<li>
																Part 1: Start the generator.
																<ol>
																	<li>
																		Connect the generator as shown in the schematic.  Set the prime mover speed to 1800 rpm.
																	</li>
																	<li>
																		Turn on the generator by clicking the switch.  The voltmeter connected to the generator terminals should show a small voltage due to residual magnetism.

																	</li>
																	<li>
																		Adjust the field rheostat by clicking +/- buttons until the generator terminal voltage rises to approximately 120V.
																	</li>
																</ol>
														</ul>
														<ul>
															<li>
																Part 2: Load Voltage Build-up.
																<ol>
																	<li>
																		Load the generator by varying the load resistance.  Click on the +/- buttons to vary the load rheostat.  For each step, record the load current, terminal voltage, and the generator field current.  Then shut down the generator.
																	</li>
																	<li>
																		For each value of the load current, calculate the terminal voltage using the generator circuit model (Note that Armature Resistance is 1 Ohm).  Enter the data in the table.
																	</li>
																</ol>
															</li>
														</ul>
				
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer9"  class="col-lg-8">
                    		<p>The Instructions for experiment 4 are shown below:</p>
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
                    	
                    	                    	<div id="answer10"  class="col-lg-8">
                    		<p>The Instructions for experiment 5 are shown below:</p>
                    			<ul>
														<li>
															Part 1: Rheostat Startup.
															<ol>
																<li>
																	Connect the circuit as shown in the schematic.  Set the prime mover speed at 1800 rpm.							</li>
																<li>
																	Turn on the generator by clicking the switch button. Set the shunt rheostat at zero resistance (click on "-" untill it reaches the lowest).

																</li>
																<li>
																	The generator terminal voltage should increase to a voltage close to the rated voltage, Which is above 120 V. 
																</li>
															</ol>
													</ul>
													<ul>
														<li>
															Part 2: Load the generator.
															<ol>
																

																<li>
																	Vary the load current from 0 to 5A in steps of 0.5A.  For each step, read the load current and the field current, and then fill them in the table.
																</li>
																<li>
																	For each value of load current, record the load voltage and the field current.
																		</li>
																		<li>
																			Use armature resistance of 1 ohm and the series field resistance of 0.1 ohm. Calculate the terminal voltage and record in the table. 
																		</li>
															</ol>
														</li>
													</ul>
				
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer11"  class="col-lg-8">
                    		<p>The Instructions for experiment 6 are shown below:</p>
                    				<ol>
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
														
														
													</ol>
				
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer12"  class="col-lg-8">
                    		<p>The Instructions for experiment 7 are shown below:</p>
                    				<ol>
														<li>
															Set the power supply to 120V dc.  Set the field resistance to the lowest value so that field current is maximum to produce a high starting torque.
														</li>
														<li>
															Set the starter resistance to the highest possible value.  Switch on the power supply and monitor the motor speed and the armature current.  The machine speeds up to about 1800 rpm in a few seconds.
														</li>
														<li>
															The motor is now running at full speed.  Now decrease the field current from 1.2A to a smaller value in steps of 0.1A.  For each step, note the machine speed; do not exceed 125% of the rated speed since a very high speed may damage the motor.  For each step, record the speed, armature current and the field current.   Shut down the motor as the speed reaches about 120% of rated value.
														</li>
														<li>
															Using the circuit model of the motor, calculate the motor speed for each field current. Fill in the table and plot the motor speed versus field current on the same figure as above.
														</li>
														<li>
															Also for each field current, calculate torque produced by the motor.
														</li>
													</ol>
				
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer13"  class="col-lg-8">
                    		<p>The Instructions for experiment 8 are shown below:</p>
                    												<ol>
												<li>
													Set the power supply to 120V dc.  Set the field resistance to the lowest value so that field current is at a maximum to produce a high starting torque.
												</li>
												<li>
													Set the starter resistance to the highest possible value.  Switch on the power supply and monitor the motor speed and the armature current.  The machine speeds up to about 1800 rpm in a few seconds.
												</li>
												<li>
													The motor is now running at no load; in practice there is a small load due to friction at the shaft bearings.  Increase the mechanical load slowly from 0 to 0.45 Nm in steps of 0.05 Nm.  For each step, record the machine speed and armature current while keeping an eye on the motor current which must not exceed 120% of rated value.  Shut down the motor after experiment is completed.
												</li>
											</ol>
				
                    		
                    		
                    	</div>
                    	
                    	                    	<div id="answer14"  class="col-lg-8">
                    		<p>The Instructions for experiment 9 are shown below:</p>
                    													<ol>
													<li>
														Connect an ammeter and a starter resistance in series with the armature and the power supply.  
													</li>
													<li>

														Attach a tachometer to the machine shaft to monitor the motor speed.    
													</li>
 

												</ol>
				
                    		
                    		
                    	</div-->
                    	
        
                    	
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
			<script src="js/plugins/tutor/answer.js"></script>
			<script src="js/plugins/tutor/countries.js"></script>

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



	</body>

</html>
