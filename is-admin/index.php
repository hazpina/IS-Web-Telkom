<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="admincss.css">
</head>

<center><img src="\ISweb\Gambar\telkom.png" alt="avatar" width="250px" height="125px"></center>

<body>
	</br>
	</br>
	<center><h2>LOGIN ADMIN</h2></center>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<center>Login gagal! username dan password salah!</center>";
		}
		else if($_GET['pesan'] == "logout"){
			echo "<center>Anda telah berhasil logout</center>";
		}
		else if($_GET['pesan'] == "belum_login"){
			echo "<center>Anda harus login untuk mengakses halaman admin</center>";
		}
	}
	?>
	<div class="login">
	<br/>
		<form action="cekLogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
</html>