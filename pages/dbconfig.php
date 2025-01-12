<?php
	
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "fd_mgmt";
	
	try{
		
		$con = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}