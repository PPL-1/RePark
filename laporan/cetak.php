<?php
	include 'database.php';
	
	$koneksi 	= getConnection();
	$query 		= "SELECT * FROM Instansi";
	$result 	= getResultFromQuery($koneksi, $query);
	printResult($result);

?>