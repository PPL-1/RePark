<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$nama = $_POST['username'];
	$email = $_POST['email'];
	$paswot = $_POST['password'];


	$koneksi 	= getConnection();
	//$query 		= "UPDATE `Pengaduan` SET `Tanggal`='2015-02-26 00:00:01' WHERE (mod(Id,2) = 0)";
	$query 		= "INSERT INTO `Instansi`(`Username`, `Email`, `Password`) VALUES ('".$nama."' , '".$email."' , '".$paswot."')";
	InsertQuery($koneksi,$query);
	echo $query;
	closeConnection($koneksi);
	header('Location: readinstansi.php');
?>