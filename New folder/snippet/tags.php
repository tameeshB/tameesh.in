 <?php
include('../gen.php');

          
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sqlq = "SELECT `tag`,`n` FROM `ntags` where 1 ORDER BY `n`";

if ($resultq=mysqli_query($con,$sqlq))
  {
  // Fetch one and one row
    while ($rowq=mysqli_fetch_row($resultq))
    { if($rowq[0]!=''){
      printf('<button  type="button" data="%s" class="btn tagbtn btn-link btn-block" >&raquo;%s<span class="badge" style="float:right">%s</span></button>',$rowq[0],$rowq[0],$rowq[1]);
    }
   
    }

      
    }
  // Free result set
   
  mysqli_free_result($resultq);


mysqli_close($con);
?>