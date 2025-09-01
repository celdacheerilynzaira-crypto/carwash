<?php
include_once("../model/config.php");

class BookController {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addBook($title, $author, $category) {
        $stmt = $this->conn->prepare("INSERT INTO Books (Title, Author, Category) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $author, $category);
        return $stmt->execute();
    }

    public function getBooks() {
        $result = $this->conn->query("SELECT * FROM Books");
        return $result;
    }
}
?>