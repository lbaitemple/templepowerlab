<?php
require_once ('auth.php');
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Virtual Power Laboratory v1.0</title>

		<!-- Core CSS - Include with every page -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Page-Level Plugin CSS - Dashboard -->
		<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
		<link href="css/plugins/timeline/timeline.css" rel="stylesheet">

		<!-- SB Admin CSS - Include with every page -->
		<link href="css/sb-admin.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="js/plugins/hover/component.css" />

	</head>

	<body>
		
		<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

						</button>
						<h4 class="modal-title" id="myModalLabel">Thank you!</h4>
					</div>
					<div class="modal-body">
						<p>We appreciate your feedback for any questions and suggestions for improving the VPL.  If you are a user and have any questions on the contents or experiments, please let us know.  Instructors planning to use VPL for a laboratory course, please contact us if you need help with course management.  Thank you for using VPL.</p>
						<hr>
						<h4>You can contact us</h4>
						<p>Saroj Biswas (<a href="mailto:sbiswas@temple.edu?Subject=VPL%20Contact%20Message" target="_top">sbiswas@temple.edu</a>)</p>
<p>Ning Gong (<a href="mailto:ning.gong@temple.edu?Subject=VPL%20Contact%20Message" target="_top">ning.gong@temple.edu</a>)</p>
<p>Department of Electrical and Computer Engineering</p>
<p>College of Engineering</p>
<p>Temple University</p>
<p>1947 N. 12th Street</p>
<p>Philadelphia, PA19122</p>
						<hr>
						<h4>Or directly send us message</h4>
<form name="contactform" method="post" action="mailer.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="wrapper">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button-->
					<div class="col-lg-1">
						<img class="logo" src="images/nsf-logo.png">
					</div>
					<div align="center" class="col-lg-8">
						<br>
						<a style="margin-left: 100px" class="navbar-brand" href="index.php">Virtual Power Laboratory V1.0</a>

					</div>
					<div class="col-lg-3">
						<img class="logo1" style="margin-top:20px" src="images/temple.png">
					</div>
				</div>
				<!-- /.navbar-header -->
<hr style="width: 100%;  height: 1px; " />
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
					<table align="center" class="fixed">
    <col width="14%" />
    <col width="14%" />
    <col width="15%" />
    <col width="14%" />
    <col width="14%" />
    <col width="14%" />
    <col width="14%" />
    <tr><td align="center">
					<li>
						<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
					</li>
					</td>
					<td align="center">
					<li>
						<a href="captivate/index.html"><i class="fa fa-dashboard fa-fw"></i> Learning Material</a>
					</li>
					</td>
					<td align="center">
					<li class="dropdown">
						<!--a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a-->
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Generator Experiments <i class="fa fa-caret-down"></i></a>

						<ul class="dropdown-menu dropdown-tasks">
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
						<!-- /.dropdown-tasks -->
					</li>
					</td>
					<td align="center">
					<li class="dropdown">
						<!--a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a-->
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Motor Experiments <i class="fa fa-caret-down"></i></a>

						<ul class="dropdown-menu dropdown-tasks">
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
						<!-- /.dropdown-tasks -->
					</li>
					</td>
					<td align="center">
					<li class="dropdown">
						<!--a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a-->
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench fa-fw"></i> User Management <i class="fa fa-caret-down"></i></a>

						<ul class="dropdown-menu dropdown-tasks">
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
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					</td>

					<td align="center">
					<li class="dropdown">
						<!--a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a-->
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench fa-fw"></i> Feedback <i class="fa fa-caret-down"></i></a>

						<ul class="dropdown-menu dropdown-tasks">
							<li>
								<a href='#'  data-toggle='modal' data-target='#MyModal' id='okBtn'>Contact Us</a> 
							</li>
							
							<li>
								<a href="https://docs.google.com/forms/d/1yXIukyw6Rjoy4-tnqhIsCSxJz9tjcWwtmQMJGN4ptws/viewform" target="_blank">Survey Form</a> 
							</li>
							
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					</td>

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

					<td align="center"><li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <?php echo 'Hello ' . ($_SESSION['SESS_FIRST_NAME'] != '' ? $_SESSION['SESS_FIRST_NAME'] : 'Guest '); ?><i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
					
							<li>
								<a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					</td></tr>

