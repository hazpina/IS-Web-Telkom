<!DOCTYPE html>
<html>
<title>IS SUPPORT</title>
<link rel="shortcut icon" href="../Gambar/favicon.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title>Services</title>
</head>

<style type="text/css">
	.kotak{
		margin :3%;
    
	}
</style>

<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/ISweb/home.html" class="w3-bar-item w3-button"><b>IS</b> SUPPORT</a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="about us.php" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="#about" class="w3-bar-item w3-button">NEWS</a>
      <a href="services.php" class="w3-bar-item w3-button">SERVICESS</a>
      <a href="carrer.php" class="w3-bar-item w3-button">CARRER</a>
      <a href="#contact" class="w3-bar-item w3-button">CONTACT US</a>
    </div>
  </div>
</div>

<!-- Header -->
<header>
	<br>
	<br>
	<br>
  <?php 
include 'koneksimenu.php';
?>

<?php 
$data = mysqli_query($koneksi, "SELECT * FROM kontak");
while ($hasil=mysqli_fetch_array($data)) {
	# code...
 ?>
 <h1 align="center">
 <?php echo $hasil['judul']; ?>	
 </h1>
 <div class="kotak">
  
        <?php echo $hasil['isi_kontak']; ?>
 
 
</div>
 <?php
}
?>



</header>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="" title="Mahasiswa Magang" target="_blank" class="w3-hover-text-green">Mahasiswa Magang</a></p>
  <p>Copyright © IS SUPPORT 2019 | All Rights Reserved.</p>
</footer>

</body>
</html>