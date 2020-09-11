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
						<h1 class="page-header">Pre-Laboratory Questions</h1><h2>For Experiment 1</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								Questions
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">

								<form method="POST" name="myquiz">

									<font face="Arial"><big><big>General Knowledge Quiz</big></big></font></p>

									<div class="qheader">
										1) What is the difference between a jungle and a rain forest?
									</div>
									<div class="qselections">
										<input type="radio" value="a" name="question1">
										a) No difference. Simply two different ways in referring to the same thing.
										<br>
										<input type="radio" value="b" name="question1">
										b) A jungle in general receives less rain than a rain forest.
										<br>
										<input type="radio" value="c" name="question1">
										c) A jungle refers to the thickest area of a rain forest
										<br>
										<input type="radio" value="d" name="question1">
										d) A jungle and a rain forest each contain their own group of distinct plants and animals.
										<br>
									</div>

									<br>

									<div class="qheader">
										2) What is the world's most common religion?
									</div>
									<div class="qselections">
										<input type="radio" value="a" name="question2">
										a) Christianity
										<br>
										<input type="radio" value="b" name="question2">
										b) Buddhism
										<br>
										<input type="radio" value="c" name="question2">
										c) Hinduism
										<br>
										<input type="radio" value="d" name="question2">
										d) Muslim
										<br>
									</div>

									<br>

									<div class="qheader">
										3) Which city ranks as the world's most populous city (2002)?
									</div>
									<div class="qselections">
										<input type="radio" value="a" name="question3">
										a) New York (US)
										<br>
										<input type="radio" value="b" name="question3">
										b) Mexico City (Mexico)
										<br>
										<input type="radio" value="c" name="question3">
										c) Tokyo (Japan)
										<br>
										<input type="radio" value="d" name="question3">
										d) Shanghai (China)
										<br>
									</div>

									<br>

									<div class="qheader">
										4) What is the second largest country (in size) in the world?
									</div>
									<div class="qselections">
										<div class="qselections">
											Answer:
											<input id="question4">
											<br>
											a) USA
											<br>

											b) China
											<br>

											c) Canada
											<br>

											d) Russia
											<br>
										</div>

										<br>

										<div class="qheader">
											5) As of January 2003, how much is Microsoft Chairman Bill Gates's net worth?
										</div>
										<div class="qselections">
											Answer:
											<input id="question5">
											<br>
											a) 10 million US
											<br>

											b) 10 billion US
											<br>

											c) 35 billion US
											<br>

											d) 50 billion US
											<br>
										</div>

										<br>

								</form>
								<form>
									<div align="center">
										<input type="button" value="Grade Me!" name="B1" onClick="gradeit()">
										<input type="button" value="Reset" name="B2" onClick="document.myquiz.reset()">
									</div>
								</form>
							</div>

							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
				</div>

				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->
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





		<script type="text/javascript" src="experiment1/js/jquery.fancybox.js"></script>
		<script type="text/javascript">
			var actualchoices = new Array()
			var totalquestions = 5

			//Enter the solutions corresponding to each question:
			var correctchoices = new Array()
			var correctinput = new Array()
			correctchoices[1] = 'c'//question 1 solution
			correctchoices[2] = 'a'//question 2 solution, and so on.
			correctchoices[3] = 'c'
correctchoices[4]='c'
correctchoices[5]='c'
var incorrect = null
			function gradeit() {

				incorrect = null
				//grade question 1
				var thequestion = eval("document.myquiz.question1")
				for (c=0;c<thequestion.length;c++){
					if (thequestion[c].checked==true)
					actualchoices[1]=thequestion[c].value
				}
				if (actualchoices[1] != correctchoices[1]) {//process an incorrect choice
					if (incorrect == null)
						incorrect = ""+1
					else
						incorrect += "/" + 1
				}
				//grade question 2
				var thequestion = eval("document.myquiz.question2")
				for (c=0;c<thequestion.length;c++){
					if (thequestion[c].checked==true)
					actualchoices[2]=thequestion[c].value
				}
				if (actualchoices[2] != correctchoices[2]) {//process an incorrect choice
					if (incorrect == null)
						incorrect = ""+2
					else
						incorrect += "/" + 2
				}
				//grade question 3
				var thequestion = eval("document.myquiz.question3")
				for (c=0;c<thequestion.length;c++){
					if (thequestion[c].checked==true)
					actualchoices[3]=thequestion[c].value
				}
				if (actualchoices[3] != correctchoices[3]) {//process an incorrect choice
					if (incorrect == null)
						incorrect = ""+3
					else
						incorrect += "/" + 3
				}
				//grade question 4
				var thequestion = eval("document.myquiz.question4")
				if (document.getElementById("question4").value != null)
					actualchoices[4] =document.getElementById("question4").value
				if (actualchoices[4] != correctchoices[4]) {//process an incorrect choice
					if (incorrect == null)
						incorrect = ""+4
					else
						incorrect += "/" + 4
				}
				//grade question 5
				var thequestion = eval("document.myquiz.question5")
				if (document.getElementById("question5").value != null)
					actualchoices[5] =document.getElementById("question4").value
				if (actualchoices[5] != correctchoices[5]) {//process an incorrect choice
					if (incorrect == null)
						incorrect = ""+5
					else
						incorrect += "/" + 5
				}								
				if (incorrect == null)
					incorrect = "a/b"
					
					
					var wrong=0



					alert(incorrect);
					alert(incorrect.length);
					if (incorrect.length>1)
					incorrect=incorrect.split("/")
					if (incorrect[incorrect.length-1]=='b')
						incorrect=""
					console.log(totalquestions-incorrect.length+" out of "+totalquestions)
					console.log((totalquestions-incorrect.length)/totalquestions*100+"%")
					var value="";
					if (incorrect.length>1)
					for (temp=0;temp<incorrect.length;temp++)
						value+=incorrect[temp]+", "
					else
						value=incorrect;
				//alert(incorrect)
					console.log(value)
				//window.setTimeout(window.location.href = "https://www.google.co.in",5000);
			}

		</script>

	</body>

</html>
