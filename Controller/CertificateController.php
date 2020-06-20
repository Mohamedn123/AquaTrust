<?php
require __DIR__.'/../Model/CertificateModel.php';
if(isset($_POST['CreateCertificate'])){
    CertificateController::AddCertificate();
}
if (isset($_GET['delete'])){
    CertificateController::Delete();
}
class CertificateController{
    public function GetAll(){
        $CertificatesModel = new CertificateModel(null , null);
        return $CertificatesModel->GetAllCertificates();
    }
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
                $file_destination = '../Images/Certificates/'.$file_name_new;
                if (move_uploaded_file($file_temp , $file_destination)){
                    return '../'.$file_destination;
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
    public function AddCertificate(){
        $Result = CertificateController::UploadImage();
        if ($Result == null){
            header("Location:../View/AddCertificate.php?result=faild");
            exit();
        }
        else{
            $Title = $_POST['Title'];
            $CertificateModel = new CertificateModel($Title , $Result);
            $CertificateModel->Create();
            header("Location:../View/AdminPanel/ViewCertificates.php");
            exit();
        }
    }
    public function Delete(){
        $ID = $_GET['delete'];
        $CertificateModel = new CertificateModel(null , null);
        $CertificateModel->setID($ID);
        $CertificateModel->Delete();
        header("Location:../View/AdminPanel/ViewCertificates.php");
        exit();
    }
}
?>