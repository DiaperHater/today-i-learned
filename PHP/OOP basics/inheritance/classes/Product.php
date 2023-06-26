<?php

namespace classes;

class Product {

    private $name;    
    private $price;

    protected function __construct( $name = 'n/a', $price = 'n/a') {

        $this->name = $name;        
        $this->price = $price;        
    }

    protected function getProduct() {

        $out = 'Product:' . PHP_EOL;
        $out .= 'name => ' . $this->name . PHP_EOL;
        $out .= 'price => ' . $this->price . PHP_EOL;

        return $out;
    }
}