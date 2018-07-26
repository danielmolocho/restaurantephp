<?php
session_start();
  unset($_SESSION["usuario"]); 
  session_destroy();
  header("location:login_admin.html");
  exit;
?>