<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$ktp = $_GET['ktp'];


// menghapus data dari database
mysqli_query($koneksi,"delete from pengunjung where ktp='$ktp'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");

?>