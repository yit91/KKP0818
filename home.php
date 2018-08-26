<?php
 session_start();
 if(!isset($_SESSION['pengguna'])) {
 header("Location: index.php?");
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Asset/css/dropresp.css" rel="stylesheet" type="text/css">
    <title></title>
  </head>
  <body>

    <!-- Header -->
    <div class="header">
      <div class="card"><img src="Asset/img/icon.png" alt="Logo Perusahaan" style="width: 110px; height:120px;"><div class="container"><?php echo $_SESSION['pengguna'];?></div></div>
      <h1>Nama Perusahaan</h1>
    </div>

    <!-- Navigasi -->
    <div class="topnav" id="myTopnav" >
      <a href="home.php" class="active">Beranda</a>
      <a href="home.php?id=ds">Data Sensor</a>
      <a href="#">Pengaturan</a>
      <div class="dropdown">
        <button class="dropbtn">Data Pengguna
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="home.php?id=tdp">Tambah Data Pengguna</a>
          <a href="home.php?id=dp">Lihat Data Pengguna</a>
        </div>
      </div>
      <a href="home.php?id=eds">Laporan Data</a>
      <a href="Kontroler/keluar.php">Logout</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctione()">&#9776;</a>
    </div>

    <!-- konten -->
    <div class="contentL">
      <?php include("Tampilan/suhu.html"); ?>
    </div>
    <div class="contentR">
      <?php
      if (isset($_GET['id'])) {
        if ($_GET['id']=="dp") {
          include("Tampilan/data_pengguna.php");
        } else if($_GET['id']=="tdp") {
          include("Tampilan/tambah_data_pengguna.php");
        } else if($_GET['id']=="upd") {
          include("Tampilan/ubah_data_pengguna.php");
        } else if($_GET['id']=="ds") {
          include("Tampilan/data_sensor.php");
        } else if($_GET['id']=="eds") {
          include("Tampilan/ekspor_data_sensor.php");
        }
      }
       ?>
    </div>

    <!-- footer -->
    <div class="footer">
      Footer
    </div>
    <script>
    //membuat dropdown list
    function myFunctione() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    // membuat header atas dengan auto hide
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("myTopnav");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>
  </body>
</html>
