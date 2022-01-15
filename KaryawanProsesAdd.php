<?php
include 'config.php';
 
$nip     = $_POST['nip'];
$nama    = $_POST['nama'];
$alamat  = $_POST['alamat'];
$jk      = $_POST['jk'];
$tlp     = $_POST['tlp'];
$email   = $_POST['email'];
$bagian  = $_POST['bagian'];
$jabatan = $_POST['jabatan'];

echo '
	<script>alert("Data yang anda Input sukses");window.location="karyawan.php"</script>;
';


$query="INSERT INTO karyawan SET  nip='$nip',nama='$nama',alamat='$alamat',jk='$jk',tlp='$tlp',email='$email',bagian='$bagian',jabatan='$jabatan'";
mysqli_query($koneksi, $query);
?>