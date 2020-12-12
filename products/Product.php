<?php

class Product {

  private $name;
  private $desc;
  private $price;

  function __construct($name, $desc, $price) {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
  }

  public function getName(){
    return $this->name;
  }

  public function getDesc(){
    return $this->desc;
  }

  public function getPrice(){
    return $this->price;
  }
  function show() {
    echo "Ваш товар: {$this->desc} {$this->name} стоит {$this->price} у.е.<br>";
  }

}

