<?php
	ini_set('display_errors', 1);
	require 'mail.php';
	sendMail('akhmadfakhoni@gmail.com', 'Taman oke', 'from local', 'admin');
	echo 'email sent';
?> 
