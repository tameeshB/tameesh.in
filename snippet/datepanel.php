 <?php
include('../gen.php');
?>
<?PHP

function montha($a){ if($a==1){return 'Jan';}
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

             
function datefna($a){
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

$sql = "SELECT `index`,`title`,`date`,`month`,`year`,`url` FROM `posts` where 1 ORDER BY `index` DESC";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    $yrvar=0;
    $movar=0;
  while ($row=mysqli_fetch_row($result))
    {      
      $da=$row[2] . datefna($row[2]) . montha($row[3]);

      if($row[4]!=$yrvar){//if for new year open
        if($yrvar==0){//latest year
          printf(' <button  type="button" class="btn btn-info btn-xs " data-toggle="collapse" data-target="#y%s">%s</button>
        <div id="y%s" class="collapse in">',$row[4],$row[4],$row[4]);}
        else{//not latest year
         printf ('</div> </div><br> <button  type="button" class="btn btn-info btn-xs " data-toggle="collapse" data-target="#y%s">%s</button>
        
        <div id="y%s" class="collapse">',$row[4],$row[4],$row[4]);} }
          $yrvar=$row[4];
      //month code
          if($movar==0){
              if($row[3]<7){
                printf ('<button  type="button" class="btn btn-link in" data-toggle="collapse" data-target="#y%sh1">&raquo;January-June</button>
                  &nbsp; <div id="y%sh1" class="collapse in">',$row[4],$row[4]);
              }else{
                printf ('<button  type="button" class="btn btn-link in" data-toggle="collapse" data-target="#y%sh2">&raquo;July-December</button>
                  &nbsp; <div id="y%sh2" class="collapse in">',$row[4],$row[4]);
              }
          }else{
            if($row[3]<7){
                printf ('</div><br><button  type="button" class="btn btn-link in" data-toggle="collapse" data-target="#y%sh1">&raquo;January-June</button>
                  &nbsp; <div id="y%sh1" class="collapse in">',$row[4],$row[4]);
              }else{
                printf ('</div><br><button  type="button" class="btn btn-link in" data-toggle="collapse" data-target="#y%sh2">&raquo;July-December</button>
                  &nbsp; <div id="y%sh2" class="collapse in">',$row[4],$row[4]);
              }
          }//closing of month groups
          //starting of posts
          printf('<button  type="button" data="%s" class="btn datepanelbtn btn-link btn-xs" style="">&nbsp;&nbsp;&nbsp;>%s?<br>{%s}</button><br>',$row[5],$row[1],$da);

      
    
          }
 echo '</div></div>';
     

    }
  // Free result set
  mysqli_free_result($result);


mysqli_close($con);
?>

     