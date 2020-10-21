<?php
//// HOMEWORK
///
$Task =
    [
        //0 => // по умолчанию ключ начин с 0 и подразумевается что он здесь есть итак
        [
            'task ID' => 1,
            'task title' => 'Domashka',
            'task owner' => [
                [
                    'age' =>  10,
                    'name' => 'Andy',
                    'profession' =>'creator',
                    'secret' => [
                        [
                            'nomer' => 11
                        ],
                        [
                            'nomer' => 11111
                        ],
                    ],
                ],
                [
                    'age' =>  11,
                    'name' => 'Andy Vkon',
                    'profession' =>'top creator',
                    'secret' => [
                        [
                            'nomer' => 22
                        ],
                        [
                            'nomer' => 222222
                        ],
                    ],
                ],           ],
            'task description' => 'massive creation',
            'task deadline' => 'Need to be done till 10.10.20',
            'task status' => 'Almost part ready',
            'subtasks' => 'skill improving',
        ],
        [
            'task ID' => 2,
            'task title' => 'Fixing Homework material ',
            'task owner' => [
                [
                    'age' =>  20,
                    'name' => 'Piterson',
                    'profession' => 'Employer',
                    'secret' => [
                        [
                            'nomer' => 333
                        ],
                        [
                            'nomer' => 333333
                        ],
                    ],
                ],
                [
                    'age' =>  21,
                    'name' => 'David Piterson',
                    'profession' => 'top employer',
                    'secret' => [
                        [
                            'nomer' => 444
                        ],
                        [
                            'nomer' => 4444444
                        ],
                    ],
                ],           ],
            'task description' => 'website creation',
            'task deadline' => '2 hours',
            'task status' => 'Done',
            'subtasks' => 'coaching',
        ],
        [
            'task ID' => 3,
            'task title' => 'Homeless helping',
            'task owner' => [
                [
                    'age'  => 30,
                    'name' => 'George',
                    'profession' => 'President',
                    'secret' => [
                        [
                            'nomer' => 555
                        ],
                        [
                            'nomer' => 5555555
                        ],
                    ],
                ],
                [
                    'age'  => 32,
                    'name' => 'George Bush',
                    'profession' => 'top president',
                    'secret' => [
                        [
                            'nomer' => 's_konca_3'
                        ],
                        [
                            'nomer' => '2_konca_3'
                        ],
                    ],
                ],          ],
            'task description' => 'Help people',
            'task status' => 'In process',
            'task deadline' => 'time till 11.10.2001',
            'subtasks' => 'be carefull',
        ],
        [
            'task ID' => 4,
            'task title' => 'Filming South park',
            'task description' => 'Watching 20 seasons',
            'task owner' => [
                [
                    'age' =>  40,
                    'name' => 'Robert',
                    'profession' => 'actor',
                    'secret' => [
                        [
                            'nomer' => 'PRElastnumber'
                        ],
                        [
                            'nomer' => '2_PRElastnumber'
                        ],
                    ],
                ],
                [
                    'age' =>  45,
                    'name' => 'Robert D. Junior',
                    'profession' => 'top actor',
                    'secret' =>[
                        [
                            'nomer' => 'lastnumber'
                        ],
                        [
                            'nomer' => '2_lastnumber'
                        ],
                    ],
                ],          ],
            'task status' => 'At Filming',
            'task deadline' => '1 year',
            'subtasks' => 'save money due filming',
        ],
    ];
//print_r($Task);
foreach ($Task as  $new) {
    echo "#{$new['task ID']} - {$new['task title']} ;", PHP_EOL;
    foreach ($new['task owner'] as  $supernew){
        echo "Here works {$supernew['name']}. He is {$supernew['age']} y.o. and he is an {$supernew['profession']};" , PHP_EOL;
        PHP_EOL;
        foreach ($supernew['secret'] as $key => $secret){ //$key => - хранит ключи массива
            echo "  _3 level_ {$secret['nomer']}_" , PHP_EOL;
            //print_r($key);
        }
    }}

PHP_EOL;PHP_EOL;