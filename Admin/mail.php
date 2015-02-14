<?php
	ini_set('display_errors', 1);
	function sendMail($alamat, $judul, $isi, $namaPengirim)
	{
		$to 		= $alamat;
		$subject 	= $judul;
		$message	= $isi;
		$from		= 'From: '.$namaPengirim.'<reparkyou@gmail.com>';
		mail($to, $subject, $message, $from);
	}

?>
