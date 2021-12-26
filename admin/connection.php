<?php

class Connection{
    public $conn;
    private $host  = "localhost";
    private $username = "root";
    private $password  = "";
    private $database = "trasua";
    function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}
?>