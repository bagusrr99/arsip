<?php
require '../functions.php';
$tb_masalah = cari($_GET['keyword']);
?>
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">KODE</th>
          <th scope="col">MASALAH</th>
          <th scope="col">SUB MASALAH</th>
          <th scope="col">JENIS</th>
          <th scope="col">AWAL</th>
          <th scope="col">AKHIR</th>
          <th scope="col">AKTIF</th>
          <th scope="col">INAKTIF</th>
          <th scope="col">TMR</th>
          <th scope="col">THM</th>
          <th scope="col">GEDUNG</th>
          <th scope="col">LANTAI</th>
          <th scope="col">RUANG</th>
          <th scope="col">SARANA</th>
          <th scope="col">NO</th>
          <th scope="col">KOLOM</th>
          <th scope="col">BARIS</th>
          <th scope="col">KOTAK</th>
          <th scope="col">MEDIA</th>
          <th scope="col">STATUS</th>
        </tr>

        <?php if (empty($arsip)) : ?>
          <tr>
            <td colspan="4">
              <p style="color: red; font-style: italic;">Dokumen tidak ditemukan!</p>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($arsip as $m) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['kode']; ?></td>
            <td><?= $m['masalah']; ?></td>
            <td><?= $m['sub_masalah']; ?></td>
            <td><?= $m['jenis']; ?></td>
            <td><?= $m['awal']; ?></td>
            <td><?= $m['akhir']; ?></td>
            <td><?= $m['aktif']; ?></td>
            <td><?= $m['inaktif']; ?></td>
            <td><?= $m['tmr']; ?></td>
            <td><?= $m['thm']; ?></td>
            <td><?= $m['gedung']; ?></td>
            <td><?= $m['lt']; ?></td>
            <td><?= $m['ruang']; ?></td>
            <td><?= $m['sarana']; ?></td>
            <td><?= $m['no']; ?></td>
            <td><?= $m['kolom']; ?></td>
            <td><?= $m['baris']; ?></td>
            <td><?= $m['kotak']; ?></td>
            <td><?= $m['media']; ?></td>
            <td><?= $m['status']; ?></td>
            <td>
              <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
    </table>