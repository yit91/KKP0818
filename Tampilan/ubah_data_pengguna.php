<!DOCTYPE html>
<?php
  include("Kontroler/koneksi.php");
  if(isset($_GET['id'])!=""){
  $pengguna = $_GET['pengguna'];
  $sql=mysqli_query($koneksi,"select * from masuk where pengguna ='$pengguna'");
  while ($row=mysqli_fetch_array($sql)) {
    ?>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Ubah Data Karyawan</title>
      </head>
      <style type="text/css">
        center{background-color: #33b5e5;}
        /* th,td{
          border: 1px solid red;
        } */
        input[type=submit], input[type=reset]{
          padding: 12px 20px;
          width: 200px;
          font-size: 16px;
        }
      </style>
      <body>
        <center>
        <h3>Ubah Data Karyawan</h3><hr><hr>
        <form action="Kontroler/data_pengguna.php?id=ubah" method="post">
          <div id="container">
            <table>
              <tr>
                <td><label for="">Nama Pengguna</label></td>
                <td><input type="text" name="pengguna" value="<?php echo $pengguna ?>" id=""></td>
              </tr>
              <tr>
                <td><label for="">Kata Sandi</label></td>
                <td><input type="password" name="sandi" value="<?php echo $row['sandi']; ?>" id=""></td>
              </tr>
              <tr>
                <td><label for="">Level</label></td>
                <td><input type="text" name="level" value="<?php echo $row['level']; ?>" id=""></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="reset" value="Batal" name="">
                  <input type="submit" value="Ubah" name="ubah">
                </td>

              </tr>
            </table>
          </div>
        </form>
      </center>
      </body>
    </html>
    <?php
  }
}
?>
