<?php
$allRestaurants = new Restaurant;
$restaurants=$allRestaurants->getRestaurants();
//Above instantiates a new array of ALL restaurants.
//Array is: RestaurantID, name, description, location, contact Info.
//Beloew the PHP closing tag, write the deired HTML/CSS/JS! should be easy to implement, Thanks!

// Added the search results below, but need to style this as a table (name, description, location, overall rating) 
// We need to add a search bar to this page to filter teh table - could be done using a server call or through client side JS?
?>
If you are seeing this, the view loaded! Please delete me when you design this view

<?php
        $results = new Restaurant;
        foreach ($restaurants as $result ) {
        echo "
        <div class='is-rounded'>
            <a class='title has-text-link' href='index.php?page=restaurant&amp;id=".$result->restaurantID."'>
            ".$result->name.
            "</a>
            <p>".$result->description."</p>
            <p>Location: ".$result->location.'</p>
            </div>
            <hr/>';
            }
        ?>