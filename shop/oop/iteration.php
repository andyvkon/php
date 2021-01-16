<?php
class Properties
{
    public $p1 = 1;
    public $p2 = 2;
    public $p3 = 3;
    public $p4 = 4;

}

$properties = new Properties();
foreach ($properties as $property => $value) {
    echo "{$property} => {$value}" , PHP_EOL;
}