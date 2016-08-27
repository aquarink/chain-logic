<!DOCTYPE html>
<html lang="en">
<head>
  <title>Penyebab Controller | Budi Santoso</title>
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
          <li class="active"><a href="?url=penyebab"><i class="glyphicon glyphicon-plus"></i> Penyebab</a></li>
          <li><a href="?url=artificial"><i class="glyphicon glyphicon-screenshot"></i> Artificial</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?url=keluar&out&session=true"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="col-md-12">
      <h4>List Penyebab</h4><button class="btn btn-success btn-xs" data-title="Tambah Data" data-toggle="modal" data-target="#tambah" ><span class="glyphicon glyphicon-plus"></span> Tambah Penyebab</button>

      <div class="table-responsive" style="background-color:#fff">
        <table id="mytable" class="table table-responsive">
          <tr>
            <th>Penyebab</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php foreach($ambilSemuaPertanyaan as $pertanyaan) { ?>
            <tr>
              <td><b><?php echo $pertanyaan['pertanyaan']; ?></b></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo $pertanyaan['id_pertanyaan']; ?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo $pertanyaan['id_pertanyaan']; ?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <ul class="pagination">
          <li><p data-placement="top" data-toggle="tooltip" title="Tambah"><button class="btn btn-success btn-xs" data-title="Tambah Data" data-toggle="modal" data-target="#tambah" ><span class="glyphicon glyphicon-plus"></span> Tambah Penyebab</button></p></li>
        </ul>
      </div>
    </div>
  </div>

  <?php foreach($ambilSemuaPertanyaan as $pertanyaanModal) { ?>
    <div class="modal fade" id="edit<?php echo $pertanyaanModal['id_pertanyaan']; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Edit Data Pertanyaan</h4>
          </div>
          <form action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input name="namaEdit" class="form-control " type="text" value="<?php echo $pertanyaanModal['pertanyaan']; ?>" autofocus="">
                <input type="hidden" name="idEdit" value="<?php echo $pertanyaanModal['id_pertanyaan']; ?>">
              </div>
            </div>
            <div class="modal-footer ">
              <input type="submit" name="btnEdit" class="btn btn-warning btn-lg" style="width: 100%;" value="Update Data">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="delete<?php echo $pertanyaanModal['id_pertanyaan']; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Hapus Daftar Pertanyaan</h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Apa Data Pertanyaan Ini Ingin Dihapus?</div>
          </div>
          <div class="modal-footer ">
            <form action="" method="post">
              <input type="hidden" name="idHps" value="<?php echo $pertanyaanModal['id_pertanyaan']; ?>">
              <input type="submit" name="btnHps" class="btn btn-danger btn-lg" style="width: 100%;" value="Hapus Data">
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Tambah Daftar Pertanyaan</h4>
          </div>
          <form action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input name="namaTmb" class="form-control " type="text" placeholder="Nama Penyebab" autofocus="">
              </div>
            <div class="modal-footer ">
              <input type="submit" name="btnTmb" class="btn btn-success btn-lg" style="width: 100%;" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
