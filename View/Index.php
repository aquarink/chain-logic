<!DOCTYPE html>
<html lang="en">
<head>
  <title>Louhan Care | Budi Santoso</title>
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
          <li class="active"><a href="?p=home"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
          <li><a href="?url=penyakit"><i class="glyphicon glyphicon-heart"></i> Penyakit</a></li>
          <li><a href="?url=user"><i class="glyphicon glyphicon-plus"></i> Konsultasi</a></li>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="Library/images/11.jpg" alt="Louhan Satu" width="100%" style="height:400px">
          <div class="carousel-caption">
            <h3>Louhan Satu</h3>
            <p>Keterangan Louhan Satu</p>
          </div>
        </div>

        <div class="item">
          <img src="Library/images/22.jpg" alt="Louhan Dua" width="100%" style="height:400px">
          <div class="carousel-caption">
            <h3>Louhan Dua</h3>
            <p>Keterangan Louhan Dua</p>
          </div>
        </div>

        <div class="item">
          <img src="Library/images/33.jpg" alt="Louhan Tiga" width="100%" style="height:400px">
          <div class="carousel-caption">
            <h3>Louhan Tiga</h3>
            <p>Keterangan Louhan Tiga</p>
          </div>
        </div>

        <div class="item">
          <img src="Library/images/44.jpg" alt="Louhan Empat" width="100%" style="height:400px">
          <div class="carousel-caption">
            <h3>Louhan Empat</h3>
            <p>Keterangan Louhan Empat</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
