<?php
//This class is meant to contain the queries needed for the Admin:
// Login, data CRUD, etc.
  class Admin extends Database {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }
    public function login(){
      //need to write a function to log in
    }
    public function getReviewsToApprove(){
      // need to write a function to get all reviews in need of approval
    }
    public function approveReview(){
      //This function should udpate the Database so a review is approved and made live
    }
    public function rejectReview(){
      //This function should reject a review and purge it from teh DB
    }
    public function addRestaurant(){
      //This is a function to add all the details for a new restaurant
    }
    public function updateRestaurant(){
      // same as addRestaurant but updates an existing restaurant details
    }
  }

 ?>
