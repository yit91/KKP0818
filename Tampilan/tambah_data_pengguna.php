<?php
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pendaftaran</title>
  </head>
  <style type="text/css">
    center{
      background-color: #33b5e5;
      padding-top: 20px;
    }
    input[type=submit], input[type=reset]{
      padding: 12px 20px;
      width: 200px;
      font-size: 16px;
    }
  </style>
  <!-- <link rel="stylesheet" type="text/css" href="Asset/css/login.css"> -->
  <body>
    <center>
    <h1 style="text-align:center;">Pendaftaran</h1><hr><hr>
    <form action="Kontroler/data_pengguna.php?id=simpan" method="post">
      <table>
        <tr>
          <td>Nama Pengguna</td>
          <td><input type="text" name="pengguna" placeholder="isi disini"/></td>
        </tr>
        <tr>
          <td>Kata Sandi</td>
          <td><input type="password" name="sandi" placeholder="isi disini"/></td>
        </tr>
        <tr>
          <td>Level</td>
          <td><input type="text" name="level" placeholder="isi disini"/></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Simpan" name="daftar">
            <input type="reset" value="Batal" name="">
          </td>
        </tr>
      </table>
  </form>
  </center>
  </body>
</html>
