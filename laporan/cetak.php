<?php
	include '../database/config.php';
	
	$koneksi 	= getConnection();
	//$query 		= "INSERT INTO Instansi VALUES ('namaa', 'emaill', 'passwordd')";
	$result 	= getSelectFrom($koneksi, "*", "Pengaduan");
	printResult($result,"Nama");
	closeConnection($koneksi);

?>