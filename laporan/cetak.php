<?php

	ini_set('display_errors', 1);
function printLaporan($result)
{

	require_once('tcpdf/tcpdf.php');

	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('RePark');
	$pdf->SetTitle('Laporan Pengaduan');

	// set default header data
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
	$pdf->setFooterData(array(0,64,0), array(0,64,128));


	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set default font subsetting mode
	$pdf->setFontSubsetting(true);

	// Set font
	// dejavusans is a UTF-8 Unicode font, if you only need to
	// print standard ASCII chars, you can use core fonts like
	// helvetica or times to reduce file size.
	$pdf->SetFont('times', '', 12, '', true);



	// Add a page
	// This method has several options, check the source code documentation for more information.
	$pdf->AddPage();

	// set text shadow effect
	$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
	$html = '';
	while($row = $result->fetch_assoc()) {
		$judul 		= '<b>'.$row['Judul'].'</b><br>';
		$lokasi 	= 'Lokasi 	: '.$row['Lokasi'].'<br>';
		$nama 		= 'Nama 	: '.$row['Nama'].'<br>';
		$tanggal 	= 'Tanggal 	: '.$row['Tanggal'].'<br>';
		$instansi 	= 'Instansi : '.$row['Instansi'].'<br>';
		$telepon 	= 'Telepon 	: '.$row['Telepon'].'<br>';
		$isi 		= 'Isi 		: <br>'.$row['Isi'].'<br>';
		$status 	= 'Status 	: '.$row['Status'];
		$html = $judul.$lokasi.$nama.$tanggal.$instansi.$telepon.$isi.$status;
		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 1, 1, 0, true, '', true);
	}

	$pdf->Output('Laporan.pdf', 'I');
}

//'judull', 'lokasii', 'namaa', 'tanggall', 'instansii', 'issii', 'statuss'
//$judul, $lokasi, $nama, $tanggal, $instansi, $telepon, $isi, $status
?>