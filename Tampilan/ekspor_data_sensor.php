<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Report Sensor</title>
  </head>
  <body>
    <center>
    <h2>Cetak Report Sensor DHT22</h2><hr><hr>
    <form class="" action="Kontroler/ekspor_data_sensor.php" method="post" onsubmit="return validasi(this)">
      Tanggal Awal :
      <input type="date" name="ftgl" value=""><br>
      Tanggal Akhir :
      <input type="date" name="utgl" value=""><br>
      <input type="submit" name="rpt" value="Cetak">
    </form>
  </center>
  </body>
</html>
<script type="text/javascript">
function validasi(form) {
  var v = form.date;
  var w = form.date2;
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
