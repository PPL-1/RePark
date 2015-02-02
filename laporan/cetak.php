<?php
	include '../database/config.php';
	
	$koneksi 	= getConnection();
	$query 		= "SELECT DISTINCT * FROM Pengaduan";
	$kolom 		= "*";
	$tabel		= "Instansi";
	//$result 	= getResultFromQuery($koneksi, $query);
	$result 	= getSelectFrom($koneksi, "*", "Pengaduan");
	printResult($result,"Isi");

?>