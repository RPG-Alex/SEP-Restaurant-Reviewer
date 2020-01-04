<?php
  // basic layout of how all reviews could be listed for restaurant. Then use some javascript and CSS on the client side to hide them until expanded or what have you.
  $allReviews = new Review;
  $reviewSet= $allReviews->getAllReviewsForRestaurant($_GET['id']);
  
  // Below calculates the average overall score for approved reviews
  $total = 0;
  $reviews = 0;
  foreach ($reviewSet as $review) {
    // this only counts approved scores into the average
    if ($review->approved){
      $total += $review->overall;
      $reviews ++;
    }
    // if there are reviews then calculate the mean average (rounding to 1dp)
    // no reviews returns 'No Reviews Yet'
    if ($reviews > 0) {
      $average = $total / $reviews;
      $averageRounded = 'Average: ' . round($average, $precision = 1, $mode = PHP_ROUND_HALF_UP) .'/10';
    } else {
      $averageRounded = "No Reviews Yet";
    }

  }
?>

<div class="container">
  <div class="accordion-container">

  <div>
    <div class="title is-4">Reviews
      <span style="float: right;">
        <?php
          echo $averageRounded;
        ?>
      </span>
    </div>
  </div>

  <?php

    foreach ($reviewSet as $review) {
    if ($review->approved == 1) {  //This checks if they are approved
      echo "
      <div class='accordion'>
        <div class='accordion-item'>
          <a>
            <div>
              $review->shortReview <span>$review->overall / 10</span>
            </div>
          </a>
          <div class='accordion-content'>
            <ul class='review-scores-list'>
              <li>Quality: 
                <span>$review->qfood / 10</span>
              </li>
              <li>Service:
                <span>$review->qservice / 10</span>
              </li>
              <li>Cleanliness: 
                <span>$review->qclean / 10</span>
              </li>
              <li>Speed of Service: 
                <span>$review->spservice / 10</span>
              </li>
              <li>Cost: 
                <span>£$review->cost</span>
              </li>
              <li>Value: 
                <span>$review->value / 10</span>
              </li>
              <li>Allergy Info Provided: 
                <span>";
                if ($review->allergyInfo === 1) {
                  echo "Yes";
                } else {
                  echo "No";
                } 
                echo "
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div> 
      ";
        }
      }
      ?>
  </div>
</div>

<!-- Selects all accordion links, onClick event toggles visibility in styles.css -->
<script>

  const items = document.querySelectorAll(".accordion a");

  function toggleAccordion(){
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
  }

  items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>