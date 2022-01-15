<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//mengecek apakah user menginput captcha dengan benar
//jika captcha salah, maka akan menjalankan yang pertama
if ($_SESSION["code"] != $_POST["captcha_code"]) {
	echo "Kode CAPTCHA anda salah";
	header("location:index.php?pesan=gagal");
} else { // jika captcha benar, maka perintah yang bawah akan dijalankan
	// cek apakah username dan password di temukan pada database
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		// cek jika user login sebagai admin
		if($data['level']=="Administrator"){
	 
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Administrator";
			// alihkan ke halaman dashboard Administrator
			header("location:HalamanAdmin.php");
	 
		// cek jika user login sebagai Teknisi
		}else if($data['level']=="Teknisi"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Teknisi";
			// alihkan ke halaman dashboard teknisi
			header("location:HalamanTeknisi.php");
	 
		}else{
	 
			// alihkan ke halaman login kembali
			header("location:index.php?pesan=gagal");
		}	
	}
}
 
 
?>