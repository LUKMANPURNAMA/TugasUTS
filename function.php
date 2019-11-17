<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root","","db_user");

function query($query){
	global $conn;

	$result = mysqli_query($conn, $query );
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data){

	$CON = mysqli_connect("localhost", "root","","sgbbi","user");
	global $CON;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($CON, $data["password"]);
	$konfirmasi = mysqli_real_escape_string($CON, $data["password2"]);

	//cek konfirmasi password

	if ( $password !== $konfirmasi ) {
		echo "<script>
		alert('konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}
	return 2;
}
  
  function tambah($data){


  	global $conn;
  	//ambil data dari tiap elemen dalam form
	$gambar =$data["Gambar"];
	$nama =$data["Nama"];
	$nik =$data["Nik"];
	$TTL =$data["TTL"];
	$alamat =$data["Alamat"];
	$email =$data["Email"];



		// query insert data

	$query = "INSERT INTO daftar_anggota
			VALUES 
			('','$gambar','$nama','$nik','$TTL','$alamat','$email')
			";
			mysqli_query($conn,$query);
			return mysqli_affected_rows($conn);
  }

 ?>