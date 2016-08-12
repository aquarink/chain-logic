<?php

include_once 'Model/PenyakitModel.php';
$PenyakitModel = new PenyakitModel();

$dataPenyakit = $PenyakitModel->dataPenyakit();

if(isset($_GET['id'])) {

  include_once 'Model/RelasiModel.php';
  $RelasiModel = new RelasiModel();

  $RelasiByPenyakit = $RelasiModel->RelasiByPenyakit($_GET['id']);

  $RelasiPenyakitPenyebab = $RelasiModel->relasiPenyakitPenyebab($_GET['id']);

  if(isset($_GET['fact'])) {

  }

  //
  include_once 'Model/PertanyaanModel.php';
  $PertanyaanModel = new PertanyaanModel();

  $ambilSemuaPertanyaan = $PertanyaanModel->ambilSemuaPertanyaan();

  //
  $dataPenyakitBy = $PenyakitModel->dataPenyakitBy($_GET['id']);

  foreach ($dataPenyakitBy as $value) {
    $penyakitnya = $value['nama_penyakit'];
  }

  if(isset($_POST['subPenyakit'])) {
    if(empty($_POST['penyebab'])) {
      $pesan = 'Pilih Penyebab';
    } else {
      $cekRelasi = $RelasiModel->cekRelasi($_GET['id'], $_POST['penyebab']);
      if($cekRelasi > 0) {
        $pesan = 'Relasi Sudah Ada';
      } else {
        $insertRelasi = $RelasiModel->insertRelasi($_GET['id'], $_POST['penyebab']);
        if($insertRelasi > 0) {
          header('location: ?url=artificial&id='.$_GET['id']);
        } else {
          $pesan = 'Error insertRelasi';
        }
      }

    }
  }
} else {
}

include_once 'View/Artificial.php';
?>
