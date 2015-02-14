<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	require ('cetak.php');
	
	$koneksi 	= getConnection();
	
	$query 		= "SELECT Judul, Lokasi, Nama, Tanggal, Instansi, Telepon, Status, Isi 
					FROM Pengaduan LIMIT 5";
	$result 	= getResultFromQuery($koneksi, $query);

	if($result->num_rows > 0)
	{
		printLaporan($result);
	}
	else
		echo "<script type='text/javascript'>alert('Data pengaduan tidak ditemukan. Periksa kembali input anda');</script>";
	closeConnection($koneksi);
?>