<?php
include('../gen.php');
$link=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query="SELECT `t_index`,`tag`,`index` FROM `tags` ORDER BY t_index";
$result = mysqli_query($link, $query);

	echo  'tag index     |   tag name  | post index  <br>';
   while($row = $result->fetch_assoc()){
    echo $row['t_index'].' | '.$row['tag'].' | '.$row['index']. '<br />';
}
//mysqli_free_result($result);

/* close connection */
mysqli_close($link);
?>