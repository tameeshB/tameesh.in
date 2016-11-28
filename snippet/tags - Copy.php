 <?php
include('../gen.php');
?>
 
<?PHP
          
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT `tag`,`url` FROM `tags` where 1 ORDER BY `tag`";
$titlearr=array();
$titlenum=array();

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    { $sizeo=count($titlearr);
      if($sizeo==0){$titlearr[0]=$row[0];$titlenum[0]=1;}else{
        if($row[0]==$titlearr[$sizeo-1]){$titlenum[$sizeo-1]++;}else{
          $titlearr[$sizeo]=$row[0];$titlenum[$sizeo]=1;
        }
      }
    }

      
    }
  // Free result set
   //echo $sizeo;
   for($w=0;$w<$sizeo;$w++){
    printf('<button  type="button" data="%s" class="btn tagbtn btn-link btn-block" >&raquo;%s<span class="badge" style="float:right">%s</span></button>',$titlearr[$w],$titlearr[$w],$titlenum[$w]);
   }
  mysqli_free_result($result);


mysqli_close($con);
?>