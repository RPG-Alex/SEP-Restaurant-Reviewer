<?php
$restaurant = new Restaurant;
$RID = $_GET['id'];// this line may be redundant, can we pass the get value along directly wihtout any harm? 
$details = $restaurant->getRestuarantByID($RID);
//need to create a catch here. in the event an ID is input that is not valid, sometihng like 'sorry the page you are looking for doesn't exist'
?>
    <h3><b>Restaurant Name: <?php echo $details->name; ?></b></h3>
    <p><b>description: <?php echo $details->description; ?></b></p>
    <p><b>Location: <?php echo $details->location; ?></b></p>
    <p><b>Contact: <?php echo $details->contact; ?></b></p>
