<?php
require_once './SFDPDF.php';

$pdf = new SFDPDF();
$pdf->SetTitle('TCPDF');
$pdf->startPageGroup();
$pdf->AddPage();
$pdf->AddPage();
$pdf->Output();
