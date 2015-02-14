<?php 

	$servername = "akhfa.in";
	$username = "laportaman";
	$password = "RePark";
	$dbname = "laportaman";

<<<<<<< HEAD
=======
	$idpengaduan = $_GET["idpengaduan"];
	$instansi = $_GET["instansi"];
	$aing =  $_GET['aing'];

>>>>>>> 8fd45e4cd168b7bfee389a8cc44383f359402f20

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection


	$sql = "UPDATE Pengaduan SET Status='Terkirim',Instansi='".$instansi."' WHERE Id=".$idpengaduan;

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
		echo ("<script type='text/javascript'>alert('Error cuk');</script>");
	}
	$conn->close();
<<<<<<< HEAD
	header('Location: message.php');
=======
	header('Location: message.php?username='.$aing);
>>>>>>> 8fd45e4cd168b7bfee389a8cc44383f359402f20

 ?>

 <script>

 </script>