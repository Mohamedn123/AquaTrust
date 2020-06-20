<?php 
include_once("../Shared/Database/DatabaseConnect.php");
class HomePageModel{
    private $ID;
    private $About;
    private $Mission;
    private $Vision;
    public function __construct($ID , $About , $Vision , $Mission)
    {
        $this->ID = $ID;  
        $this->About = $About;
        $this->Mission = $Mission;
        $this->Vision = $Vision; 
    }
    public function getID(){
        return $this->ID;
    }
    public function getAbout(){
        return $this->About;
    }
    public function getMission(){
        return $this->Mission;
    }
    public function getVision(){
        return $this->Vision;
    }



    public function GetData (){
        $sql = "SELECT * FROM `HomePage`";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        if ($Result->num_rows > 0){
            $row = mysqli_fetch_array($Result);
            $Object = new self($row['ID'] , $row['About'] , $row['Vision'] , $row['Mission']);
            return $Object;
        }
    }

}

?>