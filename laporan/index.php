<?php
	ini_set('display_errors', 1);
	require '../database/config.php';
	require ('cetak.php');
	
	$koneksi 	= getConnection();
	//$query 		= "INSERT INTO Instansi VALUES ('namaa', 'emaill', 'passwordd')";
	$query 		= "SELECT Judul, Lokasi, Nama, Tanggal, Instansi, Telepon, Status, Isi 
					FROM Pengaduan LIMIT 5";
	$result 	= getResultFromQuery($koneksi, $query);
	//printResult($result,"Isi");

	$pdf = new PDF();
	$pdf->AliasNbPages();
	//$pdf->Judul();
	$pdf->AddPage();

	while($row = $result->fetch_assoc()) {
		$pdf->SetFont('Times','B',12);
		$pdf->CellFitScale(0,6,$row['Judul'],1,1);

		$pdf->SetFont('Times','',12);
		$pdf->Cell(0,6,'Lokasi		: '.$row['Lokasi'],1,1);
		$pdf->Cell(0,6,'Nama		: '.$row['Nama'],1,1);
		$pdf->Cell(0,6,'Tanggal		: '.$row['Tanggal'],0,1);
		$pdf->Cell(0,6,'Instansi	: '.$row['Instansi'],0,1);
		$pdf->Cell(0,6,'Telepon		: '.$row['Telepon'],0,1);
		$pdf->CellFitScale(0,6,'Isi 		: <br>'.$row['Isi'],1,1);
		$pdf->Cell(0,6,'Status 		: '.$row['Status'],0,1);
		$pdf->Ln();
		$pdf->Ln();
	}

	
	$pdf->Output();
	
	closeConnection($koneksi);
?>