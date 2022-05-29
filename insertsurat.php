<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$nomor_agenda = $_POST['nomor_agenda'];
$nomor_surat = $_POST['nomor_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$tanggal_terima = $_POST['tanggal_terima'];
$sumber = $_POST['sumber'];
$perihal = $_POST['perihal'];
$keterangan = $_POST['keterangan'];




// menginput data ke database
mysqli_query($koneksi, "insert into surat_masuk values('','$nomor_agenda','$nomor_surat','$tanggal_surat',
'$tanggal_terima','$sumber','$perihal','$keterangan')");

// mengalihkan halaman kembali ke index.php
header("location:masuk.php");
