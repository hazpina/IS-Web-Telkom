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
		width: 70%;
		}
		
    .kotak a{
      color:white;
    }
    .kotak a:hover{
      color:black;
    }
    .kotak table a{
      color:blue;
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


<?php
include 'koneksipos.php';
?>

<center>
<h1>DATA POSTING NEWS</h1>

<div class="kotak">
<br>
<table border="1" bgcolor="white">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Tanggal</th>
    <th>Aksi</th>        
  </tr>

  <?php 
  $halaman = 17;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi, "SELECT * FROM isikonten");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi, "select * from isikonten ORDER BY id DESC LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;


  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>            
      <td><?php echo $data['judul']; ?></td>              
      <td><?php echo $data['tanggal']; ?></td>
      <td><a href="<?php echo $data['id'] ?>">Edit</a> | <a href="hapusDataNews.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    </tr>

    <?php               
  } 
  ?>
  

</table>          


  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

  <?php } ?>
<br>
</div>
</div>
</center>
 
 
</body>
</html>