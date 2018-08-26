<?php
include("koneksi.php");
$tgl=date("Y-m-d");
$suhu=$_GET['suhu'];
$kelembapan = $_GET['kelembapan'];

$sql  = "insert into dht22 (tanggal,suhu,kelembapan) values ('$tgl','$suhu','$kelembapan')";
if($koneksi->query($sql)===true){
}else{
  echo "gagal";
}
$koneksi->close();

 ?>
