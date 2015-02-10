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
	if($result->num_rows > 0)
	{
		printLaporan($result);
	}
	else
		echo "<script type='text/javascript'>alert('Data pengaduan tidak ditemukan. Periksa kembali input anda');</script>";
	
	closeConnection($koneksi);
?>