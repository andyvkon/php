<?php
error_reporting(E_ALL);
$int = 1;
$float = 7.3e4;
//var_dump($float);
$bool = true;
$array = [1, 2 ,3 ];
$object = new stdClass();
$null = null;
$resource = fopen(__DIR__. '/basics.php', 'rb'); // fclose($resource); - закрывается так

$callable = static function () { // передаёт функцию что бы где-то выполнить её
    return 1;
};// передаёт функцию что бы где-то выполнить её

$test6 = sprintf("test \n123 * 444 + %d", $int );
//var_dump($test6);

//var_dump($object, $resource , $callable);
//$s999 = 12.2;
////var_dump(gettype($array));


//var_dump((float)str_replace(',' , '.' , '1,2')); // замена запятой на точку при выводе на экран.
fclose($resource);

//var_dump(isset($test)); // поиск переменной
//var_dump(isset($null), empty($null)); // поиск переменной

//var_dump(null > 0, null == 0 , null >= 0);

var_dump( 1 !== '1');
var_dump('0'== false);
var_dump(1==1 , 1===1 , 1 !=1 ,1!==1  , 1===1, 1!= 1);
var_dump(1!==1 ); //не равно даже по типу
// === - оператор грубого сравнения и соответсвия (Просто сравнение)
// == оператор нестрогого сравнения и сравнения типов (Преобразование типов к одному и потом сравнение)