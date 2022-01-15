<?php
	include 'config.php'; //file koneksi.php untuk mengoneksikan ke database
?>
<!DOCTYPE html>
<html>
<head>
	<title>XTRON | Sistem Pelayanan Pengaduan Kerusakan Barang Kantor X</title>
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

	<h2 class="header">XTRON | Sistem Pelayanan Pengaduan Kerusakan Barang Kantor X</h2>
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
	<td><a href="Karyawan.php"><img src="panah.jpg" width="15px" height="15px;"></a></td> 
	<td><h2>Tambah Data Karyawan</h2></td> 
	</tr>
	</table>
    </header>
	<div><form method="post" action="KaryawanProsesAdd.php" >
	<fieldset>
	<p>
        <label for="nip">NIP: </label>
        <input type="text" name="nip" placeholder="Masukan NIP" class="laporan"/>
    </p>
    <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="Nama Lengkap" class="laporan"/>
    </p>
    <p>
        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="Masukan Email" class="laporan"/>
    </p>
    <p>
        <label for="alamat">Alamat: </label>
        <textarea name="alamat" placeholder="Masukan Alamat" class="laporan"/></textarea>
    </p>
    <p>
        <label for="jk">Jenis Kelamin: </label>
        <label><input type="radio" name="jk" value="Laki-Laki"> Laki-laki</label>
        <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
    </p>
    <p>
        <label for="tlp">No Telp: </label>
        <input type="text" name="tlp" placeholder="Masukan No Telepon" class="laporan"/>
    </p>
    <p>
        <label for="jabatan">Jabatan: </label>
        <label><input type="radio" name="jabatan" value="Admin">Admin</label>
        <label><input type="radio" name="jabatan" value="Teknisi">Teknisi</label>
    </p>
    <p>
        <label for="bagian">Bagian: </label>
        <label><input type="radio" name="bagian" value="Elektronik">Elektronik</label>
        <label><input type="radio" name="bagian" value="Non Elektronik">Non Elektronik</label>
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