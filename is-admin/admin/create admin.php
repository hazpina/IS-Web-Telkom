<!DOCTYPE html>
<html>
<head>
	<title>Admin IS Support Web</title>
	<link rel="stylesheet" type="text/css" href="adminLog.css">
</head>
<style type="text/css">
	.kotak{
		background: rgba(0, 0, 0, 0.6);
		
		height: 50%;
		width: 50%;
		}
		p{
			margin: 0px;
		}
		table h4{
			color: white;
			margin: 0px;
		}
		label{
			color: white;
		}
</style>
<body>

 
	<!-- cek apakah sudah login ?-->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>	

 <div class="sidebar">
 	
 	<a href="konten news.php">POSTING NEWS</a>
 	<a href="konten carrer.php">POSTING CARRER</a>
 	<a href="data news.php">DATA NEWS</a>
 	<a href="data carrer.php">DATA CARRER</a>
 	<br/>
 	<a href="services.php">SERVICES</a>
 	<a href="team.php">TEAM</a>
 	<a href="contact US.php">CONTACT US</a>
 	<a href="About US.php">ABOUT US</a>
 	<br/>
 	<br/>
 	<a href="create admin.php">CREATE NEW ADMIN</a>
 	<br/>
 	<br/>
 	<br/>
 	<a href="logout.php" >LOGOUT</a>
 </div>

<h1 align="center">Create New Admin</h1>
<center>

<div class="kotak">
<?php

include 'koneksipos.php';

if ( isset($_POST['submit']) ) {
	//ambil data dari tiap element dalam form
	$foto		= $_POST['foto'];
	$NIK		= $_POST['NIK'];
	$nama		= $_POST['nama'];
	$email		= $_POST['email'];
	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);

	//query insert data
	$query = "INSERT INTO admin
				VALUES 
				('','$foto','$NIK','$nama','$email','$username','$password' )";

	mysqli_query($koneksi, $query);

	//pesan menambahkan data berhasil di simpan
	
	//cek apakah berhasil masuk atau tidak
	if (mysqli_affected_rows($koneksi) > 0) {
		echo "<center>Berhasil Menambahkan Akun Admin<center>";
	}else{
		echo "<center>Gagal Membuat Akun Admin</center>";
		
	}
}
?>

	<br>
<form action="" method="post">
<table border="0" align="center">
	<tr>
		<td>
			<label for="NIK" name="NIK">No NIK</label>
			</td>
			<td>:
			<input type="text" name="NIK" id="NIK" required>
		</td>
	</tr>
	<tr>
		<td>
			<label for="nama">Nama Lengkap  </label></td>
			<td>:
			<input type="text" name="nama" id="nama" required>
			</td>
	</tr>
	<tr>
		<td>
		<label for="email"> Email</label>
		</td>
		<td>:
		<input type="tect" name="email" id="email" required="">
		</td>
	</tr>
	<tr>
		<td>
		<label for="username">Username </label>
		</td>
		<td>:
		<input type="text" name="username" id="username" required>
		</td>
	</tr>
	<tr>
		<td>
			<label for="password">Password </label>
		</td>
		<td>:
			<input type="password" name="password" id="password" required>
		</td>
	</tr>

	<tr>
		<td>
			<label for="foto">Masukan Foto Profil</label>
		</td>
		<td>:
		<input type="file" name="foto" id="foto" required="">
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td align="center">
			<button type="submit" name="submit" align="">Create Admin!</button>
		</td>
	</tr>
</table>
</form>
<br>
</div>
</center>

</body>
</html>