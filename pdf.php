<?php
require('fpdf182/fpdf.php');

$VI = $_POST['HId'];
$VNo = $_POST['HVno'];
$VOwner = $_POST['HOwner'];
$VPo = $_POST['HPo'];

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Cell(59,5,'',0,1);

	$this->Image('rto.jpg',25,10,30);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(62);
	// Title
	$this->Cell(40,5,'VEHICLE INFORMATION',0,1);
	$this->SetFont('Arial','',12);
	$this->Cell(40,10,'                              																               							  RTO GOA',0,1);
	// Line break
	$this->Ln(20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Cell(5);
//Cell (width, height, text, border, end line, [align])
$pdf->Cell(59,10,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(15);
$pdf->Cell(50,10,'  Vhicle No :',0,0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,10,$VNo,0,1,);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(15);
$pdf->Cell(50,10,'  Name :',0,0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,10,$VOwner,0,1,);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(15);
$pdf->Cell(50,10,'  Id :',0,0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,10,$VI,0,1,);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(15);
$pdf->Cell(50,10,'  Area Code :',0,0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,10,$VPo,0,1,);

// $pdf->Cell(59,,'',0,1); //Space/newLine

$pdf->Output();
?>