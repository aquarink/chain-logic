<?php
session_start();
if(isset($_SESSION['sesiadmin'])) {

  include_once 'Model/PertanyaanModel.php';
  $PertanyaanModel = new PertanyaanModel();

  $ambilSemuaPertanyaan = $PertanyaanModel->ambilSemuaPertanyaan();

  if(isset($_POST['btnTmb'])) {
    if(empty($_POST['namaTmb'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $namaTmb = $_POST['namaTmb'];

      $insertPertanyaan = $PertanyaanModel->insertPertanyaan($namaTmb);
      if($insertPertanyaan > 0) {
        header("location: ?url=penyebab&error=false");
      } else {
        header("location: ?url=penyebab&error=true");
      }
    }
  }

  if(isset($_POST['btnEdit'])) {
    if(empty($_POST['namaEdit']) || empty($_POST['idEdit'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $namaEdit = $_POST['namaEdit'];
      $idEdit = $_POST['idEdit'];

      $updatePertanyaan = $PertanyaanModel->updatePertanyaan($namaEdit, $idEdit);
      if($updatePertanyaan > 0) {
        header("location: ?url=penyebab&error=false");
      } else {
        header("location: ?url=penyebab&error=true");
      }
    }
  }

  if(isset($_POST['btnHps'])) {
    if(empty($_POST['idHps'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $id = $_POST['idHps'];
      $hapusPertanyaan = $PertanyaanModel->hapusPertanyaan($id);
      if($hapusPertanyaan > 0) {
        header("location: ?url=penyebab&error=false");
      } else {
        header("location: ?url=penyebab&error=true");
      }
    }
  }

  include_once 'View/Penyebab.php';
} else {
  header('location: ?url=login');
}

?>
