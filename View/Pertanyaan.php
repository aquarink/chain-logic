<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pertanyaan Penyakit Louhan | Budi Santoso</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
  <style media="screen">
  .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
    margin-bottom: 10px;
  }
  .form-signin .checkbox {
    font-weight: normal;
  }
  .form-signin .form-control {
    position: relative;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  </style>
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
    <?php
    foreach ($ambilPertanyaanById as $pertanyaan) {
      ?>
      <form action="" method="POST">
        <center>
          <h3 class="form-signin-heading">No.<?php echo $_GET['id'].'. '.$pertanyaan['pertanyaan']?> ?</h3>
          <div class="radio">
            <label><input type="radio" name="jawab" value="1">Ya.! Betul</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="jawab" value="2">Tidak..!</label>
          </div>
          <div class="checkbox">
            <label>
              <?php
              if(isset($pesan)) {
                echo '<i style="color:red">'.$pesan.'</i>';
              } else {
                echo '<i>Pilih salah satu, tidak boleh kosong</i>';
              }
              ?>
              <input type="hidden" name="id_pertanyaan" value="<?php echo $_GET['id']+1; ?>">
            </label>
          </div>
          <input name="start_tanya" class="btn btn-lg btn-primary btn-block" style="width:100px" type="submit" value="Proses">
          <br>
          <?php if(isset($skip)) { echo $skip; } ?>
        </center>
      </form>
      <?php } ?>
    </div>

    <script src="Library/js/jquery.min.js"></script>
    <script src="Library/js/bootstrap.min.js"></script>
  </body>
  </html>
