<!DOCTYPE html>
<html>
<title>IS SUPPORT</title>
<link rel="shortcut icon" href="../Gambar/favicon.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
</head>

<style type="text/css">
.kotak{
	margin:3%;
}
a{
	color: blue;
}
a:hover{
	color: black;
}
</style>

<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="../home.html" class="w3-bar-item w3-button"><b>IS</b> SUPPORT</a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="../menu/about us.php" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="news.php" class="w3-bar-item w3-button">NEWS</a>
      <a href="../menu/services.php" class="w3-bar-item w3-button">SERVICESS</a>
      <a href="../menu/carrer.php" class="w3-bar-item w3-button">CARRER</a>
      <a href="../menu/contact us.php" class="w3-bar-item w3-button">CONTACT US</a>
    </div>
  </div>
</div>

<!-- Header -->
<header>

	
	<br>
<div class="kotak">
  <?php
include 'koneksimenu.php';

$id = $_GET['id'];

$sql = "SELECT * FROM isikonten WHERE id='$id' LIMIT 1";

$query = mysqli_query($koneksi, $sql);

$data = mysqli_fetch_assoc($query);


echo "<center><h1>".$data['judul']."</h1></center>";
echo $data['isi']."<br>";

echo "<a href='carrer.php'>Kembali Ke Halaman Sebelumnya</a>"."<p align='right'>Tanggal ".$data['tanggal']." WIB</p>";

?>
</div>
</header>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by Mahasiswa Magang</a></p>
  <p>Copyright © IS SUPPORT 2019 | All Rights Reserved.</p>
</footer>

</body>
</html>