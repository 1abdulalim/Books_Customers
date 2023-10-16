<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getAvailable() {
        return $this->available;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setAvailable($available) {
        $this->available = $available;
    }

    public function addCopy($num) {
        if ($num > 0) {
            $this->available += $num;
            return true;
        } else {
            return false;
        }
    }

    public function getCopy() {
        if ($this->available > 0) {
            $this->available--;
            return true;
        } else {
            return false;
        }
    }

    public function __toString() {
        return "ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available Copies: {$this->available}";
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
?>
