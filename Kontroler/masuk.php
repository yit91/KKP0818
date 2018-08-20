<?php
include("koneksi.php");
$pengguna = (htmlentities($_POST['pengguna']));
$sandi = (htmlentities(md5($_POST['sandi'])));
$query    = "SELECT * FROM masuk WHERE pengguna = '$pengguna' AND sandi = '$sandi'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
	session_start();
	$_SESSION = $runquery->fetch_array(1);
	$_SESSION['pengguna'];
	$_SESSION['level'];
	header("Location: ../home.php");
} else {
	header("Location: ../index.php?id=psw");
}

?>
