<?php 
	// functions.php
	require("/home/gittkaus/config.php");
	
	// et saab kasutada $_SESSION muutujaid
	// k�igis failides mis on selle failiga seotud
	session_start(); 
	
	/* �HENDUS */
	$database = "if16_gittkaus_3";
	$mysqli = new mysqli($serverHost, $serverUsername,  $serverPassword, $database);
	
?>