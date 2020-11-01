<?php
error_reporting(E_ALL);
//$pow = 3 ** 3;
////var_dump($pow);
//
//function power(int $number, int $power)
//{
//    if ($power === 0 || $number === 1) {
//        return 1;
//    }
//    if ($power === 1 || $number === 0) {
//        return $number;
//    }
//
//    return $number * power($number, $power - 1);
//}
//
////$powRecursive = power(3, 3);
////var_dump($powRecursive);
//
//$count = 0;
//
//function fibonacci(int $n)
//{
//    static $lib = [];
//
//    global $count;
//    $count++;
//
//    if ($n === 0) {
//        return 0;
//    }
//    if ($n === 1) {
//        return 1;
//    }
//    if (array_key_exists($n, $lib)) {
//        return $lib[$n];
//    }
//
//    $index1 = $n - 2;
//    $number1 = fibonacci($index1);
//
//    $index2 = $n - 1;
//    $number2 = fibonacci($index2);
//
//    $lib[$index1] = $number1;
//    $lib[$index2] = $number2;
//
//    return $number1 + $number2;
//}
//
//$fibonacci = fibonacci(15);
//var_dump($fibonacci, $count);


// Home work:
// modify power function
// create functions for printR and arrayCount
// - printR analog of print_r
// - arrayCount counts all array elements including nested
/*

function arrayCount(array $array, bool $countParents = true)
arrayCount($a, true) = 5
arrayCount($a, false) = 4

*/


// HOMEWORK arrayCount with all array elements

function everyArrayElement(array $array) {

    $AllElements = count($array);
        foreach ($array as $element) {
            if (is_array($element)) {
                $AllElements = $AllElements + everyArrayElement($element);

            }
        }   return $AllElements ;
}


$test =
    [
        'hello' => 1,
        'hi' => 2,
        'good_morning' => 3,
        'good evening' =>
                    [
                        '4' => 4,
                        '5' => 5,
                        '6' =>
                            [
                                6,
                                7,
                                8,
                            ],
                    ],
        'other' =>
            [
                '7' => 10,
                '8' => 11,

            ],
    ];


    $a = [
            0 => 77,
            12 => 3,
            4 => [
                0 => 1,
                1 => [
                    5 => 10,
                ],
            ],
            'sdas' => 22,
            221   => 44
        ];

print_r(everyArrayElement($test));

// ANALOG print R function :


