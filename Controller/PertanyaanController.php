<?php

// Session lock
session_start();
if(isset($_SESSION['sesi'])) {
  include_once 'Model/PertanyaanModel.php';
  $PertanyaanModel = new PertanyaanModel();
  if(empty($_GET['id'])) {
    header('location: ?url=pertanyaan&id=1');
  } else {
    $ambilPertanyaanById = $PertanyaanModel->ambilPertanyaanById($_GET['id']);
  }

  if($_GET['id'] > 15) {
    header('location: ?url=hasil&id='.$_SESSION['sesi']);
  }

  if(isset($_POST['start_tanya'])) {
    if(empty($_POST['jawab'])) {
      header('location: ?url=pertanyaan&id='.$_GET['id']);
    } else {
      $cekJawaban = $PertanyaanModel->cekJawaban($_SESSION['sesi'], $_GET['id']);
      if($cekJawaban > 0) {
        $ambilJawaban = $PertanyaanModel->ambilJawaban($_SESSION['sesi'], $_GET['id']);
        foreach ($ambilJawaban as $jawaban) {
          if(empty($jawaban['jawaban'])) {
            echo "Insert";
            $tanggal = date('Y-m-d h:i:s');
            $insertJawaban = $PertanyaanModel->insertJawaban($_SESSION['sesi'], $_SERVER['REMOTE_ADDR'], $_GET['id'], $_POST['jawaban'], 1, $tanggal);
            if($insertJawaban > 0) {
              echo "ok Insert";
              $id = intval($_GET['id'])+1;
              header('location: ?url=pertanyaan&id='.$id);
            } else {
              echo "no Insert";
              header('location: ?url=pertanyaan&id='.$_GET['id']);
            }
          } else {
            echo "Update";
            $updateJawaban = $PertanyaanModel->updateJawaban($_POST['jawab'], $_SESSION['sesi'], $_GET['id']);
            if($updateJawaban > 0) {
              echo "ok Update";
              $id = intval($_GET['id'])+1;
              header('location: ?url=pertanyaan&id='.$id);
            } else {
              echo "no Update";
              header('location: ?url=pertanyaan&id='.$_GET['id']);
            }
          }
        }
      } else {
        $tanggal = date('Y-m-d h:i:s');
        $insertJawaban = $PertanyaanModel->insertJawaban($_SESSION['sesi'], $_SERVER['REMOTE_ADDR'], $_GET['id'], $_POST['jawab'], 1, $tanggal);
        if($insertJawaban > 0) {
          $id = intval($_GET['id'])+1;
          header('location: ?url=pertanyaan&id='.$id);
        } else {
          header('location: ?url=pertanyaan&id='.$_GET['id']);
        }
      }
    }
  }

  // Tampilan
  include_once 'View/Pertanyaan.php';
} else {
  header('location: ?url=user');
}
?>
