<?php
class DatabaseConnect{
    private $Host = "localhost";
    private $username = "root";
    private $password = "";
    private $Database = "aquatrust";
    private $Object = null;


    public function __construct()
    {
        $this->Object = new mysqli($this->Host , $this->username , $this->password , $this->Database);
    }
    public function execute($sql){
        return $this->Object->query($sql);
    }
    public function closeConnection(){
        $this->Object->close();
    }


}
