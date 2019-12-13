<?php

$page = new Page;
$page->header();

//This setup is temporary but does indeed work.
if (isset($_POST['search'])){
$results = new Restaurant;
$search = $results->restaurantSearch($_POST['search']);
foreach ($search as $result ) {
  echo "<a href='$result->name'>".$result->name."</a>"; //URL does not currently work
  }
}
$page->footer();
