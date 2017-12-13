<?php
require "ProductModel.php";
require "ProductController.php";
$productController=new productController;
$action = isset($_GET["action"]) ? $_GET["action"] : "";
switch ($action) {
  case 'GetForm':
    $productController->GetForm();
    break;
  case 'newProduct':
    $productController->insertProduct();
    break;
  default:
    $productController->GetProductList();
    break;
}
 ?>
