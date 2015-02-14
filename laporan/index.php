<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	require ('cetak.php');
	$startdate = $_GET['startdate'];
	$finishdate = $_GET['finishdate'];

	$koneksi 	= getConnection();
	//$query 		= "UPDATE `Pengaduan` SET `Tanggal`='2015-02-26 00:00:01' WHERE (mod(Id,2) = 0)";
	$query 		= "SELECT Judul, Lokasi, Nama, Tanggal, Instansi, Telepon, Status, Isi 
					FROM Pengaduan  WHERE Tanggal BETWEEN '".$startdate."' AND '".$finishdate."'";
	$result 	= getResultFromQuery($koneksi, $query);

	if($result->num_rows > 0)
	{
		printLaporan($result);
	}
	else
		echo "<script type='text/javascript'>alert('Data pengaduan tidak ditemukan. Periksa kembali input anda');</script>";
	closeConnection($koneksi);
?>