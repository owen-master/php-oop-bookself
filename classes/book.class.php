<?php

  class Book {

    // The name of the book.
    // @var string
    private $name;

    // The description of the book.
    // @var string
    private $description;

    // The author of the book.
    // @var string
    private $author;

    //Sets the name of the book.
    // @param string $name Book name.
    public function setName($name = "") {
      $this->name = $name;
    }

    // Sets the description of the book.
    // @param string $description Book description.
    public function setDescription($description = "") {
      $this->description = $description;
    }

    // Sets the author of the book.
    // @param string $author Book author.
    public function setAuthor($author = "") {
      $this->author = $author;
    }


    // Returns the name of the book.
    public function getName() {
      return $this->name;
    }

    // Returns the description of the book.
    public function getDescription() {
      return $this->description;
    }

    // Returns the author of the book.
    public function getAuthor() {
      return $this->author;
    }

  }

?>
