<?php
  session_start();
  $_SESSION['user'] = $user;
  $_SESSION['pass'] = $pass;
  header("Location:./pageHome.php");
?>