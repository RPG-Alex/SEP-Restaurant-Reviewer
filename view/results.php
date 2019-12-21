<?php

$page = new Page;
$page->header();

?>;
<div class="container column level-right">
  <?php
  if (isset($_POST['search'])){
    $results = new Restaurant;
    $search = $results->restaurantSearch($_POST['search']);
    foreach ($search as $result ) {
      echo "<a href='index.php?page=restaurant&amp;id=".$result->restaurantID."'>".$result->name."</a><p>".$result->description."</p><p>Location: ".$result->location;
      }
    }
  ?>;
</div>

<?php

$page->footer();

?>;
