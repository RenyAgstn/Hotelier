<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form Reservasi
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$kamar = $_POST['kamar'];

// menginput data ke database
mysqli_query($koneksi,"insert into pengunjung values('$ktp','$nama','$checkin','$checkout','$kamar')");
// mengalihkan halaman kembali ke index.php
header("location:thanks.html");

?>