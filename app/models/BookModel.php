<?php

class BookModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    //Add a new book
    public function addBook($name, $author, $price, $isbn, $language, $category, $pages, $stock, $description, $image_url, $spotlight) {
        $this->db->query("INSERT INTO books (name, author, price, isbn, language, category, pages, stock, description, image_url, spotlight) VALUES (:name, :author, :price, :isbn, :language, :category, :pages, :stock, :description, :image_url, :spotlight)");
    
        $this->db->bind(':name', $name);
        $this->db->bind(':author', $author);
        $this->db->bind(':price', $price);
        $this->db->bind(':isbn', $isbn);
        $this->db->bind(':language', $language);
        $this->db->bind(':category', $category);
        $this->db->bind(':pages', $pages);
        $this->db->bind(':stock', $stock);
        $this->db->bind(':description', $description);
        $this->db->bind(':image_url', $image_url);
        $this->db->bind(':spotlight', $spotlight);
    
        return $this->db->execute();
    }
    
    //View Books
    public function getAllBooks() {
        $this->db->query("SELECT * FROM books");
        return $this->db->resultSet();
    }


    //Delete Books
    public function removeBook($bookid) {
        // Check if the record exists
        $this->db->query("SELECT * FROM books WHERE bookid = :bookid");
        $this->db->bind(':bookid', $bookid);
        $result = $this->db->single();
    
        if (!$result) {
            die("Book with ID '$bookid' does not exist.");
        }
    
        // Proceed with deletion
        $this->db->query("DELETE FROM books WHERE bookid = :bookid");
        $this->db->bind(':bookid', $bookid);
        return $this->db->execute();
    }
    


    
}