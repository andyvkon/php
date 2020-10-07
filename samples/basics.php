<?php
error_reporting(E_ALL);
//$1nelzya = 1; нельзя использовать цыфры на первом месте и спец символы в назв. переменной
/*test=0;
var_dump($test);

$test_2 = 2;
var_dump($test_2); */

//$skillupVariablable = 'TextHohoho';
 //var_dump($skillupVariablable);

$skillupVariablable = 'Barabarabere';
// var_dump($skillupVariablable);
$school = $skillupVariablable;
$skillupVariablable = 777;
 //var_dump($school,$skillupVariablable);

 $testParent = 123;
$testChild = &$testParent;
$testParent = 333;
 $testChild = 222;


    // var_dump($testParent,$testChild);
$deadVar = 111;
unset($deadVar);
//var_dump($deadVar);

define('TEST_CONST', 560);
//var_dump(TEST_CONST);

const TEST_CONST2 = 977;
//$bool=defined('TEST_CONST3') || define('TEST_CONST3', 2555);
//var_dump(TEST_CONST3);

/*if (!defined('TEST_CONST2')) {
    define('TEST_CONST2', 2555);
}
var_dump(TEST_CONST2); */

/*$level01 = 'qwerty';
$level02 = 'level01';
$$$level02 = 123;
var_dump($qwerty); */

/* $array = [
    1,
        2,
            'test' > [
                2,
                    3,

            ]
];
print_r('
    123
            444
                    1235768
        ');
print_r($array);
var_dump($array);
echo PHP_EOL;  */

//$text1 = 'test123 * 44 + $testChild';
$text2 = "test123 \n 123 * 44 + {$testChild} +\$test88";
    //var_dump($text2);

    $text3 = <<<SQL
SELECT COUNT(id) FROM data WHERE id LIKE'%{$testParent}%'
SQL;

$text4 = <<<JS
document.body.getAttribute('title');
JS;
//var_dump($text3, $text4);

$text5 = 'test \n123 * 44 + ' . $testParent;
//var_dump($text5);

$text6 = sprintf('test \n123 * 444 + %d', $testParent);
//var_dump($text6);


var_dump(__FILE__,__LINE__, __DIR__, __FUNCTION__);