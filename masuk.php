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
    <a href="suratmasuk.php">INSERT DATA</a>
</div>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Agenda</th>
            <th scope="col">No. Surat</th>
            <th scope="col">Tanggal Surat</th>
            <th scope="col">Tanggal Terima</th>
            <th scope="col">Sumber Surat</th>
            <th scope="col">Perihal</th>
            <th scope="col">Status</th>
            <th scope="col">OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $surat_masuk = mysqli_query($koneksi, "SELECT * FROM surat_masuk");
        $no = 1;
        while ($d = mysqli_fetch_array($surat_masuk)) {
        ?>
    </thead>
    <tbody>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nomor_agenda']; ?></td>
            <td><?= $d['nomor_surat']; ?></td>
            <td><?= $d['tanggal_surat']; ?></td>
            <td><?= $d['tanggal_terima']; ?></td>
            <td><?= $d['sumber']; ?></td>
            <td><?= $d['perihal']; ?></td>
            <td><?= $d['keterangan']; ?></td>
            <td>
                <a href="ubahsurat.php?id=<?php echo $d['id']; ?>">Update</a>
                <a href="deletesurat.php?id=<?php echo $d['id']; ?>" onClick="return confirm('apakah anda yakin?');"> Delete</a>
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