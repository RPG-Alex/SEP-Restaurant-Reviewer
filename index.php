<?php
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);

//
require_once "controller/base.php";
require_once "controller/init.php";

//Starting to think this may all want to be shifted to a controller? Getting a bit much for index.

$page = new Page;
$page->header();
$pageRequested= isset($_GET['page']);
if ($pageRequested == true){
  if ($_GET ['page']==="search"){
      $page->body('home'); //should search be its own view? using home is limiting modification of search features
  } elseif ($_GET['page']==="about") {
    $page->body('../about');
  } elseif ($_GET['page']==="restaurant" && isset($_GET['id'])) {
    $page->body('restaurantInfo');
    $page->body('postReview');
    $page->body('restaurantReview');
  } elseif ($_GET['page']==="login") {
    $page->body('admin-login');
  } elseif ($_GET['page']==="all") {
    $page->body('allRestaurants');
  } elseif ($_GET['page']==="admin") {
    //This checks if you are logged in and then and only then loads the admin view! Tested and working
    require_once APPROOT.'/controller/Admin.php';
  }
} else {
  $page->body('home');
}
$page->footer();
