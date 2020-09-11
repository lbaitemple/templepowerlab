<!--?php
require_once ('config.php');
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM members WHERE login=$row['login']");

mysqli_close($con);
header("location: students.php");
header("Refresh:0");
?-->
<?php
//header("location: students.php");
//echo $_GET["deleteItem"];

  // here comes your delete query: use $_POST['deleteItem'] as your id
  require_once ('config.php');
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	//Select database
	$db = mysql_select_db(DB_DATABASE);
	
$a=$_GET["deleteItem"];
//$message = "wrong answer";
//echo "<script type='text/javascript'>alert('$a');</script>";

mysql_query("DELETE FROM members WHERE login='$a'");
//echo "<script type='text/javascript'>alert('111');</script>";
mysql_close($link);

 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=students.php">';    
    exit; 
?>
