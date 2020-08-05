<?php

  class Shelf {
    // Book objects that are on the shelf.
    // @var array
    private $books = [];

    // Adds book(s) to the shelf.
    // @param array $books Array of books.
    public function addBooks($books = []) {

      if (is_array($books)) {
        foreach ($books as $book) {
          if (is_a($book, 'Book')) {
            $this->books[] = $book;
          }
        }
      }
    }

    // Returns book(s) on the shelf.
    public function getBooks() {
      return $this->books;
    }

    // Returns amount of book(s) on the shelf.
    public function numBooks() {
      return count($this->books);
    }

    // Clears book(s) on the shelf.
    public function clearBooks() {
      $this->books = [];
    }

  }

?>
