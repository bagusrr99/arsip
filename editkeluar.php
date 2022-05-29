<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nomor_surat = $_POST['nomor_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$perihal = $_POST['perihal'];



// update data ke database
mysqli_query($koneksi, "update surat_keluar set nomor_surat='$nomor_surat', tanggal_surat='$tanggal_surat', 
nama='nama', tujuan='$tujuan', perihal='$perihal' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:keluar.php");
