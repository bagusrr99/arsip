<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Registrasi</title>
</head>

<body>
  <br />
  <div align="center">
    <h3 align="center">Form Registrasi</h3>
  </div>
  <div class="kotak_login">
    <form action="" method="POST">

      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Masukan Username ..." autofocus autocomplete="off" required>

      <label>Password</label>
      <input type="password" name="password1" class="form_login" placeholder="Masukkan Password ..." required>
      <label>Konfirmasi Password</label>
      <input type="password" name="password2" class="form_login" placeholder="Masukkan Password ..." required>
      <br />

      <button type="submit" name="registrasi" class="tombol_login" align="center">Register</button>
      <br />
      <br />
      <center>
        <a class="link" href="login.php">Kembali</a>
      </center>

    </form>
  </div>
</body>

</html>