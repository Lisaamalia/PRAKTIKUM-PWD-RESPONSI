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
			<li style="background-color: black;"><a href="HalamanTeknisi.php"><img src='coba.jpg' width="15px" height="15px;"> <?php echo $_SESSION['username']; ?></a></li>
			<li><a href="Laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>
	<div style='text-align: center; padding-top: 30px;'>
	        <h1>Selamat Datang!</h1>
	        <h2>Ini adalah halaman <?php echo $_SESSION['username']; ?></h2>
	        <p><img src='profile.jpg' width="250px" height="180px;"></p>
	  

	    	</div>
	<div style="padding-top: 100px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</body>
</html>