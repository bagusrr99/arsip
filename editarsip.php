<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nomor_arsip = $_POST['nomor_arsip'];
$keamanan = $_POST['keamanan'];
$klasifikasi = $_POST['klasifikasi'];
$tanggal_arsip = $_POST['tanggal_arsip'];
$tanggal_input = $_POST['tanggal_input'];
$keterangan = $_POST['keterangan'];
$file = $_POST['file'];



// update data ke database
mysqli_query($koneksi, "update arsip set nomor_arsip='$nomor_arsip', keamanan='$keamanan', klasifikasi='$klasifikasi', tanggal_arsip='$tanggal_arsip',
keterangan='keterangan', file='$file where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:arsip.php");
