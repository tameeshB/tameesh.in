 <?php
include('../gen.php');
?>
 <h2 >Latest activity</h2><img id="xsloader" style="opacity:0" src="http://tameesh.in/477.gif" height="30px" width="30px"></img>
<?PHP

function month($a){ if($a==1){return 'Jan';}
						if($a==2){return 'Feb';}
						if($a==3){return 'March';}
						if($a==4){return 'April';}
						if($a==5){return 'May';}
						if($a==6){return 'June';}
						if($a==7){return 'July';}
						if($a==8){return 'August';}
						if($a==9){return 'September';}
						if($a==10){return 'October';}
						if($a==11){return 'November';}
						if($a==12){return 'December';}
						 }

             
function datefn($a){
            $afactten=$a%10;
            if($a<10 && $a>13){return "nd ";}
             elseif($afactten==1){return "st ";}
             elseif($afactten==2){return "nd ";}
             elseif($afactten==2){return "rd ";}
             else{return"th ";}
             }            
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM `posts` where 1 ORDER BY `index` DESC";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    
    	$file = file_get_contents('./'.$row[2].'/sum.txt', true);
    	
    	$date=$row[3]. datefn($row[3]) ." of ". month($row[4])." ".$row[5];
        printf ("<div class='panel panel-info'><div id='url' style='display:none'>%s</div><div id='long' style='display:none'>%s</div>
      <div class='panel-heading'><h4><b>%s<span class='badge'>%s</span></b></h4></div>
      <div id='pcontent' class='panel-body panel-body-info' ><b>%s</b>
	  </div>
	 </div>",$row[2],$row[9],$row[1],$date,$file);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>

     