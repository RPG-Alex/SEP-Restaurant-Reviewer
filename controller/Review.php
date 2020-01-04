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

//This is incase they don't submit a cost. The Db is set to have a cost. May change that later, and simply allow NULL or rewrite it and have two query fucntions,one for cost given and one for not. If stats are used, like average cost, this will have to be factored in, as 0 costs will bring average cost down, unintentionally. 
if ($reviewDetails['cost'] ==="") {
  $reviewDetails['cost'] = "0";
}
  $newReview = new Review;
  $newReview->postReview($reviewDetails);
  header("Location: ".URLROOT);
  echo "Review POSTED! Pending Approval!";
}
