<?php 
$koneksi = mysqli_connect("localhost", "id10284877_admin", "telkomis" ,"id10284877_adminlog");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>