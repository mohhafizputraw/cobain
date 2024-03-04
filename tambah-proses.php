<?php
include('koneksi.php');

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// Insert data ke database
$query = mysqli_query($connection, "INSERT INTO siswa(nis, nama, kelas, jurusan) VALUES('$nis','$nama','$kelas','$jurusan')");

// Redirect ke halaman utama
header("Location: index.php");
?>
