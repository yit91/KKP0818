
<?php
include("../Kontroler/koneksi.php");
$sql = mysqli_query($koneksi,"SELECT suhu,kelembapan FROM dht22 ORDER BY id DESC limit 1");
$result = array();

while($row = mysqli_fetch_array($sql)){
	array_push($result, array('suhu' => $row[0],'kelembapan' => $row[1]));
}
echo json_encode(array("result" => $result));
?>
