<?php

error_reporting(E_ALL);

function getName(?string $name, string $result = 'PHP'): string
{
    $function = __FUNCTION__;
    return "{$name} + {$function} = {$result}" . PHP_EOL;
}
echo getName('1', '2');

// этот пример ф-и будет возвращать значение после расчета в getName , а ниже мы вызываем это значение через Эхо.


function vivodname(?string $name, string $result = 'PHP'): void
{
    $function = __FUNCTION__;
    echo "{$name} + {$function} = {$result}" . PHP_EOL;

} // этот пример ф-и не будет возвращать результат формулы и ничего не выведет ( :void )
// , а  будет выводить на экран только в случае если ниже мы вызовем эту ф-ю

//вывод: результат того что внутри ф-и нужно либо: 1. вызвать через Эхо ниже ф-и
//2. вызвать саму ф-ю ниже по её названию

vivodname('Perviy', 'Vtoroy');
//vivodname('Tretiy', 'Chetvertiy');
//vivodname(null, 'Shestoy');

