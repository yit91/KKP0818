<?php include("Kontroler/koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data</title>
    <style media="screen">
    table{
      border-collapse: collapse;

    }
    th{
      /* border: 1px solid green; */
      height: 30px;background-color: white;
    }
      th,td{
        border-bottom: 1px double black;
        border-collapse: collapse;
        padding-left: 20px;
        vertical-align: middle;
      }
      tr:hover{
        background-color: #e3dfda;
      }
      .center{
        background-color: #33b5e5;
      	height:630px;
        padding-top: 20px;
      }
      .tabel{
        overflow: scroll;
        height:405px;
      }
      center{
        /* background-color: #33b5e5; */
        /* border: 1px solid blue; */
      }
    </style>
  </head>
  <body>
    <center class="center">
      <h1>Data Sensor DHT22</h1><hr><hr>
    <form class="" action="home.php?id=ds" method="post" onsubmit="return validasi(this)">
      Tanggal Awal :
      <input type="date" name="ftgl" value=""><br>
      Tanggal Akhir :
      <input type="date" name="utgl" value=""><br>
      <!-- <input type="time" name="time" value=""> -->
      <input type="submit" name="fil" value="Tampil">
    </form>
    <?php

     ?>
    <div class="tabel">
      <?php
      if(isset($_POST['fil'])!=""){
        $date=$_POST['ftgl'];
        $date2=$_POST['utgl'];
        $no=1;
        $sql="SELECT * from dht22 where tanggal between '$date' and '$date2'";
        $query=mysqli_query($koneksi,$sql);

       ?>
      <table>
        <tr>
          <td colspan="5" style="text-align: center;"><?php
          date_default_timezone_set("Asia/Jakarta");
          echo date("Y-m-d"); echo " || ";  echo date("H:i:s"); ?></td>
        </tr>
        <tr>
          <th>No</th>
          <th>Waktu</th>
          <th>Tanggal</th>
          <th>Suhu</th>
          <th>Kelembapan</th>
        </tr>
        <?php
          while ($row=mysqli_fetch_array($query)) {
         ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['waktu']; ?></td>
          <td><?php echo $row['tanggal']; ?></td>
          <td><?php echo str_replace(".",",",$row['suhu']);  ?></td>
          <td><?php echo str_replace(".",",",$row['Kelembapan']);  ?></td>
        </tr>
        <?php }
        } ?>

      </table>
    </div>

  </center>

  </body>
</html>
<script type="text/javascript">
function validasi(form) {
  var v = form.date;
  var w = form.tanggal;
  if (v.value == "") {
    alert("Informasi : Tanggal awal harap diisi");
    v.focus();
    return false;
  }else if (w.value="") {
    alert("Informasi : Tanggal akhir harap diisi");
  }
  return validasi();
}
</script>
