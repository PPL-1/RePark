<?php
	ini_set('display_errors', 1);
	
	if(!isset($_COOKIE["Username"])) {
    	header('Location: ../Instansi/index.php');
	}
	
	require '../database/config.php';
	require ('cetak.php');
	$startdate 	= $_GET['startdate'];
	$finishdate = $_GET['finishdate'];

	if(isset($_GET['instansi']) && !empty($_GET['instansi']))
	{
		$instansi       = $_GET['instansi'];
		printLaporan($startdate, $finishdate, $instansi);
	}
	else
	{
		printLaporan($startdate, $finishdate);
	}
	
	
?>
