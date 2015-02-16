<?php 

      require 'database/config.php';

      $conn = getConnection();
      
	$sql = "SELECT * FROM Pengaduan LIMIT ".$n;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<div class=\"aduan\"><h6>";
        	$time = strtotime($row["Tanggal"]);
            $myFormatForView = date("l jS F Y", $time);
            echo $myFormatForView." | ".$row['Lokasi']."</h6>
                                 <a style=\"text-decoration:none\"href=\"detailpengaduan.php?id=".$row['Id']."\"><h3>".$row['Judul']."</h3></a>
                                <p>".implode(' ', array_slice(explode(' ', $row['Isi']), 0, 20))."....."."</p>
                                <br>
                                <h6>Oleh : ".$row["Nama"]."</h6>
                            </div>";
	    }
	} else {

	}
            $n = $n+5;
            echo "<div style=\"text-align:center;margin:1em;\"><a onclick=\"showpengaduan(".$n.")\"><input class=\"Selanjutnya\"type=\"submit\" value=\"Selanjutnya\"></a></div>";

	$conn->close();
 ?>
