<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: Karyawan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$r = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

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
	<header>
	<table>
	<tr>
	<td><a href="Karyawan.php"><img src="panah.jpg" width="15px" height="15px;"></a></td> 
	<td><h2>Edit Data Karyawan</h2></td> 
	</tr>
	</table>
    </header>

    <form action="KaryawanProsesEdit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $r['id'] ?>" class="laporan"/>
		<p>
            <label for="nip">Nip: </label>
            <input type="text" name="nip" placeholder="nip " value="<?php echo $r['nip'] ?>" class="laporan"/>
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $r['nama'] ?>" class="laporan"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" class="laporan"><?php echo $r['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <?php $jk = $r['jk']; ?>
            <label><input type="radio" name="jk" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jk" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="tlp">No Telp: </label>
            <input type="text" name="tlp" placeholder="No. Telp" value="<?php echo $r['tlp'] ?>" class="laporan"/>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email " value="<?php echo $r['email'] ?>"class="laporan" />
        </p>
        <p>
            <label for="bagian">Bagian : </label>
            <?php $bagian = $r['bagian']; ?>
            <label><input type="radio" name="bagian" value="Elektronik" <?php echo ($bagian == 'Elektronik') ? "checked": "" ?>> Elektronik</label>
            <label><input type="radio" name="bagian" value="Non Elektronik" <?php echo ($bagian == 'Non Elektronik') ? "checked": "" ?>> Non Elektronik</label>
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <?php $jabatan = $r['jabatan']; ?>
            <label><input type="radio" name="jabatan" value="Admin" <?php echo ($jabatan == 'Admin') ? "checked": "" ?>>Admin</label>
            <label><input type="radio" name="jabatan" value="Teknisi" <?php echo ($jabatan == 'Teknisi') ? "checked": "" ?>> Teknisi</label>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>