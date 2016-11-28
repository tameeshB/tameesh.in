<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

$(window).load(function(){
<?php
if(isset($_GET['name'])){
$file = fopen($_GET['name'].".txt","r");

while(! feof($file))
  {
 echo " window.open(".fgets($file).",'_blank');";
  }
//echo'});</script></head><body></body></html>';
fclose($file);
}
?>
});
</script>
</head>
<body>
	<?PHP 
		if(!isset($_GET['name'])){
			
			$valueder=array();$files = glob('*.txt');
			foreach ($files as &$valueder) {
			$fnamee=explode('.', $valueder);
			echo '<a href="index.php?name='.$fnamee[0].'">'.$valueder.'</a><br>';
			}

		}
	?>
</body></html>
