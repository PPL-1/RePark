<?php 

	require '../database/config.php';


      $conn = getConnection();


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