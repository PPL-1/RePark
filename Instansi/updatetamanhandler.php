<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	$namataman = $_POST['namataman'];
	$alamattaman = $_POST['alamattaman'];
	$id = $_POST['id'];

	$koneksi 	= getConnection();
	//$query 		= "UPDATE `Pengaduan` SET `Tanggal`='2015-02-26 00:00:01' WHERE (mod(Id,2) = 0)";
	$query 		= "UPDATE `Taman` SET `NamaTaman`='".$namataman."',`Alamat`='".$alamattaman."' WHERE Id=".$id;
	echo $query;
	InsertQuery($koneksi,$query);
	closeConnection($koneksi);
	header('Location: readtaman.php');
?>