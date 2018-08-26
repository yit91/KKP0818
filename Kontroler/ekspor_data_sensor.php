<?php
if(isset($_POST['rpt'])!=""){
  $ftgl = $_POST['ftgl'];
  $utgl = $_POST['utgl'];
require_once '../Asset/rpt/PHPExcel.php';
//membuat Koneksi ke database (saat ini sensor)
$conn_db = mysqli_connect("localhost","root","","arduino");
if(!$conn_db){
  echo mysqli_error($conn_db);
  exit;
}

$xl = new PHPExcel();

$xl->SetActiveSheetIndex(0);
//mengambil isi seluruh database sensor
//$tgl="2018-06-01";
$query = "SELECT * FROM dht22 WHERE tanggal BETWEEN '$ftgl' AND '$utgl'";
$sql = mysqli_query($conn_db,$query);
$row = 4;
$no=1;
// mengambil data dari database dan di store ke cell excel dengan looping
while($data = mysqli_fetch_object($sql)){
  $xl->getActiveSheet()
  ->setCellvalue("A".$row , $no)
  ->setCellvalue("B".$row , $data->waktu)
  ->setCellvalue("C".$row , $data->tanggal)
  ->setCellvalue("D".$row , $data->suhu)
  ->setCellvalue("E".$row , $data->Kelembapan);
  $no++;
  $row++;
}

//membuat tabel header
$xl->getActiveSheet()
->setCellvalue("A3","No.")
->setCellvalue("B3","Waktu")
->setCellvalue("C3","Tanggal")
->setCellvalue("D3","Suhu (C)")
->setCellvalue("E3","Kelembapan (%)")
->setCellvalue("A1","Data Sensor DHT22");// judul

// mengatur lebar kolom
$xl->getActiveSheet()->getColumnDimension("A")->setWidth(5);
$xl->getActiveSheet()->getColumnDimension("B")->setWidth(15);
$xl->getActiveSheet()->getColumnDimension("C")->setWidth(11);
$xl->getActiveSheet()->getColumnDimension("D")->setWidth(10);
$xl->getActiveSheet()->getColumnDimension("E")->setWidth(14);

//mengatur marjin
//margin judul
$xl->getActiveSheet()->mergeCells("A1:E1");
// rata
$xl->getActiveSheet()->getStyle("A1")->getAlignment()->setHorizontal("center");
// style and border
$xl->getActiveSheet()->getStyle("A1:E1")->applyFromArray(
  array(
    "font"=> array(
      'size' =>24,
      'bold' => true
    ),
    "borders"=>array(
      'outline' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN
      )
    )
  )
);

$xl->getActiveSheet()->getStyle("A3:E3")->applyFromArray(
  array(
    "font"=> array(
      'bold' => true
    ),
    "borders"=>array(
      'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN
      )
    )
  )
);
$xl->getActiveSheet()->getStyle("A4:E".($row-1))->applyFromArray(
  array(
    "borders"=>array(
      'outline' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN
      ),
      "vertical" =>array(
        'style' => PHPExcel_Style_Border::BORDER_THIN
      )
    )
  )
);
// membuat
$dt = date("d-m-Y");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename='Data Sensor $dt.xlsx'");
header("Cache-Control: max-age=0");

    $file = PHPExcel_IOFactory::createWriter($xl,"Excel2007");
    //$file->save("testSql.xlsx");
    $file->save("php://output");
  }else {
    header("Location: form.php");
  }
 ?>
