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
      $this->db->bind(':restaurantID',$review['rid']) ;
      $this->db->bind(':cost',$review['cost']);
      $this->db->bind(':qfood',$review['qfood']);
      $this->db->bind('qservice',$review['qservice']);
      $this->db->bind(':qclean',$review['qclean']);
      $this->db->bind(':spservice',$review['spservice']);
      $this->db->bind(':value',$review['value']);
      $this->db->bind(':allergyinfo',$review['allergyinfo']);
      $this->db->bind(':overall',$review['overall']);
      $this->db->bind(':shortReview',$review['shortReview']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
      //Still need to finish this, but as is it should insert all data needed for a review!
      // Need to add approved column to db, and set default value to false. Admin have ability to toggle.
    }
  }
