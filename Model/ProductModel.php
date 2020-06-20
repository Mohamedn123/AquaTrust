<?php
require_once __DIR__.'/../Shared/Database/DatabaseConnect.php';
class ProductModel{
    private $ID;
    private $Name;
    private $Description;
    private $Type;

    public function __construct($Name, $Description, $Type)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Type = $Type;
    }

    public function setID($ID): void
    {
        $this->ID = $ID;
    }
    public function getID()
    {
        return $this->ID;
    }
    public function getName()
    {
        return $this->Name;
    }
    public function getDescription()
    {
        return $this->Description;
    }
    public function getType()
    {
        return $this->Type;
    }

    public function Create(){
        $Database = new DatabaseConnect();
        $sql = 'INSERT INTO `product`(`Name`, `Description`, `Type`) VALUES ("'.$this->Name.'" , "'.$this->Description.'","'.$this->Type.'")';
        $Result = $Database->execute($sql);
        $Database->closeConnection();
        return $Result;
    }
    public function GetProductByType(){
        $sql = "SELECT * FROM `product` WHERE Type='".$this->Type."'";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        $Database->closeConnection();
        $Data = array();
        $x = 0;
        while ($row = mysqli_fetch_array($Result)){
            $Data[$x] = new self($row['Name'] , $row['Description'] , $row['Type']);
            $Data[$x]->setID($row['ID']);
            $x++;
        }
        return $Data;
    }
    public function GetProductByID(){
        $sql = "SELECT * FROM `product` WHERE ID = '".$this->ID."' ";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        $Database->closeConnection();
        if ($Result->num_rows > 0){
            $row = mysqli_fetch_array($Result);
            $Product = new self($row['Name'] , $row['Description'] , $row['Type']);
            $Product->setID($row['ID']);
            return $Product;
        }
        else{
            return null;
        }
    }
    public function GetAllProducts(){
        $sql = "SELECT * FROM `product`";
        $Database = new DatabaseConnect();
        $Result = $Database->execute($sql);
        if ($Result->num_rows >0){
            $Products = array();
            $x=0;
            while ($row = mysqli_fetch_array($Result)){
                $Products[$x] = new self($row['Name'] , $row['Description'] , $row['Type']);
                $Products[$x]->setID($row['ID']);
                $x++;
            }
            return $Products;
        }
    }
    public function delete(){

        $sql = "DELETE FROM `product` WHERE ID = '".$this->ID."'";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
    }
    public function Edit(){
        $sql = 'UPDATE `product` SET `Name`="'.$this->Name.'",`Description`="'.$this->Description.'",`Type`="'.$this->Type.'" WHERE ID = "'.$this->ID.'"';
        echo $sql;
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }



}
?>
