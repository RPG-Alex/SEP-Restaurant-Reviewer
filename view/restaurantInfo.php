<?php
$restaurant = new Restaurant;
$RID = $_GET['id'];// this line may be redundant, can we pass the get value along directly wihtout any harm? 
$details = $restaurant->getRestuarantByID($RID);
//need to create a catch here. in the event an ID is input that is not valid, sometihng like 'sorry the page you are looking for doesn't exist'
?>
    <div class="container hero is-medium is-primary is-fluid">
        <br/>
        <h3 class="title has-text-dark"><strong>Restaurant Name:</strong> <?php echo $details->name; ?></h3>
        <p class="subtitle has-text-dark">
            <strong class="has-text-dark">description:</strong> <?php echo $details->description; ?>
        </p>
        <p class="subtitle has-text-dark">
            <strong class="has-text-dark">Location:</strong> <?php echo $details->location; ?>
        </p>
        <p class="subtitle has-text-dark">
            <strong class="has-text-dark">Contact:</strong> <?php echo $details->contact; ?>
        </p>
        <hr/>
    </div>