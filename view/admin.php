<?php
  if (!isset($_SESSION['logged_in'])) {
    require_once '../controller/init.php';
    header('Location: '.URLROOT);
  }
  $reviews = new Admin;
  $unapproved = $reviews->getAllUnapprovedReviews();

  if (isset($_POST)) {
    if (isset($_POST['ACCEPT'])) {
      $reviews->approveReview($_POST['reviewID']);
      header('Location: '.URLROOT."/index.php?page=admin");
    } elseif (isset($_POST['REJECT'])){
      $reviews->rejectReview($_POST['reviewID']);
      header('Location: '.URLROOT."/index.php?page=admin");
    }
  }
?>

<!-- PLEASE STYLE ME -->
<section class="hero is-dark is-fullheight-with-navbar is-bold">
  <div class="container-fluid">
    <div class="has-text-centered">
      <h1 class="title is-1">Welcome Admin!</h1>
      <h3 class="title is-3">Reviews to be Approved:</h3>
    </div>
    <div class="container">
      <table class="table is-striped" style="margin: 0 auto;">
        <thead>
          <tr>
            <th>Restaurant</th>
            <th>Cost</th>
            <th>Food quality</th>
            <th>Service Quality</th>
            <th>Cleanliness</th>
            <th>Service speed</th>
            <th>Value</th>
            <th>Allergy info</th>
            <th>Overall</th>
            <th>Review</th>
            <th></th>
            <th></th>
          </tr>
        <thead>
        <?php
        foreach ($unapproved as $pending) {
          echo "<tr>
            <td>$pending->name</td>
            <td>$pending->cost</td>
            <td>$pending->qfood</td>
            <td>$pending->qservice</td>
            <td>$pending->qclean</td>
            <td>$pending->spservice</td>
            <td>$pending->value</td>
            <td>$pending->allergyInfo</td>
            <td>$pending->overall</td>
            <td>$pending->shortReview</td>
              <form class='' action='index.php?page=admin' method='post'>
              <td>
              <input class='button is-success' type='submit' name='ACCEPT' value='ACCEPT'>
              </td>
              <td>
              <input class='button is-danger' type='submit' name='REJECT' value='REJECT'>
              </td>
              <input type='hidden' name='reviewID' value='$pending->reviewID' >
              </form>
          </tr>";
        }
        ?>
      </table>
    </div>  
  </div>
</section>
