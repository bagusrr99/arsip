<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$nomor_arsip = $_POST['nomor_arsip'];
$keamanan = $_POST['keamanan'];
$klasifikasi = $_POST['klasifikasi'];
$tanggal_arsip = $_POST['tanggal_arsip'];
$tanggal_input = $_POST['tanggal_input'];
$keterangan = $_POST['keterangan'];
$file = $_POST['file'];




// menginput data ke database
mysqli_query($koneksi, "insert into arsip values('','$nomor_arsip','$keamanan','$klasifikasi',
'$tanggal_arsip','$tanggal_input','$keterangan','$file')");

// mengalihkan halaman kembali ke index.php
header("location:arsip.php");
