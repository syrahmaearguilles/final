<?php
	session_start();
	if(!isset($_SESSION['userid']) && $_SESSION['userid'] == ""){
		header("location:redirecting2");		
	}
	
?>