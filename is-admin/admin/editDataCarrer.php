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

button:hover{
	background: #00bfff;
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

			EDIT Posting Carrer<br/> 
		</h1>
	<div class="kotak">

	<?php
	//konek
	include'koneksipos.php';

	$id = '';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	$data = mysqli_query($koneksi, "SELECT * FROM isicarrer WHERE id='$id'");
	


while ($d = mysqli_fetch_array($data))
{
	?>
       <br>
		<form action="updateCarrer.php" method="post">	
 		<input type="hidden" name="id">
 		<label for="judul" style="color: white;">Judul :</label>
 		<input type="text" name="judul" required value="<?php echo $d['judul']; ?>">
 		<br>
 		<br>
 		<label for="isi" name="isi"></label>
		<textarea class="ckeditor" id="ckeditor" name="isi" value="<?php echo $d['isi']; ?>">

		</textarea>

		<br/>
		<button type="submit" name="submit">UPDATE</button>
	</div>
 
 <?php
}
?>
</form>
</body>
</html>