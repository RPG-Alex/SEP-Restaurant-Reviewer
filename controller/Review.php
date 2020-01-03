<?php
require_once APPROOT."/model/Review.class.php";
if (isset($_POST['Critique!'])) {
  $reviewDetails = [
    'rid' => $_POST['rid'],
    'cost' => $_POST['cost'],
    'qfood' => $_POST['qfood'],
    'qservice' => $_POST['qservice'],
    'qclean' => $_POST['qclean'],
    'spservice' => $_POST['spservice'],
    'value' => $_POST['value'],
    'allergyinfo' => $_POST['allergyInfo'],
    'overall' => $_POST['overall'],
    'shortReview' => $_POST['shortReview']
  ];

  $newReview = new Review;
  $newReview->postReview($reviewDetails);
  header("Location: ".URLROOT);
  echo "Review POSTED! Pending Approval!";
}
