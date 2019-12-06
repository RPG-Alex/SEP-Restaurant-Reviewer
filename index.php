<?php
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);

//DETELETE ABOVE WHEN LIVE

$_SESSION['adminId'] = 'bob'; //This is just temporary -until the controller for logging in is finished
require_once "view/all/header.php";
if (!isset($_SESSION['adminId'])) {
    require_once "view/pages/home.php";
} elseif (isset($_SESSION['adminId'])) {
  require_once "view/pages/admin.php";
  echo $_SESSION['adminId'];
}
require_once "view/all/footer.php";
