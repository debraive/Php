<?php

class ProductController
{
  public $ProductModel;
  public function __construct(){
    $this->ProductModel = new ProductModel;
  }

  public function GetForm(){
    require "ProductForm.php";
  }
  public function GetProductList(){
    $tableau = $this->ProductModel->List();
    require "ProductList.php";
  }

  public function insertProduct(){
  $name=$_POST['name'];
  $cost=$_POST['cost'];
  $desc=$_POST['desc'];
  $this->ProductModel->add($name,$cost,$desc);
  header('location:index.php');
  }
}
 ?>
