<?php
include("koneksi.php");
$suhu=$_GET['suhu'];
$kelembapan = $_GET['kelembapan'];

$sql  = "insert into dht22 (suhu,kelembapan) values ('$suhu','$kelembapan')";
if($koneksi->query($sql)===true){
//  header("Location: ../home.php?id=karyawan");
}else{
  echo "gagal";
}
$koneksi->close();

 ?>
