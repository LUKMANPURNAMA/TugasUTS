<?php 
//koneksi ke dbanggota
$conn = mysqli_connect("localhost","root","","db_user");
//cek
			$jenisErr="";
			$namaErr="";
			$nikErr="";
			$jeniskelaminErr="";
			$berapalamaErr="";
			$tujuanErr="";

if (isset($_POST["submit"])) {
//ambil data dari tiap elmn dlm form
			$jenis=$_POST["jenis"];
			$nama=$_POST["nama"];
			$nik=$_POST["nik"];
			$jeniskelamin=$_POST["jeniskelamin"];
			$berapalama=$_POST["berapalama"];
			$tujuan=$_POST["tujuan"];


			if (empty($jenis)) {
				$jenisErr = "jenis Masih Kosong.<br>";
			}if (empty($nama)) {
				$namaErr = "nama Masih Kosong.<br>";
			}if (empty($nik)) {
				$nikErr = "nik Masih Kosong.<br>";
			}if (empty($jeniskelamin)) {
				$jeniskelaminErr = "jenis kelamin Masih Kosong.<br>";
			}if (empty($berapalama)) {
				$berapalamaErr = "berapa lama Masih Kosong.<br>";
			}if (empty($tujuan)) {
				$tujuanErr = "tujuan Masih Kosong.<br>";
			}
	//query insert
	$query ="INSERT INTO tb_laporan
			VALUES
			('','$jenis','$nama','$nik','$jeniskelamin','$berapalama','$tujuan')";
			mysqli_query($conn,$query);
			//cek apakah data berhasil di tambahkan atau tidak

			if(mysqli_affected_rows($conn) > 0 ){
				echo "Laporan terkirim";
			}else {
				echo "Gagal di kirim";
				echo mysqli_error($conn);
			}
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<a class="link" href="halaman_user.php">Kembali</a>
	<h1>Laporan</h1>

	<form action="" method="post">
				<label>Jenis:</label>
				<br>
				<input type="text" name="jenis" id="jenis">
				<center><?php echo $jenisErr; ?></center>
				<br>
				<label>Nama:</label>
				<br>
				<input type="text" name="nama" id="nama">
				<center><?php echo $namaErr; ?></center>
				<br>
				<label>Nik:</label>
				<br>
				<input type="text" name="nik" id="nik">
				<center><?php echo $nikErr; ?></center>
				<br>
				<label>Jenis Kelamin:</label>
				<br>
				<input type="text" name="jeniskelamin" id="jeniskelamin">
				<center><?php echo $jeniskelaminErr; ?></center>
				<br>
				<label>Berapa Lama:</label>
				<br>
				<input type="text" name="berapalama" id="berapalama">
				<center><?php echo $berapalamaErr; ?></center>
				<br>
				<label>Tujuan :</label>
				<br>
				<input type="text" name="tujuan" id="tujuan">
				<center><?php echo $tujuanErr; ?></center>
				<br>
				<button type="submit" name="submit">Kirim</button>
	</form>
			<margin-left><button><a href="fpdf181/index.php">PDF</a></button></margin-left>

</body>
</html>