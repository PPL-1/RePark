<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$idpengaduan = $_POST['idpengaduan'];
	$isi = $_POST['jawaban'];


	$koneksi 	= getConnection();
	
	$query 		= "INSERT INTO `Jawaban`(`Id Pengaduan`, `Tanngal`, `Isi`) VALUES ('".$idpengaduan."' , CURRENT_TIMESTAMP, '".$isi."')";
	InsertQuery($koneksi,$query);
	echo $query;
	$query = "UPDATE Pengaduan SET Status='Terjawab' WHERE Id=".$idpengaduan;
	echo $query;	
	InsertQuery($koneksi,$query);
	closeConnection($koneksi);
	header('Location: message.php');
?>