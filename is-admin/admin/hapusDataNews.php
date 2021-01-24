<?php 
// koneksi database
include 'koneksipos.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM isikonten WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data news.php");

?>