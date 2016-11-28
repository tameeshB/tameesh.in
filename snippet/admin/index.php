<?php
session_start();
if(!isset($_SESSION['key'])){exit();}
include('../../gen.php');
$con = mysqli_connect($servername,$username,$password,$dbname);
$ipaddr=$_SERVER['REMOTE_ADDR'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT `key`,`id` FROM `access` WHERE (`ip`='".$ipaddr."' AND `en`= 1 ) ORDER BY `id` DESC LIMIT 1";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    { $key=$row[0];
   	 
    }
   		if($_SESSION['key']!=$key){
	exit();
  }

}

?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
<h1>Admin panel</h1><br><br><br>
	<div class="row">
		<a href="new.php" class="btn btn-info">New Post</a><br><br>
		<a href="edit.php" class="btn btn-info">Edit existing Post</a><br>
	</div>
</div>	
</body>
</html>