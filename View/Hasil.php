<!DOCTYPE html>
<html lang="en">
<head>
  <title>Analisa Penyakit Louhan | Budi Santoso</title>
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
          <li><a href="?url=penyakit"><i class="glyphicon glyphicon-heart"></i> Penyakit</a></li>
          <li class="active"><a href="?url=user"><i class="glyphicon glyphicon-plus"></i> Konsultasi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?url=login">Login Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <center><h2>HASIL ANALISA</h2></center>
    <div class="panel-group">

      <div class="panel panel-primary">
        <div class="panel-heading"><center>Nama Penyakit</center></div>
        <div class="panel-body"><center>Panel Content</center></div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading"><center>Solusi Penyembuhan</center></div>
        <div class="panel-body"><center>Panel Content</center></div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading"><center>Penyebab</center></div>
        <div class="panel-body"><center>Panel Content</center></div>
      </div>

      <div class="panel panel-danger">
        <div class="panel-heading"><center>Ciri-Ciri</center></div>
        <div class="panel-body"><center>Panel Content</center></div>
      </div>
      <center style="padding-top: 10px" ><a class="btn btn-danger" href="?url=keluar&session=<?php echo $_GET['id']; ?>"><i class="glyphicon glyphicon-log-out"></i> Selsai</a></center>
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
