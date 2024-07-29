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
    public function getOne($id){
        $sql = "SELECT * FROM product WHERE id=$id";
        return $this->db->getOne($sql);
    }

    public function insert($name, $price, $img){
        $sql = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name', $price, '$img')";
        $this->db->exec($sql);
    }

    public function update($id, $name, $price, $img){
        if(empty($img)){
            $sql = "UPDATE `product` SET `name`='$name',`price`=$price WHERE id = $id";
        }else{
            $sql = "UPDATE `product` SET `name`='$name',`price`=$price,`image`='$img' WHERE id = $id";
        }
        
        $this->db->exec($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM `product` WHERE id=$id";
        $this->db->exec($sql);
    }

}