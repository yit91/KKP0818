<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Karyawan</title>
  </head>
  <style type="text/css">
    center{
      /* background-color: #33b5e5; */
      /* padding-top: 20px; */
    }
    #judul{
      height:40px;
      width:100px;
      border : 1px solid red;
      background-color: #73e794;
    }
    th,td{
      border: 1px solid black;
      border-collapse: collapse;
    }

  </style>
  <body>
    <center>
    <h3>
      Data Pengguna
      <hr><hr>
    </h3>

    <table>
      <th>Nama Pengguna</th>
      <th>Level</th>
      <th>Opsi</th>
<?php
include("Kontroler/koneksi.php");
 $sql =mysqli_query($koneksi,'select * from masuk');
 while ($row=mysqli_fetch_array($sql)) {
?>
      <tr>
        <td><?php echo $row['pengguna'] ?></td>
        <td><?php echo $row['level'] ?></td>
        <td><a href="home.php?pengguna=<?php echo $row['pengguna'] ?>&id=upd ">Ubah</a>|<a href="Kontroler/data_pengguna.php?pengguna=<?php echo $row['pengguna'] ?>&id=hapus">Hapus</a></td>
      </tr>
      <?php
       }
       ?>
     </center>
    </table>
  </body>
</html>
