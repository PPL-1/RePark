<?php
	$judul = $_POST["judul"];
	$isi = $_POST["isi"];
	$namaPengirim = $_POST["namapengirim"];
	$asalEmail = "adminrepark@gmail.com";
	$idpengaduan = $_POST["idpengaduan"];
	$instansi = $_POST["instansi"];
	echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<title>Document</title>
</head>
<body>
	<h2>
	echo \"Judul : \".$judul;
</h2>
<h2>
	echo \"Isi : \".$isi;
</h2>
<h2>
	echo \"namaPengirim : \".$namaPengirim;
</h2>
<h2>
	echo \"idpengaduan : \".$idpengaduan;
</h2>
<h2>
	echo \"Instansi : \".$instansi;
</h2>
</body>
</html>";
?>
