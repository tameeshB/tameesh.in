<?PHP
session_start();//authentication necessary but in this page might be slowing down the page requests
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
if(isset($_POST['tags'])){
	if($_POST['tags'] !=''){
		// add functions for evaluating tags
		$tags=explode(";",$_POST['tags']);
		$ntags=count($tags);
		foreach($tags as &$valuearr){if($valuearr!=''){//check for empty element
			$sqlne = "INSERT INTO `tameeshi_auth`.`tags` (`t_index`, `tag`, `url`) VALUES (NULL, '".$valuearr."', '".$_POST['url']."')";
		

		if ($resultnew=mysqli_query($con,$sqlne)){ }
			//also write to new tags table
			$sqlneew = "SELECT `n` FROM `tameeshi_auth`.`ntags` WHERE `tag`=".$valuearr;
		

		if ($resultneew=mysqli_query($con,$sqlneew)){ //there is a slight chance that the while loop might not run due to unavailability of rows
				 while ($rowew=mysqli_fetch_row($resultneew))
  					  {
  					  	 if(isset($rowew[0])){
  					  	 	if($rowew[0]!=''){
  					  	 		if($rowew[0]>0){
  					  	 			$newval=$rowew[0] +1 ;
  					  	 			$sqlquero = "UPDATE  `tameeshi_auth`.`posts` SET `n` =  '".$newval."' WHERE  `posts`.`tag` =".$valuearr.";	";
											if ($resultnew=mysqli_query($con,$sqlquero)){}//run sql command to update record to database
		

										
  					  	 		}
  					  	 	}
  					  	 } 
  					  	 if(!isset($rowew[0] || $rowew[0]=='' || $rowew[0]==0)){
  					  	 	if ($resultnewowaw=mysqli_query($con,"INSERT INTO `tameeshi_auth`.`ntags` (`tag`, `n`) VALUES ('".$valuearr."', '1')")){ }
  					  	 }


   	 
    					}//while loop ends here
		 }
		}}
	}
}
?>