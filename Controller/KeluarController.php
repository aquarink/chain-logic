<?php

if(isset($_GET['out'])) {
  if($_GET['session'] == true) {
    session_start();
    session_unset();
    session_destroy();
    header('location: ?url=login');
  }
} else {
  session_start();
  session_unset();
  session_destroy();
  header('location: ?url=user&logout_succeess');
}

?>
