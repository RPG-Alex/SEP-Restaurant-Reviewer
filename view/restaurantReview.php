<?php
// basic layout of how all reviews could be listed for restaurant. Then use some javascript and CSS on the client side to hide them until expanded or what have you.
$allReviews = new Review;
$reviewSet= $allReviews->getAllReviewsForRestaurant($_GET['id']);
//Below will Generate the reviews previously posted

?>
<div class="container">
  <div class="accordion-container">

  <h2 class="title">Reviews</h2>

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
                <span>$review->cost / 10</span>
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