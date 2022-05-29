<?php
include "header.php";
?>

<head>
    <!-- CSS untuk bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <!-- CSS untuk bootstrap datetimepicker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">
    <title>SINAU</title>
</head>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from arsip where id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <form method="post" action="editarsip.php">
        <div align="center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">No. Arsip</th>
                        <th scope="col">Keamanan</th>
                        <th scope="col">Klasifikasi</th>
                        <th scope="col">Tanggal Data Arsip</th>
                        <th scope="col">Tanggal Input</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">File</th>
                        <th scope="col">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        </td>
                        <td>
                            <input type="text" name="nomor_arsip" autocomplete="off" value="<?php echo $d['nomor_arsip']; ?>">
                        </td>
                        <td>
                            <input type="text" name="keamanan" autocomplete="off" value="<?php echo $d['keamanan']; ?>">
                        </td>
                        <td>
                            <input type="text" name="klasifikasi" autocomplete="off" value="<?php echo $d['klasifikasi']; ?>">
                        </td>
                        <td>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class='input-group date' id='dtp_icon'>
                                                <input type="text" name="tanggal_arsip" autocomplete="off" class="" id="input_dtp_icon" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class='input-group date' id='dtp'>
                                                <input type="text" name="tanggal_input" autocomplete="off" class="" id=" input_dtp_icon" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="text" name="keterangan" autocomplete="off" value="<?php echo $d['keterangan']; ?>">
                        </td>
                        <td>
                            <input type="file" name="file" autocomplete="off" value="<?php echo $d['file']; ?>">
                        </td>

                        <td>
                            <input type="submit" value="Update">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </form>
<?php
}
?>
<?php
include "footer.php";
?>

<!-- js untuk jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- js untuk bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- js untuk moment -->
<script src="js/moment.js"></script>
<!-- js untuk bootstrap datetimepicker -->
<script src="js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#dtp').datetimepicker({
            format: 'DD/MM/YYYY'
        });

        $('#dtp_icon').datetimepicker({
            format: 'DD/MM/YYYY'
        });


    });
</script>