<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?><?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
$id   = $_POST['id'];
$kode_laporan     = $_POST['kode_laporan'];
$pengisi    = $_POST['pengisi'];
$tgl_laporan  = $_POST['tgl_laporan'];
$kategori   = $_POST['kategori'];
$sub_kategori  = $_POST['sub_kategori'];
$kondisi = $_POST['kondisi'];
$tgl_solved   = $_POST['tgl_solved'];
$teknisi  = $_POST['teknisi'];
$status = $_POST['status'];

    // buat query update
    $sql = "UPDATE laporan SET kode_laporan='$kode_laporan',pengisi='$pengisi',tgl_laporan='$tgl_laporan',kategori='$kategori',sub_kategori='$sub_kategori', kondisi='$kondisi',tgl_solved='$tgl_solved',teknisi='$teknisi', status='$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Laporan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>