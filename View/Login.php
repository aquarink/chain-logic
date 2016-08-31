<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin | Budi Santoso</title>
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
  <div class="container">
    <form class="form-signin" action="" method="POST">
      <center><h3 class="form-signin-heading">MASUKAN PASSWORD</h3></center>
      <label for="Password" class="sr-only">Password</label>
      <input style="text-align:center" name="Password" type="password" id="Password" class="form-control" placeholder="*********" required="" autofocus="">
      <div class="checkbox">
        <center>
          <?php if(isset($pesan)) {
            echo '<i style="color:red">'.$pesan.'</i>';
          } else {
            echo '<label><i>Jangan dikosongkan</i></label>';
          }?>
        </center>
      </div>
      <input name="Login" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
    </form>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
