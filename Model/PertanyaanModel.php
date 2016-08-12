<?php

require_once 'KoneksiModel.php';

class PertanyaanModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function ambilSemuaPertanyaan() {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pertanyaan_tb");
    $query->execute();
    $result = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $result;
  }

  public function ambilPertanyaanById($id) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pertanyaan_tb WHERE id_pertanyaan = ?");
    $data = array($id);
    $query->execute($data);
    $result = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $result;
  }

  public function ambilPertanyaanTerakhir($id_sessi) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jawaban_tb ORDER BY id_pertanyaan DESC LIMIT 1 WHERE id_sessi = ? ");
    $data = array($id_sessi);
    $query->execute($data);
    $result = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $result;
  }

  // jawaban

  public function insertJawaban($id_sessi, $ip, $id_pertanyaan, $jawaban, $status_jawaban, $tanggal_jawaban) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO jawaban_tb (id_sessi, ip, id_pertanyaan, jawaban, status_jawaban, tanggal_jawaban) VALUES(?,?,?,?,?,?)");
    $data = array($id_sessi, $ip, $id_pertanyaan, $jawaban, $status_jawaban, $tanggal_jawaban);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function updateJawaban($jawaban, $id_sessi, $id_pertanyaan) {
    $query = $this->panggilKoneksi->prepare("UPDATE jawaban_tb SET jawaban = ? WHERE id_sessi = ? AND id_pertanyaan= ?");
    $data = array($jawaban, $id_sessi, $id_pertanyaan);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function ambilJawaban($id_sessi, $id_pertanyaan) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jawaban_tb WHERE id_sessi = ? AND id_pertanyaan = ?");
    $data = array($id_sessi, $id_pertanyaan);
    $query->execute($data);
    $result = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $result;
  }

  public function cekJawaban($id_sessi, $id_pertanyaan) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jawaban_tb WHERE id_sessi = ? AND id_pertanyaan = ?");
    $data = array($id_sessi, $id_pertanyaan);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }
}
