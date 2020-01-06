<?php
$restaurant = new Restaurant;
$RID = $_GET['id']; // this line may be redundant, can we pass the get value along directly wihtout any harm?
$details = $restaurant->getRestuarantByID($RID);
if (isset($details->restaurantID)) {
  echo "
    <section class='hero is-primary is-1'>
        <div class='hero-body'>
            <div class='container restaurant-info'>
                <h1 class='title is-uppercase'>
                    $details->name
                </h1>
                <h2 class='subtitle'>
                    <strong >Description:</strong> $details->description
                </h2>
                <h2 class='subtitle'>
                    <strong >Location:</strong> $details->location
                </h2>
                <h2 class='subtitle'>
                    <strong >Contact:</strong> $details->contact
                </h2>
            </div>
        </div>
    </section>"
;
} else {

  echo "It looks like you're lost! This page doesn't currently Exist! <a href='index.php'>Back to Home</a>";
  die;
}
//The above check with output the message and a link to the hompeage if the ID isn't found. Otherwise it will load the restaurant view
?>
