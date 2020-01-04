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
Welcome Admin! <br>
Reviews to be Approved:
<table border = 1>
  <tr>
    <th>Restaurant</th>
    <th>cost</th>
    <th>quality of food</th>
    <th>quality of service</th>
    <th>cleanliness</th>
    <th>service speed</th>
    <th>value</th>
    <th>allergy info</th>
    <th>overall</th>
    <th>Review</th>
    <th>Approve/Reject</th>
  </tr>
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
      <td>
        <form class='' action='index.php?page=admin' method='post'>
        <input type='submit' name='ACCEPT' value='ACCEPT'>
        <input type='submit' name='REJECT' value='REJECT'>
        <input type='hidden' name='reviewID' value='$pending->reviewID' >
        </form>
      </td>
    </tr>";
  }
   ?>
</table>
