<?php 

if(!isset($_COOKIE["Username"])) {
    header('Location: index.php');
} else {
    $pengguna=$_COOKIE["Username"];
}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "laportaman";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM pengaduan, instansi WHERE instansi.Username = '".$pengguna."' AND instansi.Username=pengaduan.Instansi ORDER BY Tanggal DESC LIMIT 0,30";
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
	    	echo " <a onclick=\"showpengaduan(".$row["Id"].")\"><li><span class=\"from\"><span class=\"glyphicons star\"><i></i></span>".$row["Nama"]."</span><span class=\"title\">".$status.$row["Judul"]."</span><span class=\"date\"><b>".$row["Tanggal"]."</b></span></li></a>";	    	
	    }
	} else {
		echo ("<script type='text/javascript'>".$sql."</script>");
	}
	$conn->close();
 ?>