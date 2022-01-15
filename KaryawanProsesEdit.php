<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$nip = $_POST['nip'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$tlp=$_POST['tlp'];
$email = $_POST['email'];
$bagian=$_POST['bagian'];
$jabatan=$_POST['jabatan'];

    // buat query update
    $sql = "UPDATE karyawan SET nip='$nip', nama='$nama',jk='$jk',alamat='$alamat',tlp='$tlp', email='$email',bagian= '$bagian',jabatan='$jabatan' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>