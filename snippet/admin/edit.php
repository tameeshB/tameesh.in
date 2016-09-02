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
<h1>Select post to edit</h1>
  <div class="row">
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
$sqli = "SELECT `title`,`url` FROM `posts` ORDER BY `index` DESC";

if ($resulti=mysqli_query($con,$sqli))
  {
  // Fetch one and one row
    while ($rowi=mysqli_fetch_row($resulti))
    { printf('<a href="new.php?edit=%s" class="btn btn-info">%s</a><br><br>',$rowi[1],$rowi[0]);
     
    }
  if($_SESSION['key']!=$key){
   exit();
  }

}

?>



    
  </div>
</div>  
</body>
</html>