<?php
error_reporting(E_ALL);

/**
 * @param string|null $name
 * @param string $result
 * @return string
 */
function getName(?string $name , string $result = 'PHP') : string // в скобках - аргумент функции. После : возвращаемые значения
{
    $function = __FUNCTION__;
    return "{$name} + {$function} = {$result}" . PHP_EOL;
}

/**
 * @param string|null $name
 * @param string $result
 */
function vivodname(?string $name , string $result = 'PHP') : void // в скобках - аргумент функции. После : возвращаемые значения
{

    echo getName($name, $result);  PHP_EOL;
}
vivodname('Perviy' , 'Vtoroy'); // в скобках - параметр функции
//funkciya('Tretiy', 'Chetvertiy');
//funkciya(null, 'Shestoy');
