<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$nama = $_POST['username'];


	$koneksi 	= getConnection();
	$query = "DELETE FROM `Instansi` WHERE Username='".$nama."'";
	InsertQuery($koneksi,$query);
	echo $query;
	closeConnection($koneksi);
	header('Location: readinstansi.php');
?>