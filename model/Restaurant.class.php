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

  }
