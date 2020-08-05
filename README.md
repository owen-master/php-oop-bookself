# PHP Bookshelf OOP Example

A PHP Object Oriented Programming example using bookshelf and books. A bookshelf has many books.

## Usage

```php
// Include classes.
include_once("./classes/book.class.php");
include_once("./classes/shelf.class.php");

// Create a book object.
$bookOne = new Book;
$bookOne->setName("How to bake the ultimate cake");
$bookOne->setDescription("A cook book");
$bookOne->setAuthor("Charlie Reed");

// Create another book object.
$bookTwo = new Book;
$bookTwo->setName("Starting a successful startup");
$bookTwo->setDescription("An informative book");
$bookTwo->setAuthor("Matthew Maxwell");

// Create a shelf object.
$shelf = new Shelf;

// Add the book objects to the shelf object.
$shelf->addBooks([$bookOne, $bookTwo]);

// See what's on the shelf.
print("There are " . $shelf->numBooks() . " books on the shelf." . PHP_EOL);
foreach($shelf->getBooks() as $i => $book) {
  print("Book #" . $i . " | Name: " . $book->getName() . PHP_EOL);
}
```
