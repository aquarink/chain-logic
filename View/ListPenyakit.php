<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Penyakit Louhan | Budi Santoso</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
</head>
<body style="background-color:#b5b5b5">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LOHAN APP</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="?"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
          <li class="active"><a href="?url=penyakit"><i class="glyphicon glyphicon-heart"></i> Penyakit</a></li>
          <li><a href="?url=user"><i class="glyphicon glyphicon-plus"></i> Konsultasi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a target="_blank" href="?url=login">Login Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <?php foreach($semuaDataPenyakit as $penyakit) { ?>
      <div class="col-md-3"  data-toggle="modal" data-target="#myModal<?php echo $penyakit['id_penyakit']; ?>">
        <center><h6><?php echo strtoupper($penyakit['nama_penyakit']); ?></h6></center>
        <div class="panel panel-default">
          <div class="panel-body" style="padding:5px">
            <img src="<?php echo $penyakit['photo']; ?>" class="img img-responsive" style="height:200px">
          </div>
        </div>
      </div>
      <?php } ?>

      <?php foreach($semuaDataPenyakit as $penyakitModal) { ?>
        <div id="myModal<?php echo $penyakitModal['id_penyakit']; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"><?php echo strtoupper($penyakitModal['nama_penyakit']); ?></h4>
              </div>
              <div class="modal-body">
                <h5>Penyebab</h5>
                <p><?php echo $penyakitModal['penyebab']; ?></p>
                <hr>
                <h5>Keterangan</h5>
                <p><?php echo $penyakitModal['keterangan']; ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-log-out"></i> Keluar</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="footer navbar-fixed-bottom">
          <div class="alert alert-warning" style="margin-bottom: 0px;">
            <center>
              <marquee behavior="scroll" direction="left">Selamat Datanag di Budi Louhan Center</marquee>
            </center>
          </div>
        </div>
      </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