</table>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->

				<!--div class="navbar-default navbar-static-top" role="navigation">

				<!-- /.sidebar-collapse >
				</div-->

				<!-- /.navbar-static-side -->
			</nav>
<hr>
<br>
<br>
<br>
<br>


			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<br>
						<h1 class="page-header">Learning Material & Dashboard</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="/index.html" >Learning Material</a>
								<div class="pull-right">
									<div class="btn-group">

									</div>
								</div>
							</div>
							<!-- /.panel-heading -->

							<figure align="center">
								<img src="images/homepage1.jpg">
								<br>
								<a href="captivate/index.html">
								<input type="button" value="Start" />
								</a>
							</figure>

							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->

						<!-- /.panel -->
						<!--div class="panel panel-default">
						<div class="panel-heading">
						<i class="fa fa-clock-o fa-fw"></i> Timeline
						</div>
						<!-- /.panel-heading >
						<div class="panel-body">
						<ul class="timeline">
						<li>
						<div class="timeline-badge"><i class="fa fa-check"></i>
						</div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						<p>
						<small class="text-muted"><i class="fa fa-time"></i> 11 hours ago via Twitter</small>
						</p>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						<li class="timeline-inverted">
						<div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
						</div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						<li>
						<div class="timeline-badge danger"><i class="fa fa-credit-card"></i>
						</div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						<li class="timeline-inverted">
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						<li>
						<div class="timeline-badge info"><i class="fa fa-save"></i>
						</div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						<hr>
						<div class="btn-group">
						<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-cog"></i>
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a>
						</li>
						<li><a href="#">Another action</a>
						</li>
						<li><a href="#">Something else here</a>
						</li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a>
						</li>
						</ul>
						</div>
						</div>
						</div>
						</li>
						<li>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						<li class="timeline-inverted">
						<div class="timeline-badge success"><i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						<h4 class="timeline-title">Timeline Event</h4>
						</div>
						<div class="timeline-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
						</div>
						</div>
						</li>
						</ul>
						</div>
						<!-- /.panel-body >
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-8 -->
					<!--iv class="col-lg-4">
					<div class="panel panel-default">
					<div class="panel-heading">
					<i class="fa fa-bell fa-fw"></i> Notifications Panel
					</div>
					<!-- /.panel-heading -->
					<!--div class="panel-body">
					<div class="list-group">
					<a href="#" class="list-group-item"> <i class="fa fa-comment fa-fw"></i> New Comment <span class="pull-right text-muted small"><em>4 minutes ago</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small"><em>12 minutes ago</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-envelope fa-fw"></i> Message Sent <span class="pull-right text-muted small"><em>27 minutes ago</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-tasks fa-fw"></i> New Task <span class="pull-right text-muted small"><em>43 minutes ago</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small"><em>11:32 AM</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-bolt fa-fw"></i> Server Crashed! <span class="pull-right text-muted small"><em>11:13 AM</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-warning fa-fw"></i> Server Not Responding <span class="pull-right text-muted small"><em>10:57 AM</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed <span class="pull-right text-muted small"><em>9:49 AM</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-money fa-fw"></i> Payment Received <span class="pull-right text-muted small"><em>Yesterday</em> </span> </a>
					</div>
					<!-- /.list-group -->
					<!--a href="#" class="btn btn-default btn-block">View All Alerts</a>
					</div>
					<!-- /.panel-body -->
					<!--/div>
					<!-- /.panel -->

					<!-- /.panel -->

					<!-- /.panel .chat-panel -->
					<!--/div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-7">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-bar-chart-o fa-fw"></i> Experiment Knowledge Concepts
								<div class="pull-right">
					
								</div>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="col-lg-6">
									<div class="panel panel-default">
										<div class="panel-heading">
											Generator Experiments
										</div>
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>Experiment Number</th>
															<th>Generator Concepts</th>
															<th>Links</th>

														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Magnetization Characteristics of a Separately Excited Machine</td>
															<td><a href="./captivate/callees/experiment1/">Start</a></td>

														</tr>
														<tr>
															<td>2</td>
															<td>Voltage Buildup of a Shunt Generator</td>
															<td><a href="./captivate/callees/experiment2/">Start</a></td>

														</tr>
														<tr>
															<td>3</td>
															<td>Loading of a Shunt Generator</td>
															<td><a href="./captivate/callees/experiment3/">Start</a></td>

														</tr>
														<tr>
															<td>4</td>
															<td>Series Generator Load Characteristics</td>
															<td><a href="./captivate/callees/experiment4/">Start</a></td>

														</tr>
														<tr>
															<td>5</td>
															<td>Compound Generator Load Characteristics</td>
															<td><a href="./captivate/callees/EXP5/">Start</a></td>

														</tr>
													</tbody>
												</table>
											</div>
											<!-- /.table-responsive -->
										</div>
										<!-- /.panel-body -->
									</div>
									<!-- /.panel -->
								</div>
								<div class="col-lg-6">
									<div class="panel panel-default">
										<div class="panel-heading">
											Motor Experiments
										</div>
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>Experiment Number</th>
															<th>Motor Concepts</th>
															<th>Links</th>

														</tr>
													</thead>
													<tbody>
														<tr>
															<td>6</td>
															<td>Starting of a Shunt Motor</td>
															<td><a href="./captivate/callees/EXP6/">Start</a></td>

														</tr>
														<tr>
															<td>7</td>
															<td>Speed Control of a Shunt Motor</td>
															<td><a href="./captivate/callees/EXP7/">Start</a></td>

														</tr>
														<tr>
															<td>8</td>
															<td>Speed Torque Characteristics of a Shunt Motor</td>
															<td><a href="./captivate/callees/EXP8/">Start</a></td>

														</tr>
														<tr>
															<td>9</td>
															<td>Speed Torque Characteristics of a Series Motor</td>
															<td><a href="./captivate/callees/EXP9/">Start</a></td>

													</tbody>
												</table>
											</div>
											<!-- /.table-responsive -->
										</div>
										<!-- /.panel-body -->
									</div>
									<!-- /.panel -->
								</div>
								<!-- /.panel -->
							</div>
							<!-- /.col-lg-8 -->
							<!-- /#wrapper -->
						</div>
					</div>
