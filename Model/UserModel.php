<?php
require_once __DIR__.'/../Shared/Database/DatabaseConnect.php';
    class UserModel{
        private $ID;
        private $Username;
        private $Password;

        public function __construct($Username, $Password)
        {
            $this->Username = $Username;
            $this->Password = $Password;
        }

        public function setID($ID): void
        {
            $this->ID = $ID;
        }

        public function getID()
        {
            return $this->ID;
        }

        public function getUsername()
        {
            return $this->Username;
        }

        public function getPassword()
        {
            return $this->Password;
        }



        public function Login(){
            $Database = new DatabaseConnect();
            $sql = "SELECT `ID`, `Username`, `Password` FROM `Users` WHERE Username = '".$this->Username."'";
            $Result = $Database->execute($sql);
            $Database->closeConnection();
            if ($Result->num_rows == 1){
                $row = $Result->fetch_array();
                if (password_verify($this->Password , $row['Password'])){
                    $Object = new self($row['Username'] , $this->Password);
                    $Object->setID($row['ID']);
                    return $Object;
                }
                else{
                    return null;
                }

            }
            else{
                return null;
            }
        }
        public function CheckUsername(){
            $Database = new DatabaseConnect();
            $sql = "SELECT * FROM `Users` WHERE Username = '".$this->Username."'";
            echo $sql;
            $Result = $Database->execute($sql);
            $Database->closeConnection();
            if ($Result->num_rows > 0){
                return true;
            }
            else{
                return false;
            }
        }
        public function Create(){
            $this->Password = password_hash($this->Password , PASSWORD_DEFAULT);
            $sql = "INSERT INTO `Users`(`Username`, `Password`) VALUES ('".$this->Username."' , '".$this->Password."')";
            $Database = new DatabaseConnect();
            $Result = $Database->execute($sql);
            $Database->closeConnection();
            return $Result;
        }

        public function SelectAll(){
            $sql = "SELECT * FROM `Users`";
            $Database = new DatabaseConnect();
            $Result = $Database->execute($sql);
            $Database->closeConnection();
            if ($Result->num_rows > 0){
                $Users = array();
                $x=0;
                while ($row = mysqli_fetch_array($Result)){
                    $Users[$x] = new self($row['Username'] , $row['Password']);
                    $Users[$x]->setID($row['ID']);
                    $x++;

                }
                return $Users;
            }
            else{
                return null;
            }
        }

        public function DeleteUser(){
            $sql = "DELETE FROM `Users` WHERE ID= '".$this->ID."'";
            $Database = new DatabaseConnect();
            $Database->execute($sql);
            $Database->closeConnection();
        }



    }

?>