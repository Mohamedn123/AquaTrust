<?php
require_once __DIR__.'/../Model/ProductModel.php';
if (isset($_POST['AddProduct'])){
    ProductController::Add();
}
if (isset($_GET['delete'])){
    ProductController::delete();
}
if (isset($_POST['EditProduct'])){
    ProductController::Edit();
}
class ProductController{
    public function delete(){
        $ProductModel = new ProductModel(null , null ,null);
        $ID = $_GET['delete'];
        $ProductModel->setID($ID);
        $ProductModel->delete();
        header("Location:../View/AdminPanel/ViewAllProducts.php");
        exit();
    }
    public function Add(){
        $Name = $_POST['name'];
        $Description = $_POST['description'];
        $Type = $_POST['type'];
        $Product = new ProductModel($Name , $Description , $Type);
        $Product->Create();
        header("Location:../View/AdminPanel/ViewAllProducts.php");
        exit();
    }
    public function getProductByType($Type){
        $Product = new ProductModel(null , null , $Type);
        $Products = $Product->GetProductByType();
        return $Products;
    }
    public function getProductByID($ID){
        $ProductObject = new ProductModel(null , null , null);
        $ProductObject->setID($ID);
        return $ProductObject->GetProductByID();
    }
    public function getAllProducts(){
        $ProductModel = new ProductModel(null , null, null);
        return $ProductModel->GetAllProducts();
    }
    public function Edit(){
        $ID = $_POST['ID'];
        $Name = $_POST['name'];
        $Description = $_POST['description'];
        $Type = $_POST['type'];
        $ProductModel = new ProductModel($Name , $Description , $Type);
        $ProductModel->setID($ID);
        $ProductModel->Edit();
        header("Location:../View/AdminPanel/ViewAllProducts.php");
        exit();
    }
}
?>