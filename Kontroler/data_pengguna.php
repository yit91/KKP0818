<?php
include("../Kontroler/koneksi.php");
if ($_GET['id']=="simpan") {
  $pengguna = $_POST["pengguna"];
  $sandi =md5($_POST["sandi"]);
  $level = $_POST["level"];
  $sql  = "insert into masuk (pengguna,sandi,level) values ('$pengguna','$sandi','$level')";
  if($koneksi->query($sql)===true){
    header("Location: ../home.php?id=dp");
  }else{
    echo "gagal";
  }
} elseif ($_GET['id']=="hapus") {
  $pengguna = $_GET["pengguna"];
  $sql="delete from masuk where pengguna ='$pengguna'";
  if($koneksi->query($sql)===true){
    header("Location: ../home.php?id=dp");
  }else{
    echo "gagal";
  }
} elseif ($_GET['id']=="ubah") {
  $pengguna = $_POST["pengguna"];
  $sandi =md5($_POST["sandi"]);
  $level = $_POST['level'];
  $sql= "update masuk set sandi='$sandi', level='$level' where pengguna='$pengguna'";
  if(mysqli_query($koneksi,$sql)){
    header("Location: ../home.php?id=dp");
  }else{
    echo "gagal";
  }
}

$koneksi->close();

 ?>
