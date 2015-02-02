<?php
	include '../database/config.php';
	
	$koneksi 	= getConnection();
	$query 		= "SELECT * FROM Instansi";
	$result 	= getResultFromQuery($koneksi, $query);
	printResult($result);

?>