<?php
session_start();
require 'functions.php';

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}


// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
<h1>SELAMAT DATANG DI SISTEM KEARSIPAN <br/> Form Login</h1>
  
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <div class="kotak_login">
  <form action="" method="POST">
    
        <label>Username</label>
          <input type="text" name="username" class="form_login" placeholder="Masukan Username ..."autofocus autocomplete="off" required>

        <label>Password</label>
          <input type="password" name="password" class="form_login" placeholder="Masukkan Password ..."required>
       <br/>
     
        <button type="submit" name="login" class="tombol_login" align="center">Login!</button>
<br/>
<br/>
<center>
  <a class="link" href="registrasi.php">REGISTER</a>
</center>
        
  </form>
  </div>
</body>

</html>
