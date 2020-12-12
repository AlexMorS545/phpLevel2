<?php
include_once "Product.php";

class Phone extends Product {
  private $brand;

  public function getBrand(){
    return $this->brand;
  }

  public function __construct($name, $desc, $price, $brand){
    $this->brand = $brand;
    parent::__construct($name, $desc, $price);
  }

  function show() {
    echo "Ваш товар: {$this->getDesc()} {$this->getName()} марки {$this->brand} стоит {$this->getPrice()} у.е.<br>";
  }
}