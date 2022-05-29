<?php
include 'koneksi.php';

$content = 'LAPORAN-SURAT-MASUK';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <h1>LAPORAN DATA ARSIP</h1>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">No. Arsip</th>
                <th scope="col">Keamanan</th>
                <th scope="col">Klasifikasit</th>
                <th scope="col">Tanggal Arsip</th>
                <th scope="col">Tanggal Input</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            $query = "SELECT * FROM arsip ";
            $masuk = $koneksi->prepare($query);
            $masuk->execute();
            $res1 = $masuk->get_result();

            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                    $nomor_arsip = $row['nomor_arsip'];
                    $keamanan = $row['keamanan'];
                    $klasifikasi = $row['klasifikasi'];
                    $tanggal_arsip = $row['tanggal_arsip'];
                    $tanggal_input = $row['tangga;_input'];
                    $keterangan = $row['keterangan'];

                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $nomor_arsip . "</td>";
                    echo "<td>" . $keamanan . "</td>";
                    echo "<td>" . $klasifikasi . "</td>";
                    echo "<td>" . $tanggal_arsip . "</td>";
                    echo "<td>" . $tanggal_input . "</td>";
                    echo "<td>" . $keterangan . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td colspan='5'>Tidak ada data ditemukan</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once "./vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->WriteHTML($html);
$mpdf->Output("" . $content . ".pdf", 'D');
$koneksi->close();
?>