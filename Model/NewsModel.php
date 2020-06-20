<?php
require __DIR__.'/../Shared/Database/DatabaseConnect.php';
class NewsModel{
    private $ID;
    private $Title;
    private $Description;
    private $ImagePath;
    private $Time;

    public function __construct($Title, $Description, $ImagePath)
    {
        $this->Title = $Title;
        $this->Description = $Description;
        $this->ImagePath = $ImagePath;
    }
    public function Create(){
        $Database = new DatabaseConnect();
        $sql = "INSERT INTO `News`(`Title`, `Description`, `ImagePath`) VALUES ('".$this->Title."' , '".$this->Description."' , '".$this->ImagePath."')";
        $Result = $Database->execute($sql);
        $Database->closeConnection();

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
    public function getDescription()
    {
        return $this->Description;
    }
    public function getImagePath()
    {
        return $this->ImagePath;
    }

    /**
     * @param mixed $Time
     */
    public function setTime($Time): void
    {
        $this->Time = $Time;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->Time;
    }

    public function GetAll(){
        $sql = "SELECT * FROM `News` ORDER BY ID DESC";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        $Database->closeConnection();
        if ($Result->num_rows > 0){
            $News = array();
            $x = 0;
            while ($row = mysqli_fetch_array($Result)){
                $News[$x] = new self($row['Title'] , $row['Description'] , $row['ImagePath']);
                $News[$x]->setID($row['ID']);
                $x++;

            }
            return $News;
        }
        else{
            return null;
        }

    }

    public function getByID(){
        $sql = "SELECT * FROM `News` WHERE ID = '".$this->ID."'";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        if ($Result->num_rows > 0){
            $row = mysqli_fetch_array($Result);
            $News = new self($row['Title'] , $row['Description'] , $row['ImagePath']);
            $News->setID($row['ID']);
            $News->setTime($row['Time']);
            return $News;
        }
        else{
            return null;
        }
    }

    public function Delete(){
        $sql = "DELETE FROM `News` WHERE ID = '".$this->ID."'";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }
    public function Edit(){
        $sql = 'UPDATE `News` SET `Title`="'.$this->Title.'",`Description`="'.$this->Description.'" WHERE ID = '.$this->ID;
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }
    public function EditWithImage(){
        $sql = 'UPDATE `News` SET `Title`="'.$this->Title.'",`Description`="'.$this->Description.'",`ImagePath`="'.$this->ImagePath.'" WHERE ID='.$this->ID;
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }





}
?>
