<?php
include 'koneksipos.php';

//menangkap data form
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];



mysqli_query($koneksi, "UPDATE isicarrer SET id='$id' judul='$judul' isi='$isi'");

//menampilkan data
header("location:data carrer.php");
?>