<?php
	include 'config.php'; //file koneksi.php untuk mengoneksikan ke database
?>
<!DOCTYPE html>
<html>
<head>
	<title>XTRON | Sistem Informasi Kerusakan Barang Kantor X</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		session_start();
	 
		// cek apakah yang mengakses halaman ini sudah login
		if($_SESSION['level']==""){
			header("location:index.php?pesan=gagal");
		}
 
	?>

	<h2 class="header">XTRON | Sistem Informasi Kerusakan Barang Kantor X</h2>
	<div>
		<ul>
			<!--<li><a href="home.php">Dashboard</a></li>-->
			<li><a href="#"><img src='coba.jpg' width="15px" height="15px;"> <?php echo $_SESSION['username']; ?></a></li>
			<li style="background-color: black;"><a href="laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>

	<?php
	include 'config.php';

	//form pembelian
	if(!isset($_POST['proses']) && !isset($_POST['tambah'])){
	echo '
	<header>
	<table>
	<tr>
	<td><a href="Laporan.php"><img src="panah.jpg" width="15px" height="15px;"></a></td> 
	<td><h2>Buat Laporan</h2></td> 
	</tr>
	</table>
    </header>
	<div><form method="post" action="LaporanProsesAdd.php" >
	<fieldset>
	<p>
        <label for="kode_laporan">Kode Laporan : </label>
        <input type="text" name="kode_laporan" placeholder="Masukan Kode Laporan" class="laporan"/>
    </p>
    <p>
        <label for="pengisi">Pengisi Laporan: </label>
        <input type="text" name="pengisi" placeholder="Nama Lengkap"  class="laporan"/>
    </p>
    <p>
        <label for="tgl_laporan">Tgl. Laporan: </label>
        <input type="date" name="tgl_laporan" placeholder="Masukan Tanggal Laporan" class="laporan"/>
    </p>
    <p>
        <label for="kategori">Kategori: </label>
        <select name="kategori" class="laporan">
	        <option>Elektronik</option>
	        <option>Non-Elektronik</option>
        </select>
    </p>
    <p>
        <label for="kondisi">Kondisi : </label>
        <select name="kondisi" class="laporan">
	        <option>Mendesak</option>
	        <option>Tidak Mendesak</option>
        </select>
    </p>
        <p>
        <label for="sub_kategori">Sub Kategori: </label>
        <select name="sub_kategori" class="laporan">
	        <option>Kerusakan LCD Kantor</option>
	        <option>Kerusakan PC Kantor</option>
	        <option>Kerusakan Telepon Kantor</option>
	        <option>Kerusakan Meja Komputer</option>
	        <option>Kerusakan Lemari Arsip</option>
	        <option>Kerusakan Kursi Kantor</option>
        </select>
    </p>
    <p>
        <input type="hidden" name="tgl_solved" value="Proccesed" disabled" />
    </p>
    <p>
        <input type="hidden" name="teknisi" value="Proccesed" disabled" />
    </p>
    <p>
        <input type="hidden" name="status" value="Proccesed" disabled" />
    </p>
    <p>
        <input type="submit" value="Submit" name="Submit" />
    </p>
      



	   </fieldset></form></div>
	 ';
	}
	 
	?>

	</p>
	<div style="padding-top: 40px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</html>