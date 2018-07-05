<?php
class Database{

    private $servername,$username,$password,$dbName,$con;

    public function getConnection(){

        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbName = "iwebdatabase";
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
        if($this->con->connect_error){
            return 'Not connected' . $this->con->connect_error;
        }
        else
            return $this->con;
    }
}
?>