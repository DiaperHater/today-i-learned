<?php

namespace Vxl\MyApp;

use Vxl\MyApp\classes\Book;
use Vxl\MyApp\classes\Laptop;

class MyApp {

    public function run() {

        $book = new Book( 'Oliver Twist', 13.99, 'Scott Reading' );
        $laptop = new Laptop( 'MacBook', 1200, 'Black' );
        
        echo $book->getProduct();
        
        echo "====================================" . PHP_EOL;
        
        echo $laptop->getProduct();
    }
}
