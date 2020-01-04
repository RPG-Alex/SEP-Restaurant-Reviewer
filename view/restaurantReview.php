<?php
// basic layout of how all reviews could be listed for restaurant. Then use some javascript and CSS on the client side to hide them until expanded or what have you.
$allReviews = new Review;
$reviewSet= $allReviews->getAllReviewsForRestaurant($_GET['id']);
//Below will Generate the reviews previously posted
echo "<div class='container'>
 <br>
 <hr>
 <h1><b>Reviews:</b></h1>
 <br>";
foreach ($reviewSet as $review) {
  if ($review->approved == 1) {
    echo "
     <table>
       <tr>
         <td>Cost</td>
         <td>$review->cost</td>
       </tr>
       <tr>
         <td>Quality of Food</td>
         <td>$review->qfood</td>
       </tr>
       <tr>
         <td>Quality of Service</td>
         <td>$review->qservice</td>
       </tr>
       <tr>
         <td>Cleanliness</td>
         <td>$review->qclean</td>
       </tr>
       <tr>
         <td>Expedience</td>
         <td>$review->spservice</td>
       </tr>
       <tr>
         <td>Value</td>
         <td>$review->value</td>
       </tr>
       <tr>
         <td>Allergy Info Given</td>
         <td>";
         if ($review->allergyInfo === 1) {
           echo "Yes";
         } else {
           echo "No";
         }
         echo "</td>
       </tr>
       <tr>
         <td>Overall Review</td>
         <td>$review->overall</td>
       </tr>
       <tr>
         <th>Review: </th>
         <td>$review->shortReview</td>
       </tr>
     </table>
     <br>
  ";
  }
}
echo "</div>";
