<?php 
//koneksi ke dbanggota
$conn = mysqli_connect("localhost","root","","db_user");
//cek
			$namaErr="";
			$usernameErr="";
			$passwordErr="";
			$nikErr="";
			$telephoneErr="";
			$emailErr="";

if (isset($_POST["submit"])) {
//ambil data dari tiap elmn dlm form
			$nama=$_POST["nama"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$nik=$_POST["nik"];
			$telephone=$_POST["telephone"];
			$email=$_POST["email"];


			if (empty($nama)) {
				$namaErr = "Nama Masih Kosong.<br>";
			}if (empty($username)) {
				$usernameErr = "username Masih Kosong.<br>";
			}if (empty($nama)) {
				$passwordErr = "password Masih Kosong.<br>";
			}if (empty($nama)) {
				$nikErr = "nik Masih Kosong.<br>";
			}if (empty($nama)) {
				$telephoneErr = "telephone Masih Kosong.<br>";
			}if (empty($nama)) {
				$emailErr = "email Masih Kosong.<br>";
			}
	//query insert
	$query ="INSERT INTO tb_user
			VALUES
			('','$nama','$username','$password','','$nik','$telephone','$email')";
			mysqli_query($conn,$query);
			//cek apakah data berhasil di tambahkan atau tidak

			if(mysqli_affected_rows($conn) > 0 ){
				echo "Berhasil daftar silahkan kembali Login";
			}else {
				echo "Gagal di tambahkan";
				echo mysqli_error($conn);
			}
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
	<style type="text/css">
label{
	font-weight: bolder;
	text-align: center;
}
.submit{
	width: 90px;
	height: 40px;
	border-radius: 23px;
	background: blue;
}
input{
			display: block;
			background: #00FFE5;
			border-radius: 33px;
			width: 290px;
			height: 30px;
			font-weight: bolder;
			font-size: 23px;
			border-color: blue;
			margin-left:530px;
			text-align: center;
				}
				form{
					text-align: center;
				}
				h1{
					text-align: center;
					font-size: 23px;
					font-weight: bolder;
				}
				button{
					font-size: 18px;
					font-weight: bolder;
					width: 90px;
					height: 40px;
					border-radius: 23px;
					background: blue;
				}
				a{
					font: 24px;
					font-weight: bolder;
				}
	</style>
</head>
<body>
	<a class="link" href="index.php">Kembali</a>
	<h1>Daftar</h1>

	<form action="" method="post">
				<label>Nama:</label>
				<br>
				<input type="text" name="nama" id="nama">
				<center><?php echo $namaErr; ?></center>
				<br>
				<label>Username:</label>
				<br>
				<input type="text" name="username" id="username">
				<center><?php echo $usernameErr; ?></center>
				<br>
				<label>Password:</label>
				<br>
				<input type="text" name="password" id="password">
				<center><?php echo $passwordErr; ?></center>
				<br>
				<label>Nik:</label>
				<br>
				<input type="text" name="nik" id="nik">
				<center><?php echo $nikErr; ?></center>
				<br>
				<label>Telephone:</label>
				<br>
				<input type="text" name="telephone" id="telephone">
				<center><?php echo $telephoneErr; ?></center>
				<br>
				<label>Email :</label>
				<br>
				<input type="text" name="email" id="email">
				<center><?php echo $emailErr; ?></center>
				<br>
				<button type="submit" name="submit">Daftar</button>
	</form>
	<center>
				<a class="link" href="index.php">Login?</a>
			</center>

</body>
</html>