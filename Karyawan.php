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
			<li><a href="home.php"><img src='coba.jpg' width="15px" height="15px;"> <?php echo $_SESSION['username']; ?></a></li>
			<li style="background-color: black;"><a href="Laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>

	<table>
	<tr>
	<td><a href="Laporan.php"><img src="panah.jpg" width="15px" height="15px;"></a></td> 
	<td><h2>Daftar Data Karyawan</h2></td> 
	</tr>
	</table>

	<form action="" method="get">
		
		<input type="text" name="cari">

		<input type="submit" value="Cari">
	</form>

	<?php
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<p><b>Hasil pencarian : ".$cari."</b>";
		}
	?>
<p><table> 
	<tr><td><a href="KaryawanAdd.php" style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 100px; text-align: center; display: inline-block;  background: lightgreen; color:black;">Tambah Data</a></td>
	<td><a href="KaryawanReport.php" style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 50px; text-align: center; display: inline-block;  background:  #FF7F50; color:black;">PDF</a></td>
	</tr>
</table><p>

	<p style="padding-left:2px; ">
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>No. Telepon</th>
			<th>Email</th>
			<th>Bagian</th>
			<th>Jabatan</th>
			<th>Action</th> 
		</div>
		</tr>
		<?php


			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$sql="select * from karyawan  where nama like'%".$cari."%' or nip like '%".$cari."%' or alamat like '%".$cari."%'or jk like '%".$cari."%' or tlp like '%".$cari."%'or nip like '%".$cari."%' or email like '%".$cari."%'";
				$tampil = mysqli_query($koneksi,$sql);
			}else{
				$sql="select * from karyawan";
				$tampil = mysqli_query($koneksi,$sql);
			}
			$no = 1;
			$r= new SimpleXMLElement('http://localhost:8080/TP-PWD-XTRON/karyawan_xml.php', null, true);
			while($r = mysqli_fetch_array($tampil)){
				?>
				<tr style="text-align:center;">
					<td><?php echo $no++; ?></td>
					<td><?php echo "<a href='editKaryawan.php?id=".$r['id']."' style='text-decoration: none; color: black;'>"; echo $r['nip']; echo "</a>";?></td>
					<td><?php echo $r['nama']; ?></td>
					<td><?php echo $r['alamat']; ?></td>
					<td><?php echo $r['jk']; ?></td>
					<td><?php echo $r['tlp']; ?></td>
					<td><?php echo $r['email']; ?></td>
					<td><?php echo $r['bagian']; ?></td>
					<td><?php echo $r['jabatan']; ?></td>
					<td><?php 
            echo "<a href='KaryawanEdit.php?id=".$r['id']."' class='edit'>Update</a> | ";
             echo "<a href='KaryawanDel.php?id=".$r['id']."' class='del_btn '>Delete</a>"; ?>
            </td>

				</tr>
				<?php 
			} 
		?>
	</table> </p>
	<div style="padding-top: 40px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</html>