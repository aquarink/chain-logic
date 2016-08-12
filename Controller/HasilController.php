<?php
// Session lock
session_start();
if(isset($_SESSION['sesi'])) {
  include_once 'Model/PertanyaanModel.php';
  $PertanyaanModel = new PertanyaanModel();
  $sesiJawaban = $PertanyaanModel->sesiJawaban($_SESSION['sesi']);
  foreach ($sesiJawaban as $valueSessi) {
    $sessiCount[] = $valueSessi['id_sessi'];
  }
  $resultCount = count($sessiCount);

  if($resultCount < 15) {
    header('location: ?url=pertanyaan&id=1');
  } else {
    include_once 'View/Hasil.php';
  }
} else {
  header('location: ?url=pertanyaan&id=1');
}
?>
