<?php
include 'config.php';
 
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$tgl_solved      = $_POST['tgl_solved'];
$teknisi     = $_POST['teknisi'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$status = $_POST['status'];
$kondisi = $_POST['kondisi'];

echo '
	<script>alert("Data yang anda Input sukses");window.location="Laporan.php"</script>;
';


$query="INSERT INTO laporan SET  kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',tgl_solved='$tgl_solved',teknisi='$teknisi',kategori='$kategori',sub_kategori='$sub_kategori',status='$status', kondisi='$kondisi'";
mysqli_query($koneksi, $query);
?>