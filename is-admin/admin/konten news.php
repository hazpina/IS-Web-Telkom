<!DOCTYPE html>
<html>
<head>
	<title>Admin IS Support Web</title>
	<link rel="stylesheet" type="text/css" href="adminLog.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<style type="text/css">
	.kotak{
	margin: 20px auto;
	background: rgb(0, 0, 0, 0.6);
	width: 900px;	
	padding: 20px 20px 20px 20px;
	border-radius: 3px;
}
h1{
	text-align: center;
	font-family: sans-serif;
	font-weight: 300;
	color: #000000;
}
 
button{
	padding: 8px 15px;
	border-radius: 3px;
	background: #ECF0F1;
	border: none;
	color: #232323;
	font-size: 12pt;

}
input{
	width: 500px;
	height: 20px;
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

<h1 align="center">

			Buat Posting News<br/> 
		</h1>
	<div class="kotak">

	<?php
	//konek
	include'koneksipos.php';
	//insert data
	if ( isset($_POST['submit']) ) {
		//mengambil data
		$judul	= $_POST['judul'];
		$isi	= $_POST['isi'];
		
	
		//memasukan data
	$tabel = "INSERT INTO isiKonten
	VALUES
	('','$judul','$isi',NULL)";

	mysqli_query($koneksi, $tabel);

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "<center>Berhasil Memasukan Konten</center>";
	}else {
		echo "<center>Gagal memasukan Konten</center>";
	}
}
	?>
       <br>
		<form action="" method="post">	
 		
 		
 		<label for="judul" style="color: white;">Judul :</label>
 		<input type="text" name="judul" id="judul" required>
 		<br>
 		<br>
 		<label for="isi" name="isi" ></label>
		<textarea class="ckeditor" id="ckeditor" name="isi">

		</textarea>
		<br/>
		<button type="submit" name="submit">Submit</button>
	</div>
 </form>

</body>
</html>