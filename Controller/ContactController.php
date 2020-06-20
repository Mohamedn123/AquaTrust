<?php
require_once __DIR__.'/../Model/ContactModel.php';
if (isset($_POST['ContactUS'])){
    ContactController::Create();
}
if (isset($_GET['delete'])){
    ContactController::Delete();
}
class ContactController{
    public function Create(){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];
        $Contact = new ContactModel($Name , $Email , $Subject , $Message);
        $Contact->Create();
        header("Location:../View/Client/index.php?sucess=true#contact");
        exit();
    }
    public function SelectAll(){
        $ContactModel = new ContactModel(null , null, null,null);
        return $ContactModel->Select();
    }
    public function Delete(){
        $ID = $_GET['delete'];
        $ContactModel = new ContactModel(null , null , null , null);
        $ContactModel->setID($ID);
        $ContactModel->Delete();
        header("Location:../View/AdminPanel/ViewContactUS.php");
        exit();
    }
}
?>
