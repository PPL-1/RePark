<?php
	function sendMail($alamat, $judul, $isi, $namaPengirim, $asalEmail)
	{
		$to 		= $alamat;
		$subject 	= $judul;
		$message	= $isi;
		$from		= 'From: '.$namaPengirim.'<'.$asalEmail.'>';
		mail($to, $subject, $message, $from);
	}

?>
