<?php
error_reporting(E_ALL);

require_once __DIR__ . '/Scratchable.php';
require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';

$dog = new Dog('male');
$cat = new Cat('female');


var_dump($dog->scratch(), $cat->scratch());