<?php	
	if(preg_match("/config.php/", $_SERVER['PHP_SELF'])){
		header("Location: index.php");
		die;
	}		
	$host = 'localhost'; 				
	$dbname = 'kelas_sig';			
	$user = 'root';					
	$pass = '';			
	ini_set("display_errors", "0");
?>