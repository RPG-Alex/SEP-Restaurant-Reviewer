<?php
$restaurant = new Restaurant;
$RID = $_GET['id']; // this line may be redundant, can we pass the get value along directly wihtout any harm?
$details = $restaurant->getRestuarantByID($RID);
if (isset($details->restaurantID)) {
  echo "<div class='container hero is-medium is-primary is-fluid'>
      <div class='container hero is-medium is-primary is-fluid restaurant-info' style=''>
          <br/>
          <h1 class='title is-1'><strong>$details->name</strong></h1>
          <hr/>
          <h3 class='subtitle has-text-dark'>
              <strong class='has-text-dark'>Description:</strong>$details->description
          </h3>
          <h3 class='subtitle has-text-dark'>
              <strong class='has-text-dark'>Location:</strong>$details->location
          </h3>
          <h3 class='subtitle has-text-dark'>
              <strong class='has-text-dark'>Contact:</strong>$details->contact
          </h3>
          <hr/>
      </div>
  </div>"
;
} else {

  echo "It looks like you're lost! This page doesn't currently Exist! <a href='index.php'>Back to Home</a>";
  die;
}
//The above check with output the message and a link to the hompeage if the ID isn't found. Otherwise it will load the restaurant view
?>
