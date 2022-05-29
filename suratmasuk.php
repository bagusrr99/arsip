<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "header.php";
?>

<head>
    <!-- CSS untuk bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <!-- CSS untuk bootstrap datetimepicker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">
    <title>SINAU</title>
</head>
<form method="post" action="insertsurat.php">
    <div class="card" align="center">
        <div class="card-body">
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
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td><input type="text" name="nomor_agenda" autocomplete="off"></td>
                        <td><input type="text" name="nomor_surat" autocomplete="off"></td>
                        <td>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class='input-group date' id='dtp_icon'>
                                                <input type="text" name="tanggal_surat" autocomplete="off" class="" id="input_dtp_icon" />
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
                                                <input type="text" name="tanggal_terima" autocomplete="off" class="" id="input_dtp_icon" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="text" name="sumber" autocomplete="off"></td>
                        <td><input type="text" name="perihal" autocomplete="off"></td>
                        <td><input type="text" name="keterangan" autocomplete="off"></td>
                        <td>
                            <input type="submit" value="Save">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</form>
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