<?php 

	$servername = "akhfa.in";
	$usernamedb = "laportaman";
	$passworddb = "RePark";
	$dbname = "laportaman";

	$query = $_GET["query"];


	// Create connection
	$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM Pengaduan WHERE Judul LIKE '%".$query."%' LIMIT 5";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<div class=\"aduan\"><h6>";
        	$time = strtotime($row["Tanggal"]);
            $myFormatForView = date("l jS F Y", $time);
            echo $myFormatForView." | ".$row['Lokasi']."</h6>
                                <h3>".$row['Judul']."</h3>
                                <p>".implode(' ', array_slice(explode(' ', $row['Isi']), 0, 20))."....."."</p>
                                <br>
                                <h6>Oleh : ".$row["Nama"]."</h6>
                            </div>";
	    }
	} else {
		echo "<p>Tidak ada hasil yang ditemukan</p>";
	}
            echo "<div style=\"text-align:center;margin:1em;\"><a onclick=\"showpengaduan(10)\"><input class=\"Selanjutnya\"type=\"submit\" value=\"Selanjutnya\"></a></div>";

	$conn->close();
 ?>