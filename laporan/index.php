<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	require ('cetak.php');
	
	$koneksi 	= getConnection();
	//$query 		= "INSERT INTO Instansi VALUES ('namaa', 'emaill', 'passwordd')";
	$query 		= "SELECT Judul, Lokasi, Nama, Tanggal, Instansi, Telepon, Status, Isi 
					FROM Pengaduan";
	$result 	= getResultFromQuery($koneksi, $query);
	//printResult($result,"Isi");
	
	printLaporan($result);
	
	closeConnection($koneksi);
?>