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
    if ($review->approved == 0) {  //This checks if they are approved
      echo "
      <div class='accordion'>
        <div class='accordion-item'>
          <a><div>$review->shortReview <span style='float: right;'>$review->overall / 10</span></div></a>
          <div class='accordion-content'>
            <ul>
              <li>Quality: <span style='float: right;'>$review->qfood / 10</span></li>
              <li>Service<span style='float: right;'>$review->qservice / 10</span></li>
              <li>Cleanliness: <span style='float: right;'>$review->qclean / 10</span></li>
              <li>Speed of Service: <span style='float: right;'>$review->spservice / 10</span></li>
              <li>Cost: <span style='float: right;'>$review->cost / 10</span></li>
              <li>Value: <span style='float: right;'>$review->value / 10</span></li>
              <li>Allergy Info Provided: <span style='float: right;'>";
                if ($review->allergyInfo === 1) {
                  echo "Yes";
                } else {
                  echo "No";
                } 
                echo "
              </span></li>
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

<script>

  const items = document.querySelectorAll(".accordion a");

  function toggleAccordion(){
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
  }

  items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>