<!DOCTYPE html>
<html>
<head>
	<title>XTRON | Sistem Informasi Kerusakan Barang Kantor X</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style> 
		h1{
			font-family: sans-serif;
			}

			table {
			  font-family: Arial, Helvetica, sans-serif;
			  color: #666;
			  text-shadow: 1px 1px 0px #fff;
			  background: #eaebec;
			  border: #ccc 1px solid;
			}

			table th {
			  padding: 15px 35px;
			  border-left:1px solid #e0e0e0;
			  border-bottom: 1px solid #e0e0e0;
			  background: #ededed;
			}

			table th:first-child{  
			  border-left:none;  
			}

			table tr {
			  text-align: center;
			  padding-left: 20px;
			}

			table td:first-child {
			  text-align: left;
			  padding-left: 20px;
			  border-left: 0;
			}

			table td {
			  padding: 15px 35px;
			  border-top: 1px solid #ffffff;
			  border-bottom: 1px solid #e0e0e0;
			  border-left: 1px solid #e0e0e0;
			  background: #fafafa;
			  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
			  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
			}

			table tr:last-child td {
			  border-bottom: 0;
			}

			table tr:last-child td:first-child {
			  -moz-border-radius-bottomleft: 3px;
			  -webkit-border-bottom-left-radius: 3px;
			  border-bottom-left-radius: 3px;
			}

			table tr:last-child td:last-child {
			  -moz-border-radius-bottomright: 3px;
			  -webkit-border-bottom-right-radius: 3px;
			  border-bottom-right-radius: 3px;
			}

			table tr:hover td {
			  background: #f2f2f2;
			  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
			  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
			}
	</style>
</head>
<body style="font-family: helvetica Neue;">
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1 class="header">XTRON | Sistem Informasi Kerusakan Barang Kantor X</h1></header>
	<div>
		<ul>
			<li style="background-color: black;"><a href="HalamanAdmin.php"><img src='coba.jpg' width="15px" height="15px;"> <?php echo $_SESSION['username']; ?></a></li>
			<li><a href="Laporan.php">Laporan</a></li>
			<li style="float:right;"><a href="logout.php">Logout</a></li>
		</ul> 
	</div><hr>
	<h2>Data User</h2>
	<p><a href="HalamanAdmin.php" style="text-decoration: none; padding: 8px 20px; text-decoration: none; font-weight: bold; border-radius: 5px; cursor: pointer; width: 50px; text-align: center; display: inline-block;  background:  #2F4F4F; color:white;">Back</a></p>
<?php
// untuk meload data xml (user.xml) dengan cara SimpleXML 
$data = new SimpleXMLElement('http://localhost:8080/TP-PWD-XTRON/UserXml.php', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>Nama</th>
<th>Email</th>
<th>Level</th>
</tr>
 
";
 
// melakukan looping penampilan data user
foreach($data as $id)
{
        echo "
<tr>
<td width='200'>{$id->nama}</td>
<td width='200'>{$id->email}</td>
<td width='200'>{$id->level}</td>
</tr>
 
";
}echo '</table>';
?>
	<div style="padding-top: 170px;text-align: center; font-family: sans-serif;"><p><footer><b>Copyright &copy 2021 | Lisa Amalia</footer></p></div>
</body>
</body>
</html>