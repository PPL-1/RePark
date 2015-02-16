<?php 

	$servername = "akhfa.in";
	$username = "laportaman";
	$password = "RePark";
	$dbname = "laportaman";



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
	header('Location: message.php');

 ?>

 <script>

 </script>