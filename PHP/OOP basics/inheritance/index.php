<?php

error_reporting( -1 );

use classes\Book;
use classes\Laptop;

spl_autoload_register( function ( $class ) {

    $class = str_replace('\\', '/', $class);
    include __DIR__ . "/{$class}.php";
} );

$book = new Book( 'Oliver Twist', 13.99, 'Scott Reading' );
$laptop = new Laptop( 'MacBook', 1200, 'Black' );

echo $book->getProduct();

echo "====================================" . PHP_EOL;

echo $laptop->getProduct();