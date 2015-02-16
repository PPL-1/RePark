<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$idpengaduan = $_POST['idpengaduan'];
	$isi = $_POST['jawaban'];


	$koneksi 	= getConnection();
	//$query 		= "UPDATE `Pengaduan` SET `Tanggal`='2015-02-26 00:00:01' WHERE (mod(Id,2) = 0)";
	$query 		= "INSERT INTO `jawaban`(`Id Pengaduan`, `Isi`) VALUES ('".$idpengaduan."' , '".$isi."')";
	InsertQuery($koneksi,$query);
	echo $query;
	$query = "UPDATE Pengaduan SET Status='Terjawab' WHERE Id=".$idpengaduan;
	echo $query;	
	InsertQuery($koneksi,$query);
	closeConnection($koneksi);
	header('Location: message.php');
?>