<?php 
	
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	function debug($val) {
		echo '<pre>';
		var_dump($val);
		echo '</pre>';
		exit;
	}	

?>