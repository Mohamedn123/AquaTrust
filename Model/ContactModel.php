<?php
require_once __DIR__.'/../Shared/Database/DatabaseConnect.php';
class ContactModel{
    private $ID;
    private $Name;
    private $Email;
    private $Subject;
    private $Message;

    public function __construct($Name, $Email, $Subject, $Message)
    {
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Subject = $Subject;
        $this->Message = $Message;
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
    public function getEmail()
    {
        return $this->Email;
    }
    public function getSubject()
    {
        return $this->Subject;
    }
    public function getMessage()
    {
        return $this->Message;
    }

    public function Create(){
        $sql = "INSERT INTO `Contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('".$this->Name."' , '".$this->Email."',
        '".$this->Subject."' , '".$this->Message."')";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }
    public function Select(){
        $sql = "SELECT * FROM `Contact`";
        $Database = new DatabaseConnect();
        $result = $Database->execute($sql);
        if ($result->num_rows>0){
            $contacts = array();
            $x=0;
            while($row = mysqli_fetch_array($result)){
                $contacts[$x] = new self($row['Name'] , $row['Email'] , $row['Subject'] , $row['Message']);
                $contacts[$x]->setID($row['ID']);
                $x++;
            }
            return $contacts;
        }
    }
    public function Delete(){
        $sql = "DELETE FROM `Contact` WHERE ID = '".$this->ID."'";
        $Database = new DatabaseConnect();
        $Database->execute($sql);
        $Database->closeConnection();
    }



}
?>