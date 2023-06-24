<?php

error_reporting( -1 );

spl_autoload_register( function ( $class ) {

    include "classes/{$class}.php";
} );

function divider() {

    echo  PHP_EOL;
    echo '+++++++++++++++++++++++++++++++++++++++++++' . PHP_EOL;
    echo  PHP_EOL;
}

$book = new Book( 'Oliver Twist', 13.99, 'Scott Reading' );
$laptop = new Laptop( 'MacBook', 1200, 'Black' );

echo $book->getProduct();

divider();

echo $laptop->getProduct();