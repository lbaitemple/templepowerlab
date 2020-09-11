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
<h3 class="page-header">
<br>
<?php // here comes your delete query: use $_POST['deleteItem'] as your id
	require_once ('config.php');

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	$a = $_GET["deleteItem"];
	$message = "wrong answer";
	//echo "<script type='text/javascript'>alert('$a');</script>";

	$result = mysqli_query($con, "select * FROM exp2_2 WHERE id='$a'");
	$row = mysqli_fetch_array($result);
	$b = $row['member_id'];
	$member = mysqli_query($con, "SELECT * FROM members where member_id='$b'");
	$guy = mysqli_fetch_array($member);

	echo $guy['firstname'];
	echo " ";
	echo $guy['lastname'];
	//$c= $row['json'];
	$var = $row['json'];

	//echo $var;

	//$restoredSession = JSON.parse($var);";

	// Now restoredSession variable contains the object that was saved
	// in localStorage
	//echo '$restoredSession';

	//$json = json_decode($string);
	//if you want to have items: <address>:

	$results = json_decode($var, true);
	//$address = $results['varray'][0];

	//echo "<script type='text/javascript'>alert('111');</script>";
	mysqli_close($con);
?>

----Experiment2_2 Needs to be Graded </h3>
<div class="col-lg-4 " >
<div class="panel panel-default">
<div class="panel-heading">
Grade this experiment
</div>

<label>Score:</label>
<input name="score" type="text" cid="score" placeholder="Score">/25

<a type="submit" name="Submit" href="score2_1.php?deleteItem='.$row['login'].'">Submit Score</a>

</div>
</div>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-6">
<table id="mytab1"  class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>Current (A)</th>
<th>Voltage (V)</th>
<th>Calculated Voltage(V)</th>


</tr>
</thead>
<tbody>
<?php // here comes your delete query: use $_POST['deleteItem'] as your id
	require_once ('config.php');

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	$a = $_GET["deleteItem"];
	$message = "wrong answer";
	//echo "<script type='text/javascript'>alert('$a');</script>";

	$result = mysqli_query($con, "select * FROM exp2_2 WHERE id='$a'");
	$row = mysqli_fetch_array($result);
	$b = $row['member_id'];
	$member = mysqli_query($con, "SELECT * FROM members where member_id='$b'");
	$guy = mysqli_fetch_array($member);

	//$c= $row['json'];
	$var = $row['json'];

	//echo $var;

	//$restoredSession = JSON.parse($var);";

	// Now restoredSession variable contains the object that was saved
	// in localStorage
	//echo '$restoredSession';

	//$json = json_decode($string);
	//if you want to have items: <address>:

	$results = json_decode($var, true);
	//$address = $results['varray'][0];

	for ($i = 0; $i < 12; $i++) {
		echo "<tr><td><p style='background-color:#FFFF00'>";
		echo $results[0]['carray'][$i];
		echo "</p>";
		echo "</td><td><p style='background-color:#FFFF00'>";
		echo $results[1]['varray'][$i];
		echo "</p>";
		echo "</td><td><p style='background-color:#FFFF00'>";
		echo $results[2]['varray1'][$i];
		echo "</p></td></tr>	";
	}//echo "<script type='text/javascript'>alert('111');</script>";
	mysqli_close($con);
?>
</tbody>
</table>

</div>
<div class="col-lg-6">
<div class="plot" id="container_1" ></div>

</div>

</div>
<div class="col-lg-8">

<h4>Report 2:</h4>

<ul>

<li>
From the terminal voltage and the field resistance line on the plotted graph, predict what is the terminal voltage value to which the shunt machine should build up. Discuss your result.
											
</li>

</ul>
<p><b style="background-color:#FFFF00">											<?php
require_once ('config.php');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$a = $_GET["deleteItem"];
$message = "wrong answer";

$result = mysqli_query($con, "select * FROM exp2_2 WHERE id='$a'");
$row = mysqli_fetch_array($result);
$b = $row['member_id'];
$member = mysqli_query($con, "SELECT * FROM members where member_id='$b'");
$guy = mysqli_fetch_array($member);

$var = $row['json'];

$results = json_decode($var, true);
if ($results[3]['qarray'][0] == null) {echo "No Answer Yet!";
} else
	echo $results[3]['qarray'][0];

mysqli_close($con);
?></b></p>



</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script src="js/jquery-1.10.2.js"></script> <script src="js/jquery.bootstrap-autohidingnavbar.js"></script>

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
data :<?php // here comes your delete query: use $_POST['deleteItem'] as your id
	require_once ('config.php');

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	$a = $_GET["deleteItem"];
	$message = "wrong answer";
	//echo "<script type='text/javascript'>alert('$a');</script>";

	$result = mysqli_query($con, "select * FROM exp2_2 WHERE id='$a'");
	$row = mysqli_fetch_array($result);

	//$c= $row['json'];
	$var = $row['json'];

	//echo $var;

	//$restoredSession = JSON.parse($var);";

	// Now restoredSession variable contains the object that was saved
	// in localStorage
	//echo '$restoredSession';

	//$json = json_decode($string);
	//if you want to have items: <address>:

	$results = json_decode($var, true);
	//$address = $results['varray'][0];

	echo "[";
	for ($i = 0; $i <= 11; $i++) {
		if ($results[1]['varray'][$i] == null)
			break;
		else {
			echo "[";
			echo $results[0]['carray'][$i];
			echo ",";
			echo $results[1]['varray'][$i];
			echo "],";
		}
	}//echo "<script type='text/javascript'>alert('111');</script>";

	echo "]},{name : ";
	echo "'";
	echo "Calculated Voltage";
	echo "',";
echo "data : ";
	//varray1
	echo "[";
	for ($i = 0; $i <= 11; $i++) {
		if ($results[2]['varray1'][$i] == null)
			break;
		else {
			echo "[";
			echo $results[0]['carray'][$i];
			echo ",";
			echo $results[2]['varray1'][$i];
			echo "],";
		}
	}//echo "<script type='text/javascript'>alert('111');</script>";

		echo "]},";
	mysqli_close($con);
?>

	]}

	);
	});

</script>

<script type="text/javascript">
	function viewTable() {
		//myCurrent = []; //Clear the array
		//myVoltage = [];
		//mytable = [];

		var score = document.getElementById("score").value;

		if (confirm("Do you want to submit this score?")) {
			request.open("POST", "score1_1.php", true);

			request.setRequestHeader("Content-type", "application/json");

			request.send(str_json)
			console.log("sent" + str_json);
		} else {

		}

		//				alert(experiment1_1[0].varray[0]);
	};
</script>
</body>

</html>
