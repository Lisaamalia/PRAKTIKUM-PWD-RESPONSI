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
$pdf->Cell(190,7,'DAFTAR REKAP DATA KARYAWAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'SISTEM PELAYANAN PENGADUAN KERUSAKAN BARANG KANTOR X',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,12,'NIP',1,0);
$pdf->Cell(15,12,'NAMA',1,0);
$pdf->Cell(20,12,'ALAMAT',1,0);
$pdf->Cell(20,12,'GENDER',1,0);
$pdf->Cell(25,12,'TELEPON',1,0);
$pdf->Cell(35,12,'EMAIL',1,0);
$pdf->Cell(25,12,'BAGIAN',1,0);
$pdf->Cell(20,12,'JABATAN',1,1);
$pdf->SetFont('Arial','',10);
include 'config.php';
$mahasiswa = mysqli_query($koneksi, "select * from karyawan");
while ($row = mysqli_fetch_array($mahasiswa)){
	$pdf->Cell(30,12,$row['nip'],1,0);
	$pdf->Cell(15,12,$row['nama'],1,0);
	$pdf->Cell(20,12,$row['alamat'],1,0);
	$pdf->Cell(20,12,$row['jk'],1,0);
	$pdf->Cell(25,12,$row['tlp'],1,0);
	$pdf->Cell(35,12,$row['email'],1,0);
	$pdf->Cell(25,12,$row['bagian'],1,0);
	$pdf->Cell(20,12,$row['jabatan'],1,1);
}
$pdf->Output();
?>