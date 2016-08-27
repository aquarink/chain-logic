<?php

require_once 'KoneksiModel.php';

class RelasiModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function insertRelasi($id_penyakit, $id_penyebab) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO relasi_tb (id_penyakit, id_penyebab) VALUES(?,?)");
    $data = array($id_penyakit, $id_penyebab);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function deleteRelasi($id_relasi) {
    $query = $this->panggilKoneksi->prepare("DELETE FROM relasi_tb WHERE id_relasi = ?");
    $data = array($id_relasi); // mysql_escaped_real_string
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function RelasiBy($id_penyakit, $id_penyebab) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM relasi_tb WHERE id_penyakit = ? AND id_penyebab = ?");
    $nilai = array($id_penyakit, $id_penyebab); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }

  public function RelasiByPenyakit($id_penyakit) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM relasi_tb WHERE id_penyakit = ?");
    $nilai = array($id_penyakit); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }

  public function cekRelasi($id_penyakit, $id_penyebab) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM relasi_tb WHERE id_penyakit = ? AND id_penyebab = ?");
    $nilai = array($id_penyakit, $id_penyebab); // mysql_escaped_real_string
    $query->execute($nilai);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function relasiPenyakitPenyebab($id_penyakit) {
    $query = $this->panggilKoneksi->prepare("SELECT
        penyakit_tb.`id_penyakit` AS idPenyakit,
        penyakit_tb.`nama_penyakit` AS namaPenyakit,
        pertanyaan_tb.`id_pertanyaan` AS idPertanyaan,
        pertanyaan_tb.`pertanyaan` AS pertanyaanNya,
        relasi_tb.`id_relasi` AS relId
        FROM penyakit_tb, pertanyaan_tb, relasi_tb
        WHERE
        penyakit_tb.`id_penyakit` = relasi_tb.`id_penyakit`
        AND
        pertanyaan_tb.`id_pertanyaan` = relasi_tb.`id_penyebab`
        AND
        penyakit_tb.`id_penyakit` = ?");
    $nilai = array($id_penyakit); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }

  public function dataPenyakitByRelasi($idp) {
    $query = $this->panggilKoneksi->prepare("SELECT id_penyakit FROM relasi_tb WHERE id_penyebab = ?");
    $nilai = array($idp); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }

  public function relasiJawaban($idSession) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jawaban_tb WHERE id_sessi = ? AND jawaban = 1");
    $nilai = array($idSession); // mysql_escaped_real_string
    $query->execute($nilai);
    $ambilData = $query->fetchAll(); // fetchAll = mysql_fetch_array
    return $ambilData;
  }
}
