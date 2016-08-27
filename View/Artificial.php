<!DOCTYPE html>
<html lang="en">
<head>
  <title>Artificial Controller | Budi Santoso</title>
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
        <a class="navbar-brand" href="#">LOUHAN ADMIN</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="?url=adminhome"><i class="glyphicon glyphicon-heart"></i> Penyakit</a></li>
          <li><a href="?url=penyebab"><i class="glyphicon glyphicon-plus"></i> Penyebab</a></li>
          <li class="active"><a href="?url=artificial"><i class="glyphicon glyphicon-screenshot"></i> Artificial</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?url=keluar&out&session=true"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Artifisial</h3>
        </div>
        <div class="panel-body">
          <h4><?php if(isset($penyakitnya)) { echo strtoupper($penyakitnya);} else { echo 'Pilih Penyakit'; } ?></h4>
          <select onChange="window.location.href=this.value" class="form-control">
            <option value="" selected>Pilih Penyakit</option>
            <?php foreach ($dataPenyakit as $penyakit) { ?>
            <option value="?url=artificial&id=<?php echo $penyakit['id_penyakit'] ?>"><?php echo $penyakit['nama_penyakit'] ?></option>
            <?php } ?>
          </select>
          <hr>
          <h4>Pilih Penyebab</h4>
          <form class="" action="" method="post">
            <select name="penyebab" class="form-control">
              <option value="" selected>Pilih Penyebab</option>
              <?php foreach ($ambilSemuaPertanyaan as $penyebabData) { ?>
              <option value="<?php echo $penyebabData['id_pertanyaan']; ?>"><?php echo ucfirst($penyebabData['pertanyaan']); ?></option>
              <?php } ?>
            </select>
            <hr>
            <b style="color:red"><?php if(isset($pesan)) { echo $pesan; } ?></b>
            <hr>
            <input class="btn btn-success" type="submit" name="subPenyakit" value="Simpan">
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Histori Penyakit</h3>
        </div>
        <div class="panel-body">
          <?php foreach ($dataPenyakitBy as $penyakitData) { ?>
          <h4><?php echo ucfirst($penyakitData['nama_penyakit']) ?></h4>
          <?php } ?>
          <hr>
          <p>Penyebab</p>
          <ol>
            <?php foreach ($RelasiPenyakitPenyebab as $daftarRelasi) { ?>
            <li>
              <?php echo $daftarRelasi['pertanyaanNya']; ?>
              <a href="?url=artificial&id=<?php echo $_GET['id']; ?>&fact=<?php echo $daftarRelasi['relId']; ?>">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
            </li>
            <?php } ?>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(function(){
    $(document).on('focus', 'div.form-group-options div.input-group-option:last-child input', function(){
      var sInputGroupHtml = $(this).parent().html();
      var sInputGroupClasses = $(this).parent().attr('class');
      $(this).parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');
    });
    $(document).on('click', 'div.form-group-options .input-group-addon-remove', function(){
      $(this).parent().remove();
    });
  });
  </script>
</body>
</html>
