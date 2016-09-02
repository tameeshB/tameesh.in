<?PHP
date_default_timezone_set('Asia/Calcutta');
session_start();//authentication necessary
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
//end of authentification
if(isset($_GET['action'])){
	if($_GET['action']=='new'){//if new post
		$indexcontent="<?PHP include('../index.php?main=".$_POST['url']."'); ?>";	
		
		$sqlnew = "INSERT INTO `tameeshi_auth`.`posts` (`index`, `title`, `url`, `date`, `month`, `year`, `time`, `location`, `hpage`, `long`) VALUES (NULL, '".$_POST['title']."', '".$_POST['url']."', '".$_POST['date']."', '".$_POST['month']."', '".$_POST['year']."', '".$_POST['time']."', '', '".$_POST['hpage']."', '".$_POST['long']."')";

		if ($resultnew=mysqli_query($con,$sqlnew)){}//run sql command to add record to database
		
		mkdir('../'.$_POST['url'], 0755, true);
		echo $_POST['index'];
		$txtindexfile = fopen('../'.$_POST['url']."/index.txt", "w") or die("Unable to open file(txtindex)!");//text index
		fwrite($txtindexfile, $_POST['indextxt']);
		fclose($txtindexfile);
		$phpindexfile = fopen('../'.$_POST['url']."/index.php", "w") or die("Unable to open file(phpindex)!");//php index default
		fwrite($phpindexfile, $indexcontent);
		fclose($phpindexfile);
		$txtsumfile = fopen('../'.$_POST['url']."/sum.txt", "w") or die("Unable to open file(txtsum)!");//text summary
		fwrite($txtsumfile, $_POST['sumtxt']);
		fclose($txtsumfile);


	}else if($_GET['action']=='edit'){
		//if old post being edited
		// add functions for editing  
		//add function to backup DONE!
		$sqlwe = "SELECT `url` FROM `posts` WHERE `index`=".$_POST['index'];//lookup for original url

		if ($resulte=mysqli_query($con,$sqlwe))
  		{
  			// Fetch one and one row
    		while ($rowe=mysqli_fetch_row($resulte))
    		{ $uri=$rowe[0];
   	 
    		}
   			

		}
		if($_POST['url']!=$uri){rename('../'.$uri,'../'.$_POST['url']);}//rename directories
																//update records
		$sqlquer = "UPDATE  `tameeshi_auth`.`posts` SET  
					`title` =  '".$_POST['title']."',
					`url` =  '".$_POST['url']."',
					`date` =  '".$_POST['date']."',
					`month` =  '".$_POST['month']."',
					`year` =  '".$_POST['year']."',
					`time` =  '".$_POST['time']."',
					`long` =  '".$_POST['long']."',
					`hpage` =  '".$_POST['hpage']."'
					 WHERE  `posts`.`index` =".$_POST['index'].";
					";
		if ($resultnew=mysqli_query($con,$sqlquer)){}//run sql command to update record to database
		
		
		$indexcontent="<?PHP include('../index.php?main=".$_POST['url']."'); ?>";//content to put in index.php add meta tags later for seo
		rename ('../'.$_POST['url']."/index.txt",'../'.$_POST['url']."/index_edit_at".date('d_F_Y_h_i_s_A').".txt");//rename all files for backup
		rename ('../'.$_POST['url']."/sum.txt",'../'.$_POST['url']."/sum_edit_at".date('d_F_Y_h_i_s_A').".txt");
		rename ('../'.$_POST['url']."/index.php",'../'.$_POST['url']."/php_edit_at".date('d_F_Y_h_i_s_A').".txt");


		

		//fill data into all files

		$txtindexfile = fopen('../'.$_POST['url']."/index.txt", "w") or die("Unable to open file(txtindex)!");//text index
		fwrite($txtindexfile, $_POST['indextxt']);
		fclose($txtindexfile);
		$phpindexfile = fopen('../'.$_POST['url']."/index.php", "w") or die("Unable to open file(phpindex)!");//php index default
		fwrite($phpindexfile, $indexcontent);
		fclose($phpindexfile);
		$txtsumfile = fopen('../'.$_POST['url']."/sum.txt", "w") or die("Unable to open file(txtsum)!");//text summary
		fwrite($txtsumfile, $_POST['sumtxt']);
		fclose($txtsumfile);
	}else{exit();}


}//action is set


else{exit();}
include('addtags.php');//to add tags
?>