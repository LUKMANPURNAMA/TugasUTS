<!DOCTYPE html>
<html>
<head>
	<title>Halaman user</title>
</head>
<h1><br>
	<br></h1>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<style >
		body{
	font-family: helvetica, sans-serif, arial;
}
h2{
	float: left;
	position: absolute;
	margin-top: 0px;
	margin-left: 12px;
	color: blue;
}
h2 img:hover{
	background: blue;
}
h3{
	font-size: 55px;
	color: white;
	font-weight: bolder;
	font-family: cursive;
	text-align: center;
}
h4{
	color: white;
	font-family: cursive;
	font-size: 33px;
	text-align: center;
}
.tombolsignin a:hover{
	cursor: pointer;

}
.tombolsignin{
	margin-left: 562px;
	padding-top: 113px;
}
.tombolsignin a{
	border:solid white 2px;
	padding-top: 15px;
	text-align: center;
	display: inline-block;
	height: 40px;
	font: Arial;
	width: 112px;
	font-size: 18px;
	border-radius: 13px;
	text-decoration: none;
	color: white;
	background: linear-gradient(to right,black,blue);
	font-weight: bold;
}
h1{
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	color: blue;
}

.menu{
	background: blue;
	margin-top: 12px;
	border-radius: 12px;
}
.menu:hover{
	cursor: pointer;
}
.menu a{
	text-decoration: none;
}
.menu a {
	margin: 10px;
	padding: 10px;
	color: white;
	display: inline-block;
}
.menu a:hover{
	cursor: pointer;
	color: yellow;
}
/*tombol dropdown*/
.dropbtn{
	cursor: pointer;
	color: white;
	width: 88px;
	text-align: center;
	transition:4s;

}
/*tombol dropdown jika di klick*/
.dropbtn:hover{
	color:yellow;
}
.dropdown{
	position: relative;
	display: inline-block;
}
/*box dropdown*/
.dropdown-content{
	display: none;
	position: absolute;
	background-color:blue;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,.2);
	z-index: 1;
	border-radius: 3px;
	margin-left: 0px;
	margin-top: 1px;
	width: 95px;
}
/*warna text dropdown*/
.dropdown-content a{
	color: white;
	padding: 1px 2px;
	text-decoration: none;
	display: block;
}
.dropdown-content a :hover{
	background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content{
	display: block;
}
.dropdown:hover .dropbtn{
	cursor: pointer;
}
/*tombol dropdown*/
.dropbtn2{
	cursor: pointer;
	color: white;
	width: 112px;
	text-align: center;

}
/*tombol dropdown jika di klick*/
.dropbtn2:hover{
	color:yellow;
}
.dropdown2{
	position: relative;
	display: inline-block;
}
/*box dropdown*/
.dropdown-content2{
	display: none;
	position: absolute;
	background-color:blue;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,.2);
	z-index: 1;
	border-radius: 3px;
	margin-left: 0px;
	margin-top: 1px;

}
/*warna text dropdown*/
.dropdown-content2 a{
	color: white;
	padding: 1px 2px;
	text-decoration: none;
	display: block;
}
.dropdown-content2 a :hover{
	background-color: #f1f1f1;
}
.dropdown2:hover .dropdown-content2{
	display: block;
}
.dropdown2:hover .dropbtn2{
	cursor: pointer;
}
h1{
	display: block;
	position: absolute;
	text-align: center;
	margin-left: 102px;
	margin-top: 120px;
	color: white;
}
a img{
	float: left;
	width: 100px;
	margin-left: 102px;
	margin-top: 70px;
}
.sidebar{
	border: 2px solid black;
	margin-top: 23px;
	width: 300px;
	height: 500px;
	background: blue;
	border-radius: 23px;

}
p{
	color: white;
}
	</style>
	
					<div class="menu">
							<a href="#Home">Beranda</a>
							<a href="laporan.php">Laporan</a>
							<div class="dropdown">
								<div class="dropbtn">Social Net</div>
									<div class="dropdown-content">
										<hr>
										<a href="Instagram">Instagram</a>
										<hr>
										<a href="Facebook">Facebook</a>
										<hr>
										<a href="Whatsapps">Whatsapps</a>
										<hr>
									</div>
								</div>
								<div class="dropdown2">
								<div class="dropbtn2">Info & Jadwal</div>
										<div class="dropdown-content2">
										<hr>
										<a href="Instagram">Pos kamling</a>
										<hr>
										<a href="Facebook">Acara</a>
										<hr>
										<a href="Whatsapps">Berita</a>
										<hr>
									</div>
								</div>
							<a href="#Contact">Contact</a>
							</div>
					</div>
					<div class="sidebar">
					<a><img src="img/181549.png" ></a>
					<h1> 
	<br>
	<p>  Halo! <br><b><?php echo $_SESSION['username']; ?></b></p>
	<a href="logout.php">Log out</a></h1>
	</div>
	<div class="sidebarkanan"><a href="laporan_admin.php">laporan admin</a>
		
	</div>
</body>
</html>