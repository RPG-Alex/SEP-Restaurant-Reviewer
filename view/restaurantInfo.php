<?php
//This whole view needs to be redone to load in the resataurant template, and linked to the specific restaurant info
//$restaurant = $test->getRestuarantByID($id); //Don't forget to pass the ID at some point!
 ?>



    <h3>Restaurant Name: <?php echo $restaurant->name; ?></h3>
    <p><b>description: </b><?php echo $restaurant->description; ?></p>
    <p><b>Location: </b><?php echo $restaurant->location; ?></p>
    <p><b>Contact: </b><?php echo $restaurant->contact; ?></p>
