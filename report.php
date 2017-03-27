<?php
require('fpdf/fpdf.php'); // file fpdf.php harus diincludekan
class PDF extends FPDF
{
function Header()
{
// setting properti font
$this->SetFont('Arial','B',15);
// menulis header

$tanggal = date("d-m-Y");

$this->Cell(30,10,$tanggal,0,0,'C');
$this->Cell(83,30,'Websiteku Modul',0,0,'C');
$this->Line(11,18,198,18);
// membuat space kosong antara header dengan teks konten
$this->Ln(20);
}

// Page footer
function Footer()
{
    $this->Ln(20);   
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',10);
    // Page number
    $this->Cell(0,10,'Copyright Websiteku ( Tri Anto Fajar | 2013230032 )',0,0,'C');
}
}
$pdf=new PDF('P','mm','A4');
$pdf->SetMargins(20,10,20);
$pdf->AliasNbPages();
$pdf->AddPage();

//isi

include "config/koneksi.php";
$query="SELECT * FROM konten GROUP BY '$_GET[id]'";
$tampung = mysqli_query($konek,$query);
$data= mysqli_fetch_array($tampung);
  $pdf->SetX(35);
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(30,40,'Judul : '.$data['judul'].'',0,0,'C');
    $pdf->SetFont('Times','',12);
    $pdf->Cell(57,60,$data['isi'],0,0,'C');
    $pdf->Ln();

//BATAS ISI
$pdf->Output();
?>