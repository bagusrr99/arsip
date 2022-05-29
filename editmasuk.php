<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nomor_agenda = $_POST['nomor_agenda'];
$nomor_surat = $_POST['nomor_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$tanggal_terima = $_POST['tanggal_terima'];
$sumber = $_POST['sumber'];
$perihal = $_POST['perihal'];
$keterangan = $_POST['keterangan'];



// update data ke database
mysqli_query($koneksi, "update surat_masuk set nomor_agenda='$nomor_agenda', nomor_surat='$nomor_surat', tanggal_surat='$tanggal_surat', 
tanggal_terima='$tanggal_terima', sumber='$sumber', perihal='$perihal', keterangan='$keterangan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:masuk.php");
