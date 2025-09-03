<?php
session_start(); // ✅ Always start session at the very top

// ================== Database Class ==================
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "cwms_db";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die(" Connection failed: " . $this->conn->connect_error);
        }
    }
}

// ================== Include View ==================
include("../views/index.php");
?>