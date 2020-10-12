<?php
$a1 = ['test' ,'qwerty' , 123];
$a2 = [2=> 'test', 3=> 'qwerty' , 4=> 123];
$a3 = [
    'car' => 'Subaru',
    'helicopter' => 'JBC',
    'Monitor' => 'ACER',
];
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

$groups[0]['students'][/*Здесь указываем индекс массива */] = [

    'name' => 'Vasya Pupkin',
    'age' =>  99,
]; // топ метод добавления инфы в массив.

array_push($groups[1]['students'],[
    'name' => 'Marge Simpson',
        'age' => 35 ,
    ]
); // эта ф-я эррей пуш работает медленно , в 2 раза хуже предыдущей
    //var_dump($groups);

//    $menu =
//        [
//            [
//                'url' => '/',
//                'title' => 'Home',
//            ],
//            [
//                'url' => '/about-us',
//                'title' => 'Home',
//            ]
//        ],

$string = 'Hello world';
var_dump($string[0], $string[-1]);