<?php
//HOMEWORK
// need to create Print_r and arrayCount (all array elements must be included)
//modify power functiuon
// print_r analog

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