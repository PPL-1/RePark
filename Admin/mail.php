<?php
	function sendMail($alamat, $judul, $isi, $namaPengirim, $asalEmail)
	{
		$to 		= $alamat;
		$subject 	= $judul;
		$message	= $isi;
		$from		= 'From: '.$namaPengirim.' <$asalEmail>';
		mail($to, $subject, $message, $from);
	}

	sendMail('akhmadfakhoni@gmail.com', 'Laporan Taman Jomblo', 'Banyak orang Pacaran', 'Akhmad Fakhoni', 'afld_kebumen@yahoo.co.id');
	echo 'oke';
?>