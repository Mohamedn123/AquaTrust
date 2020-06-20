<?php
include_once("../Model/HomePageModel.php");
class HomePageController{
    public function getData(){
        $HomePageModel = new HomePageModel(null , null , null , null);
        $Result = $HomePageModel->getData();
        return $Result;
    }
}
?>