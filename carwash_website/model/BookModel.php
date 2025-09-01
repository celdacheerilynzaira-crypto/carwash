<?php
class Book {
    private $title;
    private $author;
    private $category;
    private $status;

    public function __construct($title, $author, $category, $status="Available") {
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
        $this->status = $status;
    }

    public function getTitle() { return $this->title; }
    public function getAuthor() { return $this->author; }
    public function getCategory() { return $this->category; }
    public function getStatus() { return $this->status; }

    public function borrowBook() {
        if($this->status == "Available") {
            $this->status = "Borrowed";
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->status = "Available";
    }
}
?>