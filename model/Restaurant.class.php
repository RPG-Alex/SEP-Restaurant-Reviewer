<?php
//This class defines the functions needed to CRUD with the DB for public users
  class Restaurant extends Database {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }

    public function getRestaurants(){
      $this->db->query('SELECT * FROM restaurant');
      $results = $this->db->resultSet();
      return $results;
    }
    public function getRestuarantByID($id){
      $this->db->query('SELECT * FROM restaurant WHERE restaurantID = :id');
      $this->db->bind(':id',$id);
      $row=$this->db->single();

      return $row;
    }
    public function restaurantSearch($keyword){
      $this->db->query('SELECT * FROM restaurant WHERE name OR description OR location LIKE :keyword');
      $keyword = '%'.$keyword.'%'; 
      $this->db->bind(':keyword',$keyword);
      $results = $this->db->resultSet();
      return $results;
  }
}
