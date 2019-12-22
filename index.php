<?php
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);
//
require_once "controller/base.php";
require_once "controller/init.php";
$page = new Page;
$page->header();
$pageRequested= isset($_GET['page']);
if ($pageRequested){
  if ($_GET ['page']==="search"){
    $page->body('home');
  } elseif ($_GET['page']==="about") {
    $page->body('../about');
  } elseif ($_GET['page']==="restaurant" && isset($_GET['id'])) {
    $page->body('restaurantInfo');
    $page->body('postReview');
    $page->body('restaurantReview');
  }
} else {
  $page->body('home');
}
$page->footer();
