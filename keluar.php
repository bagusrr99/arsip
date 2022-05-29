<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "koneksi.php";
include "header.php";
?>
<title>SINAU</title>
<div align="center">
    <a href="surat_keluar.php">INSERT DATA</a>
</div>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Surat</th>
            <th scope="col">Tanggal Surat</th>
            <th scope="col">Pengolah</th>
            <th scope="col">Tujuan</th>
            <th scope="col">Perihal</th>
            <th scope="col">OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $surat_keluar = mysqli_query($koneksi, "SELECT * FROM surat_keluar");
        $no = 1;
        while ($d = mysqli_fetch_array($surat_keluar)) {
        ?>
    </thead>
    <tbody>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nomor_surat']; ?></td>
            <td><?= $d['tanggal_surat']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['tujuan']; ?></td>
            <td><?= $d['perihal']; ?></td>
            <td>
                <a href="ubahkeluar.php?id=<?php echo $d['id']; ?>">Update</a>
                <a href="deletekeluar.php?id=<?php echo $d['id']; ?>" onClick="return confirm('apakah anda yakin?');"> Delete</a>
            </td>
        </tr>
    <?php
        }
    ?>

    </tbody>
</table>
<?php
include "footer.php";
?>