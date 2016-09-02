
<html>
<head>
<title>
Webmail for tameesh.in
</title>
<?PHP
$authtrue=0;
session_start();
$con=mysqli_connect("localhost","tameeshi","Pswd4hosing.","tameeshi_auth");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT key FROM access where ip=".$_SERVER['REMOTE_ADDR'];

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      if($_SESSION['key']==$row[0]){ $authtrue=1; }
    }
  // Free result set
    if($authtrue==1) { echo "<script>window.location='//tameesh.in:2096';</script>" </head>
<body>
Redirecting to webmail...;}
   else{ echo '</head>
<body><font color="red"><h1>auth error</h1></font>'; }
  mysqli_free_result($result);
}

mysqli_close($con);

 
?>

</body>
</html>