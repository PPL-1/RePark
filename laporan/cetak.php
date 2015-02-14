<?php

	ini_set('display_errors', 1);
function printLaporan($result)
{

	require_once('tcpdf/tcpdf.php');

	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	$pdf->SetHeaderData('', 0, 'Dinas Pemakaman dan Pertamanan', 'Kota Bandung', array(0,64,255), array(0,64,128));
	$pdf->setFooterData(array(0,64,0), array(0,64,128));

	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	//Set Margin
	$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	$pdf->SetAutoPageBreak(TRUE, 13);

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	$pdf->setFontSubsetting(true);

	$pdf->SetFont('times', '', 12, '', true);

	$pdf->AddPage();

	$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

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

?>