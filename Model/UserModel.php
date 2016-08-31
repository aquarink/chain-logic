<?php

require_once 'KoneksiModel.php';

class UserModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function insertUser($nama_user, $email, $ip, $id_sessi, $status, $tanggal) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO pasien_tb (nama_user, email, ip, id_sessi, status, tanggal) VALUES(?,?,?,?,?,?)");
    $data = array($nama_user, $email, $ip, $id_sessi, $status, $tanggal);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function insertKonsultasi($id_pasien, $id_sessi, $ip, $id_pertanyaan, $jawaban, $status_konsultasi, $tanggal_konsultasi) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO konsultasi_tb (id_pasien, id_sessi, ip, id_pertanyaan, jawaban, status_konsultasi, tanggal_konsultasi) VALUES(?,?,?,?,?,?)");
    $data = array($id_pasien, $id_sessi, $ip, $id_pertanyaan, $jawaban, $status_konsultasi, $tanggal_konsultasi);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function dataUserByLogin($nik, $password) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM tbl_user WHERE nik_user = ? AND password_user = ?");
    $nilai = array($nik, $password); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }
}
