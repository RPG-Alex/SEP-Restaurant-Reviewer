<?php
$allRestaurants = new Restaurant;
$restaurants=$allRestaurants->getRestaurants();
?>

<div class="container search-bar" style="max-width: 400px;">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Search</label>
        </div>
        <div class="field-body">
            <div class="field">
            <p class="control">
                <input id="filterRestaurants" class="input is-primary" type="text" placeholder="Find a restaurant" />
            </p>
            </div>
        </div>
    </div>
</div>

<section class="container hero">
    <div class="hero-body">
        <div class="table-container" style="width: 80%; margin: auto;">
            <table id="restaurants" class="table is-striped custom-table" style="margin: auto;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
                    $results = new Restaurant;
                    foreach ($restaurants as $result ) {
                    echo "
                        <tr class='is-rounded'>
                            <td>
                                $result->name
                            </td>
                            <td>
                                $result->description
                            </td>
                            <td>
                                $result->location
                            </td>
                            <td>
                                $result->contact
                            </td>
                            <td>
                                <a class='has-text-link' href='index.php?page=restaurant&amp;id=".$result->restaurantID."'>
                                view more
                                </a>
                            </td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>