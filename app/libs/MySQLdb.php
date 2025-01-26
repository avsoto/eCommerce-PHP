<?php

    class MySQLdb
    {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "eccomerce";
    private $port = "";
    private $conn; 

    public function __construct() {
        $this->conn = new mysqli($this->host, 
        $this->user, 
        $this->password, 
        $this->db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        if (!$this->conn->set_charset("utf8")) {
            die("Error setting character set: " . $this->conn->error);
        } 
    }
    
        
    }
    

?>