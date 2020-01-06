<?php
//This basically will only load the admin class needed when logged in. This controller will be in charge of the view loading process and so on
require_once APPROOT.'/model/Admin.class.php';
 // This will instantiate a new admin class object and from here we can work with logging in

//This is a temporary fix for credentials not set, basically just prevents anyone from being able to use the URL to skip admin login
if ($_GET['page']==="admin" && isset($_SESSION['logged_in']) === true) {
  $page->body('admin');
} elseif ($_GET['page']==="newRestaurant" && isset($_SESSION['logged_in']) === true) {
  $page->body('newRestaurant');
} else {
  header("Location: ".URLROOT."/index.php?page=login");
  // This will redirect someone trying to directly access the admin view back to the login page
}
if (isset($_POST['Register'])) {
  $addNew = new Admin;
  $register = $addNew->addRestaurant($_POST);
  header("Location: ".URLROOT."/index.php?page=all");
}
