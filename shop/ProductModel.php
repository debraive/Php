<?php
class ProductModel{
    public $db;
    public function __construct(){
      try {
        $this->db = new PDO("mysql:host=localhost;dbname=Shop", "root", "root");
      }
      catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
      }
    }

    public function add($productName, $productCost, $productDescription){
        $req = $this->db->prepare("INSERT INTO product (name,cost,description) VALUES (?,?,?)");
        $req->execute([$productName, $productCost, $productDescription]);
    }

    public function list(){
      return $dbProduct = $this->db->query("SELECT * FROM product");
    }
}

 ?>
