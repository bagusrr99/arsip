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
    <a href="data.php">INSERT DATA</a>
</div>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Arsip</th>
            <th scope="col">Keamanan</th>
            <th scope="col">Klasifikasi</th>
            <th scope="col">Tanggal Data Arsip</th>
            <th scope="col">Tanggal Input</th>
            <th scope="col">Keterangan</th>
            <th scope="col">OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $arsip = mysqli_query($koneksi, "SELECT * FROM arsip");
        $no = 1;
        while ($d = mysqli_fetch_array($arsip)) {
        ?>
    </thead>
    <tbody>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nomor_arsip']; ?></td>
            <td><?= $d['keamanan']; ?></td>
            <td><?= $d['klasifikasi']; ?></td>
            <td><?= $d['tanggal_arsip']; ?></td>
            <td><?= $d['tanggal_input']; ?></td>
            <td><?= $d['keterangan']; ?></td>
            <td>
                <a href="ubaharsip.php?id=<?php echo $d['id']; ?>">Update</a>
                <a href="deletearsip.php?id=<?php echo $d['id']; ?>" onClick="return confirm('apakah anda yakin?');"> Delete</a>
            </td>
        </tr>
    <?php
        }
    ?>

    </tbody>
</table>
<br />
<?php
include "footer.php";
?>