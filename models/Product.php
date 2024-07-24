<?php

class Product {
    public $db;
    public function __construct() {
       $this->db = new Database();
    }
    public function getAll(){
        $sql = "SELECT * FROM product WHERE 1";
        return $this->db->getAll($sql);
    }

    public function insert($name, $price, $img){
        $sql = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name', $price, '$img')";
        $this->db->insert($sql);
    }

}