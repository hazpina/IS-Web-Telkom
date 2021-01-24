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
    h5{
      color: blue;
    }
    h5:hover{
      color:black;
    }
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
      <a href="about us.php" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="news.php" class="w3-bar-item w3-button">NEWS</a>
      <a href="services.php" class="w3-bar-item w3-button">SERVICESS</a>
      <a href="carrer.php" class="w3-bar-item w3-button">CARRER</a>
      <a href="contact us.php" class="w3-bar-item w3-button">CONTACT US</a>
    </div>
  </div>
</div>

<!-- Header -->
<header>
<br>
<br>

<center>
  <?php 
  include 'koneksimenu.php';
  $halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi, "SELECT * FROM isicarrer");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);          

  $query = mysqli_query($koneksi, "select * from isicarrer ORDER BY id DESC LIMIT $mulai, $halaman ")or die(mysql_error);



  while ($data = mysqli_fetch_assoc($query)) {
    ?>
   
    <div class="kotak">
       <table border="1" bgcolor="blue">
      <h2 align="left">
      <?php echo $data['judul']; ?>
      </h2>
    <?php echo substr($data['isi'], 0, 650); 
    echo "....<br/> <a href=artikel_carrer.php?id=".$data['id']."><h5 align='left'>[Read More</a>]</h5><hr/>";
    ?>
    
    <?php               
  } 
  ?>
         
</table>
</div>

  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

  <?php } ?>
<br>
</center>

</header>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by Mahasiswa Magang</a></p>
  <p>Copyright © IS SUPPORT 2019 | All Rights Reserved.</p>
</footer>

</body>
</html>