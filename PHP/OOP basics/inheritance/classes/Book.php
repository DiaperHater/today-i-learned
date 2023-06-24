<?php

class Book extends Product{
    
    public $author;
    
    public function __construct( $name = 'n/a', $price = 'n/a', $author = 'n/a') {

        parent::__construct( $name, $price );
        $this->author = $author;       
    }

    public function getProduct() {

        $out = 'Book ' . parent::getProduct();
        $out .= 'author => ' . $this->author . PHP_EOL;
        
        return $out;
    }
}