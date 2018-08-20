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
      Nama Perusahaan
    </div>

    <!-- Navigasi -->
    <div class="topnav" id="myTopnav" >
      <a href="#" class="active">Beranda</a>
      <a href="#">Data Sensor</a>
      <a href="#">Pengaturan</a>
      <div class="dropdown">
        <button class="dropbtn">Data Pengguna
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">Tambah Data Pengguna</a>
          <a href="#">Lihat Data Pengguna</a>
        </div>
      </div>
      <a href="#Laporan">Laporan Data</a>
      <a href="#Logout">Logout</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctione()">&#9776;</a>
    </div>

    <!-- konten -->
    <div class="contentL">
      konten n halaman Kiri
    </div>
    <div class="contentR">
      konten n halaman Kanan
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
