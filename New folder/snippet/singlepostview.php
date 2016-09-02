<?PHP	
	include('../gen.php');
	if(isset($_GET['ref'])){
		//get data and echo
		$p = preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $_GET['ref']);
		$file = file_get_contents('./'.$p.'/index.txt', true);
	}
	if(isset($_GET['id'])){
		//database query to get url and then get content!
		$q = preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $_GET['id']);
		$con = mysqli_connect($servername,$username,$password,$dbname);

			if (mysqli_connect_errno())
  			{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}

			$sql = "SELECT `url` FROM `posts` where `index`=".$q;

			if ($result=mysqli_query($con,$sql))
  			{
  				// Fetch one and one row
  					while ($row=mysqli_fetch_row($result))
    			{    	
    				$file = file_get_contents('./'.$row[0].'/index.txt', true);
            	}
  				// Free result set
  			mysqli_free_result($result);
			}

	mysqli_close($con);

	}
echo $file;

?>
