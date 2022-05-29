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
		<h1>LAPORAN SURAT MASUK</h1>
	</div>
	<table border="1">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">No. Agenda</th>
				<th scope="col">No. Surat</th>
				<th scope="col">Tanggal Surat</th>
				<th scope="col">Tanggal Terima</th>
				<th scope="col">Sumber Surat</th>
				<th scope="col">Perihal</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$no = 1;
			$query = "SELECT * FROM surat_masuk ";
			$masuk = $koneksi->prepare($query);
			$masuk->execute();
			$res1 = $masuk->get_result();

			if ($res1->num_rows > 0) {
				while ($row = $res1->fetch_assoc()) {
					$nomor_agenda = $row['nomor_agenda'];
					$nomor_surat = $row['nomor_surat'];
					$tanggal_surat = $row['tanggal_surat'];
					$tanggal_terima = $row['tanggal_terima'];
					$sumber = $row['sumber'];
					$perihal = $row['perihal'];
					$keterangan = $row['keterangan'];

					echo "<tr>";
					echo "<td>" . $no++ . "</td>";
					echo "<td>" . $nomor_agenda . "</td>";
					echo "<td>" . $nomor_surat . "</td>";
					echo "<td>" . $tanggal_surat . "</td>";
					echo "<td>" . $tanggal_terima . "</td>";
					echo "<td>" . $sumber . "</td>";
					echo "<td>" . $perihal . "</td>";
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