<!DOCTYPE html>
<html>
<head>
	<title>Admin IS Support Web</title>
	<link rel="stylesheet" type="text/css" href="adminLog.css">
</head>

<style type="text/css">
	.kotak{
		background : black;
		height: 60%;
		width: 60%;
	}
	td{
		color: white;
	}
	.kotak td a{
		color: red;
	}
	.kotak td a:hover{
		color: #f1f1f1;
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

<center>
		<div class="kotak">
<table border="0">
	<tr align="center">
		
	<?php
	include 'koneksipos.php';
	$data = mysqli_query($koneksi, "SELECT * FROM kontak");
	while ($hasil = mysqli_fetch_array($data)) {
	
	?>
	<tr>
		
		<td align="center"><h1>
			<?php echo $hasil['judul'];
		?></h1> </td>
	</tr>
	<tr>
		<td><?php echo $hasil['isi_kontak']; ?></td>
	</tr>
	<br>
		<tr>
			<td align="center"><a href="#" style="font-size: 30px;"> EDITED </a>
		</tr>
	</tr>
<?php 
}
?>
	
</table>
<br>
</div>
 </center>


</body>
</html>