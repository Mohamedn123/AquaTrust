<?php
require __DIR__.'/../Model/NewsModel.php';
if (isset($_POST['CreateNews'])){
    NewsController::CreateNews();
}
if (isset($_GET['delete'])){
    NewsController::Delete();
}
if (isset($_POST['EditNews'])){
    NewsController::Edit();
}

class NewsController{

    public function UploadImage(){
        if (isset($_FILES['image'])){
            $file = $_FILES['image'];

            $file_name = $file['name'];
            $file_temp = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];


            $file_ext = explode('.' , $file_name);
            $file_ext = strtolower(end($file_ext));

            $allowed = array('jpeg' , 'jpg' , 'png');

            if (in_array($file_ext , $allowed) && $file_error === 0){
                $file_name_new = uniqid('' , true) . '.' . $file_ext;
                $file_destination = '../Images/News/'.$file_name_new;
                if (move_uploaded_file($file_temp , $file_destination)){
                    return "../".$file_destination;
                }
                else{
                    return null;
                }
            }
            else{
                return null;
            }
        }
    }


    public function CreateNews(){
        $UploadedFile = self::UploadImage();
        if ($UploadedFile == null){
            header("Location:../View/AdminPanel/CreateNews.php?&status=faildtoupload");
            exit;
        }
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
        $NewsModel = new NewsModel($Title , $Description , $UploadedFile);

        $NewsModel->Create();
        header("Location:../View/AdminPanel/ViewAllNews.php");
        exit();
    }

    public function GetAllNews(){
        $NewsModel = new NewsModel(null , null , null);
        $News = $NewsModel->GetAll();
        return $News;
    }
    public function getByID($ID){
        $NewsModel = new NewsModel(null , null , null);
        $NewsModel->setID($ID);
        return $NewsModel->getByID();
    }
    public function Delete(){
        $ID = $_GET['delete'];
        $NewsModel = new NewsModel(null , null , null);
        $NewsModel->setID($ID);
        $NewsModel->Delete();
        header("Location:../View/AdminPanel/ViewAllNews.php");
        exit();
    }
    public function Edit(){
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
        $ID = $_POST['ID'];
        if ($_FILES['image']['error'] > 0){
            $NewsModel = new NewsModel($Title , $Description , null);
            $NewsModel->setID($ID);
            $NewsModel->Edit();
        }
        else{
            $UploadedFile = NewsController::UploadImage();
            $NewsModel = new NewsModel($Title , $Description , $UploadedFile);
            $NewsModel->setID($ID);
            $NewsModel->EditWithImage();
        }
            header("Location:../View/AdminPanel/ViewAllNews.php");
            exit();
    }
}
?>
