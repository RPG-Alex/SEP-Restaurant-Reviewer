<?php
$restaurant = new Restaurant;
$RID = $_GET['id'];// this line may be redundant, can we pass the get value along directly wihtout any harm? 
$details = $restaurant->getRestuarantByID($RID);
//need to create a catch here. in the event an ID is input that is not valid, sometihng like 'sorry the page you are looking for doesn't exist'
?>
    <div class="container hero is-medium is-primary is-fluid">
        <div class="container hero is-medium is-primary is-fluid restaurant-info" style="">
            <br/>
            <h1 class="title"><strong>Restaurant Name:</strong> <?php echo $details->name; ?></h1>
            <hr/>
            <h3 class="subtitle has-text-dark">
                <strong class="has-text-dark">Description:</strong> <?php echo $details->description; ?>
            </h3>
            <h3 class="subtitle has-text-dark">
                <strong class="has-text-dark">Location:</strong> <?php echo $details->location; ?>
            </h3>
            <h3 class="subtitle has-text-dark">
                <strong class="has-text-dark">Contact:</strong> <?php echo $details->contact; ?>
            </h3>
            <hr/>
        </div>
    </div>