<?php
require_once __DIR__.'/../Model/UserModel.php';
if (isset($_POST['createUser'])){
    UserController::CreateUser();
}
if (isset($_POST['Login'])){
    UserController::Login();
}
if (isset($_GET['delete'])){
    UserController::Delete();
}
class UserController{
    public function CreateUser(){
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $UserModel = new UserModel($Username , $Password);
        $Result1 = $UserModel->CheckUsername();
        if ($Result1){
            header("Location:../View/AdminPanel/CreateUser.php?result=found");
            exit;
        }
        else{
            $UserModel->Create();
            header("Location:../View/AdminPanel/ViewUsers.php");
            exit;
        }

    }
    public function Logout(){

    }

    public function Login(){
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $UserModel = new UserModel($Username , $Password);
        $Result = $UserModel->Login();
        if ($Result == null){
            header("Location:../View/AdminPanel/Login.php?result=fail");
            exit;
        }
        else{
            session_start();
            $_SESSION['UserID'] = $Result->getID();
            header("Location:../View/AdminPanel/ViewUsers.php");
            exit;
        }
    }
    public function GetAllUsers(){
        $UsersModel = new UserModel(null , null);
        return $UsersModel->SelectAll();
    }
    public function Delete(){
        $ID = $_GET['delete'];
        $UserModel = new UserModel(null , null);
        $UserModel->setID($ID);
        $UserModel->DeleteUser();
        header("Location:../View/AdminPanel/ViewUsers.php");
        exit();
    }
}
?>