<?php
error_reporting(E_ALL);
for ($i = 0; $i < 10; $i++){
    //var_dump($i);
}

//$k = 0;
//for (; $k < 2;){
//    var_dump($k);
//    $k++;
//}

//while (true) {
//    var_dump(data('H:i:s'));
//    sleep(1);
//}

$groups =
    [
        [
            'id' => 1,
            'name' => 'PHP Basics',
            'students' => [
                [
                    'name' => 'Maximilian',
                    'age'  => 23,
                ],
                [
                    'name' => 'Fletcher',
                    'age'  => 30,
                ],
            ],
        ],
        [
            'id' => 2,
            'name' => 'JS Basics',
            'students' => [
                [
                    'name' => 'Simpson' ,
                    'age' => 11,
                ],
                [
                    'name' => 'Bernard ' ,
                    'age' => 68,
                ],
            ],
        ],
    ];

foreach ($groups as $group ) {
    echo "#{$group['id']}: {$group['name']}", PHP_EOL;
        foreach ($group['students'] as $student) {
             echo " - {$student['name']} {$student['age']} years old", PHP_EOL;
        }
}

$a = [
    'type' => 'Smartfone',
    'mark' => 'Samsung Galaxy s20',
    'color' => 'red',
    'memory' => '128GB',
];


foreach ($a as $key => $value) {
    $value .= ' [Edited]';
    echo "{$key} : {$value}" , PHP_EOL;
}