<?php
session_start();
if(isset($_SESSION['sesiadmin'])) {

  include_once 'Model/PenyakitModel.php';
  $PenyakitModel = new PenyakitModel();

  $semuaDataPenyakit = $PenyakitModel->dataPenyakit();

  if(isset($_POST['btnTmb'])) {
    if(empty($_POST['namaTmb']) || empty($_POST['penyebabTmb'])
    || empty($_POST['ketTmb']) || empty($_POST['solusiTmb'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $namaTmb = $_POST['namaTmb'];
      $penyebabTmb = $_POST['penyebabTmb'];
      $ketTmb = $_POST['ketTmb'];
      $solusiTmb = $_POST['solusiTmb'];
      $gambarTmb = $_FILES['gambarTmb'];
      $tanggal = date('Y-m-d h:i:s');

      // Gambar
      $type = $gambarTmb['type'];
      $typeExplode = explode('/', $type);
      $kindType = $typeExplode[0];
      $ext = $typeExplode[1];
      $folder = 'Library/images/Penyakit/';
      $lokasi = $gambarTmb['tmp_name'];
      $idAndRename = $folder.$namaTmb.'-'.rand(00,99).'.'.$ext;

      $pindahFile = move_uploaded_file($lokasi,$idAndRename);
      if($pindahFile) {
        $insertDataPenyakit = $PenyakitModel->insertPenyakit($namaTmb, $penyebabTmb, $ketTmb, $idAndRename, $solusiTmb, $tanggal);
        if($insertDataPenyakit > 0) {
          header("location: ?url=adminhome&error=false");
        } else {
          header("location: ?url=adminhome&error=true");
        }
      } else {
        echo "Kesalahan Upload";
      }
    }
  }

  if(isset($_POST['btnEdit'])) {
    if(empty($_POST['namaEdit']) || empty($_POST['idEdit']) || empty($_POST['penyebabEdit'])
    || empty($_POST['ketEdit']) || empty($_POST['solusiEdit'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $namaEdit = $_POST['namaEdit'];
      $idEdit = $_POST['idEdit'];
      $penyebabEdit = $_POST['penyebabEdit'];
      $ketEdit = $_POST['ketEdit'];
      $solusiEdit = $_POST['solusiEdit'];
      $gambarEdit = $_FILES['gambarEdit'];

      // Gambar
      $type = $gambarEdit['type'];
      $typeExplode = explode('/', $type);
      $kindType = $typeExplode[0];
      $ext = $typeExplode[1];
      $folder = 'Library/images/Penyakit/';
      $lokasi = $gambarEdit['tmp_name'];
      $idAndRename = $folder.$namaEdit.'-'.rand(00,99).'-'.$idEdit.'.'.$ext;

      $pindahFile = move_uploaded_file($lokasi,$idAndRename);
      if($pindahFile) {
        $updateDataPenyakit = $PenyakitModel->updatePenyakit($namaEdit, $penyebabEdit, $ketEdit, $idAndRename, $solusiEdit, $idEdit);
        if($updateDataPenyakit > 0) {
          header("location: ?url=adminhome&error=false");
        } else {
          header("location: ?url=adminhome&error=true");
        }
      } else {
        echo "Kesalahan Upload";
      }
    }
  }
  
  if(isset($_POST['btnHps'])) {
    if(empty($_POST['idHps'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $id = $_POST['idHps'];
      $deleteDataPenyakit = $PenyakitModel->hapusPenyakit($id);
      if($deleteDataPenyakit > 0) {
        header("location: ?url=adminhome&error=false");
      } else {
        header("location: ?url=adminhome&error=true");
      }
    }
  }

  include_once 'View/Adminhome.php';
} else {
  header('location: ?url=login');
}

?>
