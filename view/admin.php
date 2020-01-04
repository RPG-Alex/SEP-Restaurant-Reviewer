<?php

error_reporting( E_ALL);
ini_set('display_errors',1);
$_SESSION['logged_in'] = true;
if (!isset($_SESSION['logged_in'])) {
  require_once '../controller/init.php';
  header('Location: '.APPROOT);
}
include_once '../controller/base.php';
include_once '../model/Database.class.php';
include_once '../model/Admin.class.php';
$reviews = new Admin;
$unapproved = $reviews->getAllUnapprovedReviews();
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
        <form class='' action='' method='post'>
        <input type='submit' name='ACCEPT' value='ACCEPT'>
        <input type='submit' name='REJECT' value='REJECT'>
        <input type='hidden' name='reviewID' value='$pending->reviewID' >
        </form>
      </td>
    </tr>";
  }
   ?>
</table>

<?php
if (isset($_POST)) {
  if (isset($_POST['ACCEPT'])) {
    $reviews->approveReview($_POST['reviewID']);
    header('Location: '.URLROOT);
  } elseif (isset($_POST['REJECT'])){
    $reviews->rejectReview($_POST['reviewID']);
    header('Location: '.URLROOT);
  }
}
