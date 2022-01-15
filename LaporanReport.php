<?php include 'config.php';
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'REKAP DATA LAPORAN KERUSAKAN BARANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'SISTEM INFORMASI KERUSAKAN BARANG KANTOR X',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,12,'KODE',1,0);
$pdf->Cell(16,12,'PENGISI',1,0);
$pdf->Cell(22,12,'TGL.LAPOR',1,0);
$pdf->Cell(25,12,'KATEGORI',1,0);
$pdf->Cell(50,12,'SUB KATEGORI ',1,0);
$pdf->Cell(25,12,'TGL.SOLVED',1,0);
$pdf->Cell(19,12,'TEKNISI',1,0);
$pdf->Cell(19,12,'STATUS',1,1);
$pdf->SetFont('Arial','',10);
include 'config.php';
$mahasiswa = mysqli_query($koneksi, "select * from laporan");
while ($row = mysqli_fetch_array($mahasiswa)){
	$pdf->Cell(12,12,$row['kode_laporan'],1,0);
	$pdf->Cell(16,12,$row['pengisi'],1,0);
	$pdf->Cell(22,12,$row['tgl_laporan'],1,0);
	$pdf->Cell(25,12,$row['kategori'],1,0);
	$pdf->Cell(50,12,$row['sub_kategori'],1,0);
	$pdf->Cell(25,12,$row['tgl_solved'],1,0);
	$pdf->Cell(19,12,$row['teknisi'],1,0);
	$pdf->Cell(19,12,$row['status'],1,1);
}
$pdf->Output();
?>