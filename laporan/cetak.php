<?php
	require '../fpdf/fpdf.php';
	
	// $pdf = new FPDF();
	// $pdf->AddPage();
	// $pdf->SetFont('Arial','B',10);
	// //$pdf->Cell(40,5,'Hello World!',1,1,R);
	// //$pdf->Ln();
	// setFooter($pdf);
	// //$pdf->Cell(100,200,'Hello World!');
	// $pdf->Output();

	// function setFooter($pdf)
	// {
	// 	$pdf->SetY(266);
	// 	$pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'R');
	// }

	function Header($pdf)
	{
	    $title = oke;

	    // Arial bold 15
	    $pdf->SetFont('Arial','B',15);
	    // Calculate width of title and position
	    $w = $pdf->GetStringWidth($title)+6;
	    $pdf->SetX((210-$w)/2);
	    // Colors of frame, background and text
	    $pdf->SetDrawColor(0,80,180);
	    $pdf->SetFillColor(230,230,0);
	    $pdf->SetTextColor(220,50,50);
	    // Thickness of frame (1 mm)
	    $pdf->SetLineWidth(1);
	    // Title
	    $pdf->Cell($w,9,$title,1,1,'C',true);
	    // Line break
	    $pdf->Ln(10);
	}

	function Footer($pdf)
	{
	    // Position at 1.5 cm from bottom
	    $pdf->SetY(-15);
	    // Arial italic 8
	    $pdf->SetFont('Arial','I',8);
	    // Text color in gray
	    $pdf->SetTextColor(128);
	    // Page number
	    $pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');
	}

	function ChapterTitle($pdf, $num, $label)
	{
	    // Arial 12
	    $pdf->SetFont('Arial','',12);
	    // Background color
	    $pdf->SetFillColor(200,220,255);
	    // Title
	    $pdf->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
	    // Line break
	    $pdf->Ln(4);
	}

	function ChapterBody($pdf, $file)
	{
	    // Read text file
	    $txt = file_get_contents($file);
	    // Times 12
	    $pdf->SetFont('Times','',12);
	    // Output justified text
	    $pdf->MultiCell(0,5,$txt);
	    // Line break
	    $pdf->Ln();
	    // Mention in italics
	    $pdf->SetFont('','I');
	    $pdf->Cell(0,5,'(end of excerpt)');
	}

	function PrintChapter($pdf, $num, $title, $file)
	{
	    $pdf->AddPage();
	    ChapterTitle($pdf, $num,$title);
	    ChapterBody($pdf, $file);
	}

	$pdf = new FPDF();
	$title = '20000 Leagues Under the Seas';
	$pdf->SetTitle($title);
	$pdf->SetAuthor('Jules Verne');
	PrintChapter($pdf, 1,'A RUNAWAY REEF','20k_c1.txt');
	PrintChapter($pdf, 2,'THE PROS AND CONS','20k_c2.txt');
	$pdf->Output();
?>