<?php

include_once 'Model/PenyakitModel.php';
$PenyakitModel = new PenyakitModel();

$semuaDataPenyakit = $PenyakitModel->dataPenyakit();


include_once 'View/ListPenyakit.php';
?>
