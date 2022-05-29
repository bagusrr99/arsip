<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$nomor_surat = $_POST['nomor_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$perihal = $_POST['perihal'];




// menginput data ke database
mysqli_query($koneksi, "insert into surat_keluar values('','$nomor_surat','$tanggal_surat','$nama',
'$tujuan','$perihal')");

// mengalihkan halaman kembali ke index.php
header("location:keluar.php");
