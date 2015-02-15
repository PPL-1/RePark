<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$nama = $_POST['username'];
	$email = $_POST['email'];
	$paswot = $_POST['password'];


	$koneksi 	= getConnection();
	$query = "UPDATE `Instansi` SET `Username`='".$nama."',`Email`='".$email."',`Password`='".$paswot."' WHERE Username='".$nama."'";
	InsertQuery($koneksi,$query);
	echo $query;
	closeConnection($koneksi);
	header('Location: readinstansi.php');
?>