<?php
require 'Book.php'; 
require 'Customer.php';

$book = new Book(1234567,'I am Topu', 'Dr. Jafar Iqbal', 20); 

$customer = new Customer(1, 'Karim', 'Mia', 'Abdulalimrucse@gmail.com');


// Using getters and setters
$book->setTitle('New Title');
$customer->setEmail('abdulalimcseru2021@gmail.com');

// Using magic methods to get and set properties
$book->available = 5;
$customer->firstName = 'Karim';

echo "Book Details: " . $book . " \n";
echo "<br> <br>";
echo "Customer Details: " . $customer . " \n";
echo "<br> <br>";

// Adding and getting copies of the book
$book->addCopy(3);
$book->getCopy();

echo "Book Details after adding and getting copies:" . $book . "\n";
?>
