<?php
	$judul = $_POST["judul"];
	$isi = $_POST["isi"];
	$namaPengirim = $_POST["namapengirim"];
	$asalEmail = 'adminrepark@gmail.com';
	$idpengaduan = $_POST["idpengaduan"];
	$instansi = $_POST["instansi"];

		$servername = "akhfa.in";
		$username = "laportaman";
		$password = "RePark";
		$dbname = "laportaman";


		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT Email FROM Instansi WHERE Username='".$instansi."'";
		echo $sql;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			$alamat = $row["Email"];
			}		    	
		} else {
			echo ("<script type='text/javascript'>alert('Error cuk');</script>");
		}

		$conn->close();
		$to 		= $alamat;
		echo "alamat <p>".$alamat."</p>";
		$subject 	= $judul;
		echo "subject <p>".$subject."</p>";
		$message	= $isi;
		echo "isi <p>".$isi."</p>";
		$from		= 'From: '.$namaPengirim.' <reparkyou@gmail.com>';
		echo "from <p>".$from."</p>";;
		mail($to, $subject, $message, $from);
		echo "Udah";
		require "redirectpengaduan.php";
?>
