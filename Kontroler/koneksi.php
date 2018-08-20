<?php
$pengguna = "root";
$kata_sandi = "";
$server = "localhost";
$database = "arduino";
$koneksi = mysqli_connect($server,$pengguna,$kata_sandi,$database);
if (!$koneksi) {
  die("Keslahan koneksi : " . mysqli_connect_errno());
} else {
  //echo "Koneksi sukses";
}
 ?>
