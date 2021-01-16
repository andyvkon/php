<?php
error_reporting(E_ALL);
class Magic
{
    public string $magicPhrase;
    public array $params = [];

    public function __construct(string $magicPhrase)
    {
        echo __METHOD__;
        $this->magicPhrase = $magicPhrase;

    }

//    НЕСУЩЕСТВУЮЩИЕ свойства START
    public function __set($name, $value)  // вызывает свойства которых нету в объекте (несуществующие свойства)
                                            // метод который вызывается в момент установки несуществующего свойства
    {
        $this->params[$name] = $value;
    }

    public function __get($name)  // метод который вызывается в момент обраащения к несуществующим свойствам
    {
        return $this->params[$name] ?? null ;
    }
//    НЕСУЩЕСТВУЮЩИЕ свойства END


//НЕСУЩЕСТВУЮЩИЕ методы START
    public function __call($name, $arguments) // метод который вызывается в момент обраащения к несуществующему методу в объекте
    {
        var_dump( "print method {$name} with params " . json_encode($arguments) ). PHP_EOL ;
    }

    public function __toString(): string
    {
        return serialize($this);
    }


    public function __destruct()
    {
        echo __METHOD__ , PHP_EOL;

    }
}

$magic = new Magic('eto magiya detka');
$magic->imagineArray = 999;
var_dump($magic, $magic->imagineArray);

$magic->doSmth(5,7,4);

echo $magic, PHP_EOL;
