<?php
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
      $this->db->query('SELECT * FROM restaurant WHERE name LIKE :keyword');
      $keyword = '%'.$keyword.'%'; //this works, though it looks kind of ugly. Will include results containing keyword, both before and after it from restaurant name. Can also expand to search other fields if needed.
      $this->db->bind(':keyword',$keyword);
      $results = $this->db->resultSet();
      return $results;
  }
}