<div class="stat">
    <span class="stat-count"><?php
	require_once ('count.php');
 ?></span>
    <p class="stat-detail">Visitors</p>
</div>
<p><?php
require_once ('getip.php');
 ?></p>

				</div>
				<!-- /.row -->

				<!-- Core Scripts - Include with every page -->
				
				<script src="js/jquery-1.10.2.js"></script>
				<script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

				<script>
					jQuery(document).ready(function() {

						function count($this) {

							var current = parseInt($this.html(), 10);
							current = current + 1;
							/* Where 1 is increment */

							$this.html(++current);
							if (current > $this.data('count')) {
								$this.html($this.data('count'));
							} else {
								setTimeout(function() {
									count($this)
								}, 50);
							}
						}


						jQuery(".stat-count").each(function() {
							jQuery(this).data('count', parseInt(jQuery(this).html(), 10));
							jQuery(this).html('0');
							count(jQuery(this));
						});
					});
				</script>
				<script src="js/bootstrap.js"></script>
				<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

				<!-- Page-Level Plugin Scripts - Dashboard -->
				<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>

				<!-- SB Admin Scripts - Include with every page -->
				<script src="js/sb-admin.js"></script>

				<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->

				<script src="js/plugins/morris/morris.js"></script>
				<script src="js/plugins/hover/modernizr.custom.js"></script>
				<script>
					new Morris.Bar({
						// ID of the element in which to draw the chart.
						element : 'myfirstchart',
						// Chart data records -- each entry in this array corresponds to a point on
						// the chart.
						data : [{
							Experiment : 'Experiment 1',
							score : 20
						}, {
							Experiment : 'Experiment 2',
							score : 10
						}, {
							Experiment : 'Experiment 3',
							score : 5
						}, {
							Experiment : 'Experiment 4',
							score : 5
						}, {
							Experiment : 'Experiment 5',
							score : 20
						}, {
							Experiment : 'Experiment 6',
							score : 80
						}, {
							Experiment : 'Experiment 7',
							score : 90
						}, {
							Experiment : 'Experiment 8',
							score : 100
						}, {
							Experiment : 'Experiment 9',
							score : 75
						}],
						// The name of the data record attribute that contains x-values.
						xkey : 'Experiment',
						// A list of names of data record attributes that contain y-values.
						ykeys : ['score'],
						// Labels for the ykeys -- will be displayed when you hover over the
						// chart.
						labels : ['Score']
					});
				</script>

	</body>

</html>
