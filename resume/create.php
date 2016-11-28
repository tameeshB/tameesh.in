<?PHP
	if(isset($_GET['name'])){
		ECHO $_GET['name'];
		$txtindexfile = fopen($_GET['name'].'.txt', "w") or die("Unable to open file(txtindex)!");
		for($i=1;$i<=$_POST['nam'];$i++){
			$texto= $_POST['ur'.$i];
			
			$myfileo = file_put_contents($_GET['name'].'.txt', $texto.PHP_EOL , FILE_APPEND);

				
				
		}fclose($txtindexfile);
	}
?>