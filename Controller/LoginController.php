<?php

session_start();
if(isset($_SESSION['sesiadmin'])) {
  header('location: ?url=adminhome');
} else {
  if(isset($_POST['Login'])) {
    if(empty($_POST['Password'])) {
      $pesan = 'Mohon masukan password!';
    } else {
      $password = $_POST['Password'];
      if($password == 'admin') { // << password
        $_SESSION['sesiadmin'] = 1234567890;
        header('location: ?url=adminhome');
      } else {
        $pesan = 'Password salah!';
      }
    }
  }
}

include_once 'View/Login.php';
?>
