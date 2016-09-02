<?PHP
date_default_timezone_set('Asia/Calcutta');
$frstname = explode(' ', $_POST['name']);
echo "Thanks ".$frstname[0].",<br>I'll get back to you on your e-mail asap<br>";
echo $_POST['email'];
$name = preg_replace('/[^A-Za-z0-9\-\(\) ]/', '%', $_POST['name']);
$email = preg_replace('/[^A-Za-z0-9\-\(\) @_.]/', '%', $_POST['email']);
$message = preg_replace('/[^A-Za-z0-9\-\(\) @_.+]/', '%', $_POST['message']);
$date=date('d_F_Y_h_i_s_A');
//append real email to a txt file
include('gen.php');
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sqlnew = "INSERT INTO `tameeshi_auth`.`messages` (`id`, `name`, `email`, `dateandtime`,`message`) VALUES (NULL, '".$name."', '".$email."', '".$date."','".$message."')";

		if ($resultnew=mysqli_query($con,$sqlnew)){}//run sql command to add record to database
	$to = "tameeshb@gmail.com";
	$subject = "Message on website from ".$name;
	$txt = " ".$name."\n Email:".$email."\n Sent a message ".$message."\n IP".$_SERVER['REMOTE_ADDR'];
	$headers = "From: messenger@tameesh.in" . "\r\n" .
	"CC: tameesh.biswas@hotmail.com";

	mail($to,$subject,$txt,$headers);	
		
?>