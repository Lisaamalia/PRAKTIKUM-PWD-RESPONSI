<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: Laporan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM laporan WHERE id=$id";
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
	<td><a href="Laporan.php"><img src="panah.jpg" width="15px" height="15px;"></a></td> 
	<td><h2>Input Progress Perbaikan</h2></td> 
	</tr>
	</table>
    </header>

    <form action="TeknisiProsesEdit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $r['id'] ?>" class="laporan" />
		<p>
            <label for="kode_laporan">Kode Laporan: </label>
            <input type="text" name="kode_laporan" placeholder="Masukan Kode Laporan " value="<?php echo $r['kode_laporan'] ?>" class="laporan"/>
        </p>
        <p>
            <label for="pengisi">Pengisi Laporan: </label>
            <textarea name="pengisi" class="laporan"><?php echo $r['pengisi'] ?></textarea>
        </p>
        <p>
            <label for="tgl_laporan">Tgl. Laporan: </label>
            <input type="date" name="tgl_laporan" placeholder="Masukan Tgl. Laporan" value="<?php echo $r['tgl_laporan'] ?>" class="laporan"/>
        </p>
        <p>
        <label for="kategori">Kategori: </label>
        <select name="kategori" value="<?php echo $r['kategori'] ?>" class="laporan">
	        <option>Elektronik</option>
	        <option>Non-Elektronik</option>
        </select> 
        </p>
        <p>
        <label for="sub_kategori">Sub Kategori: </label>
        <select name="sub_kategori" value="<?php echo $r['sub_kategori'] ?>" class="laporan">
	        <option>Kerusakan LCD Kantor</option>
	        <option>Kerusakan PC Kantor</option>
	        <option>Kerusakan Telepon Kantor</option>
	        <option>Kerusakan Meja Komputer</option>
	        <option>Kerusakan Lemari Arsip</option>
	        <option>Kerusakan Kursi Kantor</option>
        </select> 
        </p>
        <p>
        <label for="kondisi">Kondisi: </label>
        <select name="kondisi" value="<?php echo $r['kondisi'] ?>" class="laporan">
	        <option>Mendesak</option>
	        <option>Tidak Mendesak</option>
        </select> 
        </p>
            <p>
            <label for="tgl_solved">Tgl. Solved: </label>
            <input type="date" name="tgl_solved" placeholder="Masukan Tgl. Solved" value="<?php echo $r['tgl_solved'] ?>" class="laporan"/>
        </p>
        <p>
            <label for="teknisi">Nama Teknisi: </label>
            <input name="teknisi" class="laporan" value="<?php echo $r['teknisi'] ?>" />
        </p>
        <p>
            <label for="status">Status Perbaikan: </label>
            <input name="status" class="laporan" value="<?php echo $r['status'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>