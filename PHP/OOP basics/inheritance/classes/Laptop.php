<?php

require_once 'Product.php';

class Laptop extends Product{
    
    public $color;
    
    public function __construct( $name = 'n/a', $price = 'n/a', $color = 'apple white') {

        parent::__construct( $name, $price );
        $this->color = $color;
    }

    public function getProduct() {

        $out = 'Laptop ' . parent::getProduct();
        $out .= 'color => ' . $this->color . PHP_EOL;

        return $out;
    }
}