<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<a class="link" href="index.php">Kembali</a>
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<br>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 			<br>
			<label>Password</label>
			<br>
			<input type="password" name="password" class="form_login" placeholder="*********" required="required">
 			<br>
			<input type="submit" class="tombol_masuk" value="Masuk">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="daftar.php">Daftar</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>