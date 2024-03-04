<?php
include('koneksi.php');

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// Update data di database
$query = mysqli_query($connection, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

// Redirect ke halaman utama
header("Location: index.php");
?>
