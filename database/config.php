<?php
	$servername = "akhfa.in";
	$usernamedb	= "laportaman";
	$passworddb	= "RePark";
	$dbname		= "laportaman";

	/* Inisialisasi koneksi */

	//function test() {echo "test";}
	function getConnection()
	{
		global $servername, $usernamedb, $passworddb, $dbname;
		
		$conn 	= new mysqli($servername, $usernamedb, $passworddb, $dbname);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}
		else
			return $conn;
	}
	
	/* Insert data to database menggunakan query*/
	function insertQuery($connection, $query)
	{
		if ($connection->query($query) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $query . "<br>" . $connection->error;
		}
	}

	/* Untuk mengambil data dari database. Untuk aksesnya lihat di fungsi printResult */
	function getResultFromQuery($connection, $input_query)
	{
		//echo $input_query;
		$result = $connection->query($input_query);
		if($result->num_rows > 0)
		{
			return $result;
		}
	}

	/* Mengambil data menggunakan kolom tertentu from tabel tertentu */
	function getSelectFrom($connection, $columnSelection, $tabelName)
	{
		$query 	= "SELECT ".$columnSelection." FROM ".$tabelName;
		$result = $connection -> query($query);
		if($result->num_rows > 0)
		{
			return $result;
		}
		else
		{
			echo "no result";
		}
	}

	/* Close connection. Wajib setiap database akan di close */
	function closeConnection($connection)
	{
		$connection -> close();
	}

	/* cara menampilkan hasil dari database, sementara cuma bisa 1 kolom */
	function printResult($result, $kolom)
	{
		while($row = $result->fetch_assoc()) {
			echo $row[$kolom]."<br>";
		}
	}
?>