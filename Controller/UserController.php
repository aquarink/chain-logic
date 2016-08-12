<?php

// Session lock
session_start();
if(isset($_SESSION['sesi'])) {
  header('location: ?url=pertanyaan');
} else {
  // Kontroller
  if(isset($_POST['start_konsul'])) {

    if(empty($_POST['nama_user']) || empty($_POST['email_user'])) {
      echo "Kolom Kosong";
    } else {
      $nama_user = $_POST['nama_user'];
      $email = $_POST['email_user'];
      $ip = $_SERVER['REMOTE_ADDR'];
      $id_sessi = date('dmYhis').rand(0000,9999);
      $tanggal = date('Y-m-d h:i:s');

      include_once 'Model/UserModel.php';
      $UserModel = new UserModel();

      $saveUserSession = $UserModel->insertUser($nama_user, $email, $ip, $id_sessi, 1, $tanggal);
      if($saveUserSession > 0) {
        $_SESSION['sesi'] = $id_sessi;
        header('location: ?url=pertanyaan&id=1');
      }
    }
  }
}

// Panggil View
include_once 'View/DaftarKonsultasi.php';
?>
