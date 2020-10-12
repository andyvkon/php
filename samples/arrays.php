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

$a4 = [
    'qwerty',
    10,
    4,
    1,
    6,
    10 => 'test',
    15 => 'test',
];

rsort($a4);

//var_dump($a4);

$students = $groups[0]['students'];

usort($students, static function (array $a, array $b) : int {
    return $b['age'] <=> $a['age'];
});

//var_dump(count($groups));

$a4Start = array_shift($a4);
$a4_2 = $a4[2];
unset($a4[2]);
//var_dump(
//    $a4Start,
//    $a4_2,
//    $a4,
//    array_key_exists(2, $a4),
//    in_array('qwerty', $a4),
////    array_unique($a4)
//    array_flip(array_flip($a4)),
//    compact('a4Start', 'a4_2', 'students')
//);

$GLOBALS['a4_2'] = 9999999999;

//session_start();
//var_dump($_SESSION['test']);

///////// Home Work
/// Task manager
/// - task ID
/// - task title
/// - task description
/// - task owner
/// - task deadline
/// - task status
/// - subtasks
/// --
///
$Task = [
  [
      'TaskManager1' => [
                            'task ID' => 238,
                            'task title' => 'Domashka',
                            'task description' => 'massive creation',
                            'task owner' => 'Andy Vkon',
                            'task deadline' => 'Need to be done till 10.10.20',
                            'task status' => 'Almost part ready',
                            'subtasks' => 'skill improving',
                         ],
      'TaskManager2' => [
                          'task ID' => 444,
                          'task title' => 'Fixing Homework material ',
                          'task description' => 'website creation',
                          'task owner' => 'Employer',
                          'task deadline' => '2 hours',
                          'task status' => 'Done',
                          'subtasks' => 'coaching',
                        ],
  ],


];
