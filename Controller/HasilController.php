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

    include_once 'Model/RelasiModel.php';
    $RelasiModel = new RelasiModel();
    $relasiJawaban = $RelasiModel->relasiJawaban($_SESSION['sesi']);
    //print_r($relasiJawaban);
    $countArr = count($relasiJawaban);
    for ($i=0; $i < $countArr; $i++) {
      $relasi = $relasiJawaban[$i]['id_pertanyaan'];
      //echo $relasi[$i];
      $dataPenyakitByRelasi = $RelasiModel->dataPenyakitByRelasi($relasi[$i]);
      $idPenyakit = $dataPenyakitByRelasi[0]['id_penyakit'];
      //
      include_once 'Model/PenyakitModel.php';
      $PenyakitModel = new PenyakitModel();

      $dataPenyakitBy = $PenyakitModel->dataPenyakitBy($idPenyakit);
      foreach ($dataPenyakitBy as $valuePenyakit) {
        $penyakitnya[] = $valuePenyakit;
      }
    }

    include_once 'View/Hasil.php';
  }
} else {
  header('location: ?url=pertanyaan&id=1');
}
?>
