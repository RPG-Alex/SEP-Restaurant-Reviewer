<?php

$page = new Page;
$page->header();

//Temporary setup but is functional.
if (isset($_POST['search'])){
$results = new Restaurant;
$search = $results->restaurantSearch($_POST['search']);
foreach ($search as $result ) {
  echo "<a href='index.php?page=restaurant&amp;id=".$result->restaurantID."'>".$result->name."</a><p>".$result->description."</p><p>Location: ".$result->location;
  }
}
$page->footer();
