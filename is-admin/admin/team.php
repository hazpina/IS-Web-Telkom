<!DOCTYPE html>
<html>
<head>
	<title>Admin IS Support Web</title>
	<link rel="stylesheet" type="text/css" href="adminLog.css">
</head>

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

<p align="center">Bagian Team Menyusul</p>

<?php 
include 'koneksipos.php';

?>

</body>
</html>