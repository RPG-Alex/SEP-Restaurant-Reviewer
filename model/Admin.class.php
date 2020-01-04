<?php
//This class is meant to contain the queries needed for the Admin:
// Login, data CRUD, etc.
  class Admin extends Database {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }
    public function login(){ // simply sets the session variable
      session_start();
      $_SESSION['logged_in'] = true;
    }
    public function logout(){
      unset($_SESSION['logged_in']);
    }
    public function getAllUnapprovedReviews(){
      $this->db->query('SELECT restaurant.restaurantID, restaurant.name, reviewID, cost, qfood, qservice, qclean, spservice, value, allergyInfo, overall, shortReview FROM review, restaurant WHERE review.approved = 0 AND restaurant.restaurantID = review.restaurantID'); //This will get all unapproved reviews
      $results = $this->db->resultSet();
      return $results;
    }
    public function getAllReviews(){
      $this->db->query('SELECT * FROM review');
      $results = $this->db->resultSet();
      return $results;
    }
    public function approveReview($reviewID){
      $this->db->query('UPDATE review SET approved = 1 WHERE reviewID = :reviewID');
      $this->db->bind(':reviewID',$reviewID);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function rejectReview($reviewID){
      $this->db->query('DELETE FROM review WHERE reviewID = :reviewID');
      $this->db->bind(':reviewID',$reviewID);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function addRestaurant($restaurant){
      $this->db->query('INSERT INTO restaurant (name,description,location,contact) VALUES (:name, :location,:contact)');
      $this->db->bind(':name', $restaurant['name']);
      $this->db->bind(':description', $restaurant['description']);
      $this->db->bind(':location', $restaurant['location']);
      $this->db->bind(':contact', $restaurant['contact']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function updateRestaurant($restaurant){
      $this->db->query('UPDATE restaurant SET name = :name, location = :location, contact = :contact WHERE restaurantID = :restaurantID');
      $this->db->bind(':name', $restaurant['name']);
      $this->db->bind(':description', $restaurant['description']);
      $this->db->bind(':location', $restaurant['location']);
      $this->db->bind(':contact', $restaurant['contact']);
      $this->db-bind(':restaurantID',$restaurant['restaurantID']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }
