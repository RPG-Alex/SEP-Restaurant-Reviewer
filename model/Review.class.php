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
      $this->db->query('INSERT INTO review (restaurantID, cost, qfood, qservice, qclean, spservice, value, allergyinfo, overall, shortReview) VALUES (:restaurantID, :cost, :qfood, :qservice, :qclean, :spservice, :value, :allergyinfo, :overall, :shortReview)');
      $this->db->bind(':restaurantID',$rid) ;
      $this->db->bind(':cost',$cost);
      $this->db->bind(':qfood',$qfood);
      $this->db->bind('qservice',$qservice);
      $this->db->bind(':qclean',$qclean);
      $this->db->bind(':spservice',$spservice);
      $this->db->bind(':value',$value);
      $this->db->bind(':allergyinfo',$allergyinfo);
      $this->db->bind(':overall',$overall);
      $this->db->bind(':shortReview',$shortReview);
      //Still need to finish this, but as is it should insert all data needed for a review!
    }
  }
