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
			<li style="background-color: black;"><a href="Laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>

	<h2>Data Laporan</h2>
	</table>

	<p><form action="" method="get">
		
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
	<tr><td><a href="LaporanAdd.php" style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 100px; text-align: center; display: inline-block;  background: lightgreen; color:black;">Buat Laporan</a></td>
	<td><a href=LaporanReport.php style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 50px; text-align: center; display: inline-block;  background:  #FF7F50; color:black;">PDF</a></td>
	<td><a href=Karyawan.php style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 150px; text-align: center; display: inline-block;  background:  lightblue; color:black;">Data Karyawan</a></td>
</table><p>

	<p style="padding-left:2px; ">
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Kode Laporan</th>
			<th>Pengisi Laporan</th>
			<th>Tgl Laporan</th>
			<th>Kategori</th>
			<th>Sub Kategori</th>
			<th>Kondisi</th>
			<th>Tgl Solved</th>
			<th>Nama Teknisi</th>
			<th>Status</th>
			<th>Action</th>
		</div>
		</tr>
		<?php

			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$sql="select * from laporan  where kode_laporan like'%".$cari."%' or tgl_laporan like '%".$cari."%' or tgl_solved like '%".$cari."%' or status like '%".$cari."%'or teknisi like '%".$cari."%' or pengisi like '%".$cari."%' or kategori like '%".$cari."%' or sub_kategori like '%".$cari."%' or kondisi like '%".$cari."%'";
				$tampil = mysqli_query($koneksi,$sql);
			}else{
				$sql="select * from laporan";
				$tampil = mysqli_query($koneksi,$sql);
			}
			$no = 1;
			while($r = mysqli_fetch_array($tampil)){
				?>
				<tr style="text-align:center;">
					<td><?php echo $no++; ?></td>
					<td><?php echo "<a href='TeknisiEdit.php?id=".$r['id']."' style='text-decoration: none; color: black;'>"; echo $r['kode_laporan']; echo "</a>";?></td>
					<td><?php echo $r['pengisi']; ?></td>
					<td><?php echo $r['tgl_laporan']; ?></td>
					<td><?php echo $r['kategori']; ?></td>
					<td><?php echo $r['sub_kategori']; ?></td>
					<td><?php echo $r['kondisi']; ?></td>
					<td><?php echo $r['tgl_solved']; ?></td>
					<td><?php echo "<div style='font-weight: bold; border-radius: 5px;width: 100px;text-align: center; display: inline-block;  font-style:italic;'>"; echo $r['teknisi']; echo"</div>"?></td>
					<td><?php echo "<div style='font-weight: bold; border-radius: 5px;width: 100px; text-align: center; display: inline-block; font-style:italic;'>"; echo $r['status']; echo"</div>"?></td>
					<td><?php 
            echo "<a href='LaporanEdit.php?id=".$r['id']."' class='edit'>Update</a> | ";
             echo "<a href='LaporanDel.php?id=".$r['id']."' class='del_btn '>Delete</a>"; ?>
            </td>

				</tr>
				<?php 
			} 
		?>
	</table> </p>
	<div style="padding-top: 40px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</html>