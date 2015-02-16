<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	require ('cetak.php');
	$startdate 	= $_GET['startdate'];
	$finishdate = $_GET['finishdate'];
	$instansi 	= $_GET['instansi'];

	if($instansi == '')
	{
		printLaporan($startdate, $finishdate);
	}
	else
	{
		printLaporan($startdate, $finishdate, $instansi);
	}
	
	
?>