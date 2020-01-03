<?php
if (!isset($_SESSION['logged_in'])) {
  require_once "../controller/init.php";
  header("Location: ".APPROOT);
}
