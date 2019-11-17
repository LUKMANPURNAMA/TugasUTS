<?php 
//koneksi ke database
require 'function.php';

//ambil data dari tabel daftar_anggota
$result = query("SELECT * FROM daftar_anggota");
//ambil data (fetch) daftar_anggota dari object result

// while ($Anggota = mysqli_fetch_assoc($result)) {
// 	var_dump($Anggota);
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<h1>Daftar Anggota</h1>

 <table border="1" cellpadding="10" cellspacing="0">
 	<tr>
 		<th>No.</th>
 		<th>Aksi</th>
 		<th>Gambar</th>
 		<th>Nama</th>
 		<th>Nik</th>
 		<th>TTL</th>
 		<th>Alamat</th>
 		<th>Email</th>

 	</tr>
<?php $i = 1; ?>
<?php foreach ($result as $row): {
} ?>
 	<tr>
 			<td><?= $i; ?></td>
 			<td>
 				<a href="">Ubah</a> |
 				<a href="">Hapus</a>
 			</td>
 			<td><img src="img/<?php echo $row["Gambar"]; ?>" width="40"></td>
 			<td><?=$row["Nama"];?></td>
 			<td><?=$row["Nik"];?></td>
 			<td><?=$row["TTL"];?></td>
 			<td><?=$row["Alamat"];?></td>
 			<td><?=$row["Email"];?></td>
 	</tr>
 	<?php $i++; ?>
 <?php  endforeach; ?>
 </table>
<body>

</body>
</html>