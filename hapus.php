<?php
include('koneksi.php');

$id = $_GET['id'];

// Hapus data dari database
$query = mysqli_query($connection, "DELETE FROM siswa WHERE id='$id'");

// Redirect ke halaman utama
header("Location: index.php");
?>
