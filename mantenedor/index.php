<?php


require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','8',16);
$pdf->Cell(40,10,'Hola mundo');
$pdf->Output();




