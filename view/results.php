<h1>all the hotdogs</h1>

<?php
if (isset($_POST['search'])){
$test = new Restaurant;
$search = $test->restaurantSearch($_POST['search']);
foreach ($search as $result ) {
  echo $result->name; //This is bare bones but will return the queried names from the DB. can expand to add a description as well
  }
}
?>
