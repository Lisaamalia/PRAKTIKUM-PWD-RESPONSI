<!DOCTYPE html>
<html>
<head>
	<title>XTRON | Sistem Informasi Kerusakan Barang Kantor X</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family: helvetica Neue;">
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h2 class="header">XTRON | Sistem Informasi Kerusakan Barang Kantor X</h2></header>
	<div>
		<ul>
			<li style="background-color: black;"><a href="HalamanAdmin.php"><img src='coba.jpg' width="15px" height="15px;"> <?php echo $_SESSION['username']; ?></a></li>
			<li><a href="Laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>
	<div style='text-align: center; padding-top: 30px;'>
	        <h1>Selamat Datang!</h1>
	        <h2>Ini adalah halaman admin</h2>
	        <p><img src='profile.jpg' width="200px" height="150px;"></p>
	        <p><a href="User.php" style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 100px; text-align: center; display: inline-block;  background:  lightgrey; color:black;">Lihat User</a></p>
	    	</div>
	<div style="padding-top: 70px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</body>
</html>