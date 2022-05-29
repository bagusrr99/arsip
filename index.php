<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>SINAU</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
    <!--
    body {
      background-image: url(../../../Users/hp/Downloads/AW_Field_3_c_e63808d4-528c-4a5b-a0aa-a1a80c87a110_grande.PNG);
    }
    -->
  </style>
</head>

<body>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <div align="center">
    <h3>
      WELCOME TO SISTEM INFORMASI PEMILIHAN BANTUAN PERBAIKAN RUMAH DI DESA PURWAHAMBA
    </h3>
  </div>

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
</body>
<script src="js/script.js"></script>

</html>
<?php
include "footer.php";
?>