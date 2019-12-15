<?php
$restaurant = new Restaurant;
$RID = $_GET['id'];
$details = $restaurant->getRestuarantByID($RID);

?>
    <h3><b>Restaurant Name: <?php echo $details->name; ?></b></h3>
    <p><b>description: <?php echo $details->description; ?></b></p>
    <p><b>Location: <?php echo $details->location; ?></b></p>
    <p><b>Contact: <?php echo $details->contact; ?></b></p>
