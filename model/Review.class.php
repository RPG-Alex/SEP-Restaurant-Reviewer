<?php
  class Review extends Database {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }
    public function getAllReviewsForRestaurant($rid){
      $this->db->query('');// Need to finish writing this function
    }
    public function postReview($review){
      $this->db->query(''); // Need to finish this function
    }
  }
