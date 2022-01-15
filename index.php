<!DOCTYPE html>
<html>
<head>
	<title>XTRON | Sistem Informasi Kerusakan Barang Kantor X</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Harap Masukan Data Dengan Benar!</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<div class='header'>
			<h2> Login Form</h2>
		<hr></div>
 
		<form action="cek_login.php" method="post">
			<!--<label>Username</label>-->
			<input type="text" name="username" class="form_login" required="required" placeholder="Username">
 
			<!--<label>Password</label>-->
			<input type="password" name="password" class="form_login" required="required" placeholder="Password">

			<input name='captcha_code' type='text' placeholder="Captcha" class="form_login" value="" maxlength="5"><img src='captcha.php' alt="gambar"/>
 
			<p style="text-align:center;"><input type="submit" class="tombol_login" value="LOGIN" style="cursor: pointer;">

		</form>
		
	</div>
 
</body>
</html>