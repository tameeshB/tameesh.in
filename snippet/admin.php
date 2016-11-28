<?php
if(isset($_GET['p'])){
$parsedurl = preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $_GET['p']);}
session_start();
$ipaddr=$_SERVER['REMOTE_ADDR'];
echo '<h1>IP:'.$ipaddr.'</h1>';
include('../gen.php');
$con = mysqli_connect($servername,$username,$password,$dbname);

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
   	  $idkey=$row[1];
    }
   		
  }
  if(isset($_POST['otp'])){
	if($_POST['otp']==$key){$_SESSION['key']=$key;header('Location: admin/index.php');
	$sqlou = "UPDATE `access` SET  `en` =  '0' WHERE (`id` < ".$idkey." AND `perma`=0)";
	if ($resultou=mysqli_query($con,$sqlou)){}
	exit();}
}
  
    if(isset($_SESSION['key'])){
	if($_SESSION['key']==$key){
	header('Location: admin/index.php');exit();
	}else{$_SESSION['key']=null;}
}
  
   
  if(isset($parsedurl)){
if($parsedurl=='s' ){
	$otp=rand(2664,9688);
	
	$sqlo = "INSERT INTO `access` (`id`, `ip`, `key`) VALUES (NULL, '".$ipaddr."','".$otp."');";

	if ($resulto=mysqli_query($con,$sqlo)){}
	$to = "tameeshb@gmail.com";
	$subject = "OTP";
	$txt = " ".$otp." from ".$ipaddr;
	$headers = "From: me@tameesh.in" . "\r\n" .
	"CC: tameesh.biswas@hotmail.com";

	mail($to,$subject,$txt,$headers);}
if($parsedurl=='l' && isset($parsedurl)){
echo'<form method="post" action="admin.php"><input type="password" name="otp"></input><input type="submit"></input></form>';
}
}
mysqli_free_result($result);


mysqli_close($con);
?>