<?php
require __DIR__."/../Shared/Database/DatabaseConnect.php";
class CertificateModel{
    private $ID;
    private $Title;
    private $ImagePath;

    public function __construct($Title, $ImagePath)
    {
        $this->Title = $Title;
        $this->ImagePath = $ImagePath;
    }
    public function setID($ID): void
    {
        $this->ID = $ID;
    }
    public function getID()
    {
        return $this->ID;
    }
    public function getTitle()
    {
        return $this->Title;
    }
    public function getImagePath()
    {
        return $this->ImagePath;
    }
    public function Create(){
        $sql = "INSERT INTO `Certificates`(`Title`, `ImagePath`) VALUES ('".$this->Title."' , '".$this->ImagePath."')";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }
    public function GetAllCertificates(){
        $sql = "SELECT * FROM `Certificates`";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        $Database->closeConnection();
        if ($Result->num_rows > 0){
            $Certificates = array();
            $x = 0;
            while($row = mysqli_fetch_array($Result)){
                $Certificates[$x] = new self($row['Title'] , $row['ImagePath']);
                $Certificates[$x]->setID($row['ID']);
                $x++;
            }
            return $Certificates;
        }
    }
    public function Delete(){
        $sql = "DELETE FROM `Certificates` WHERE ID = '".$this->ID."'";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }



}
?>