<?php
include_once "Phone.php";

$item1 = new Product("хлеб", "белый", 50);
$item2 = new Phone("телефон", "новый", 400, "IPhone");

$item1 -> show();
$item2 -> show();