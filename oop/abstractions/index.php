<?php
error_reporting(E_ALL);
require_once __DIR__ . '/Securable.php';
require_once __DIR__ . '/Scratchable.php';
require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';
require_once __DIR__ . '/Sofa.php';


/** @var Animal[]  $animals */
$animals = [
    new Dog('male'),
    new Cat('female'),
];

$sofa = new Sofa();


foreach ($animals as $animal) {
    var_dump(get_class($animal));

    if ($animal instanceof Securable) {
        var_dump($animal->guard(true));
    }

    if ($animal instanceof Scratchable) {
        var_dump($sofa->beScratched($animal));
    }

    var_dump($animal->makeSound());
}

function scratchSofa()
{

}
