<?php 

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

	$sql = "SELECT * FROM Pengaduan LIMIT 0,30";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	if ($row["Status"]=="Pending")
	    	{
	    		$status = "<span class=\"label label-warning\">Pending</span>";
	    	}
	    	if ($row["Status"]=="Terkirim")
	    	{
	    		$status = "<span class=\"label label-info\">Terkirim</span>";
	    	}
	    	if ($row["Status"]=="Terjawab")
	    	{
	    		$status = "<span class=\"label label-success\">Terjawab</span>";
	    	}
<<<<<<< HEAD
	    	echo " <a onclick=\"showpengaduan(".$row["Id"].")\"><li><span class=\"from\"><span class=\"glyphicons star\"><i></i></span>".$row["Nama"]."</span><span class=\"title\">".$status.$row["Judul"]."</span><span class=\"date\"><b>".$row["Tanggal"]."</b></span></li></a>";
=======
	    	echo " <a onclick=\"showPengaduan(".$row["Id"].",'".$aing."')\"><li><span class=\"from\"><span class=\"glyphicons star\"><i></i></span>".$row["Nama"]."</span><span class=\"title\">".$status.$row["Judul"]."</span><span class=\"date\"><b>".$row["Tanggal"]."</b></span></li></a>";
>>>>>>> 8fd45e4cd168b7bfee389a8cc44383f359402f20
	    }
	} else {
		echo ("<script type='text/javascript'>alert('Error cuk');</script>");
	}
	$conn->close();
 ?>