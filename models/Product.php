<?php

class Product extends Model {
    public $id;
    public $image;
    public function __construct() {
        parent::__construct();
    }
    public function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO products(id, image) VALUES(:id, :image)');
            $query->execute(['id'=>$datos['id'], 'image'=>$datos['image']]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}