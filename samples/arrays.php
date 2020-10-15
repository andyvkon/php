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
                    'b1'=>  [
                            'name' => 'Maximilian',
                            'age'  => 23,
                            ],
                    'b2'=>  [
                                'name' => 'Brabo007',
                                'age'  => 6,
                            ],
                    'b3'=>  [
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

//$groups[0]['students'][2/*Здесь указываем индекс массива */] = [
//
//    'name' => 'Vasya Pupkin',
//    'age' =>  99,
//]; // топ метод добавления инфы в массив.

//
//array_push($groups[1]['students'],[  /* Добавляет запись в конец? массва*/
//    'name' => 'Marge Simpson',
//        'age' => 35 ,
//    ]
//);
// эта ф-я эррей пуш работает медленно , в 2 раза хуже предыдущей
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
//var_dump($string[0], $string[-1]);

$a4 = [
    'qwerty',
    10,
    4,
    1,
    6,
   'test',
];
//natcasesort($a4);

//var_dump($a4);

//
//rsort($a4);
//
////var_dump($a4);
//
//$students = $groups[0]['students'];
//
//usort($students, static function (array $a, array $b) : int {
//    return $b['age'] <=> $a['age'];
//});
//
////var_dump(count($groups));
///



//$a4Start = array_shift($a4);
//$a4_2 = $a4[2];
//unset($a4[2]);
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






//print_r($groups[0]['students']);
$students = $groups[0]['students'];



//var_dump(count($students)); // count - подсчитывает кол-во элементов массиваф
// array_shift( /* $массив */  ); /* срезает верхний элемент массива */


unset($Task[0]['TaskManager2']['task title']);
//var_dump($Task);
// 1. Мы выполнили сортировку массива по таск id , затем срезали часть
// [0]['TaskManager2']['task title'] которая после сортировки поменялась местами с TaskManager1

array_key_exists(2,$a4); // проверяет существует ли ключ 2 в массиве
in_array('qwerty', $a4); //проверяет существует ли значение qwerty в массиве
array_unique($a4); // удаляет дублирующиеся значения и оставляет только уникальные
array_flip(array_flip($a4)); // меняет значения и ключи местами. на примере - двойной флип


//var_dump(
//compact('a4', 'students') // формирует массив с переменных а4 и студенты
//$_ENV // выдаёт настройки сервера , использовать для отладки , перезапись лучше не делать.
//$_SERVER // выдаёт чуть больше значений , тех же что и _ENV ,
// перезаписи практически не поддаётся. Он сам по себе
//);
//setcookie('test2', mt_rand()); exit;

//$GLOBALS['a4_2'] = 9999999999; // глобал - глобальный массив в котором находится всё.
//Таким образом мы перезаписали значение массива а4_2

//session_start();
//$_SESSION['test'] = 1234141;
//var_dump($_SESSION['test'])   ;

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
$Task =
    [
        [
       //0 => // по умолчанию ключ начин с 0 и подразумевается что он здесь есть итак


                'TaskManager1' =>
                    [
                    'task ID' => 11,
                    'task title' => 'Domashka',
                    'task description' => 'massive creation',
                    'task owner' => 'Andy Vkon',
                    'task deadline' => 'Need to be done till 10.10.20',
                    'task status' => 'Almost part ready',
                    'subtasks' => 'skill improving',
                ],
                'TaskManager2' =>
                    [
                    'task ID' => 22,
                    'task title' => 'Fixing Homework material ',
                    'task description' => 'website creation',
                    'task owner' => 'Employer',
                    'task deadline' => '2 hours',
                    'task status' => 'Done',
                    'subtasks' => 'coaching',
                ],





                'TaskManager3' =>
                    [
                    'task ID' => 33,
                    'task title' => 'Homeless helping',
                    'task description' => 'Help people',
                    'task owner' => 'George Bush',
                    'task deadline' => 'time till 11.10.2001',
                    'task status' => 'In process',
                    'subtasks' => 'be carefull',
                ],
                'TaskManager4' => [
                    'task ID' => 44,
                    'task title' => 'Filming South park',
                    'task description' => 'Watching 20 seasons',
                    'task owner' => 'Robert D. Junior',
                    'task deadline' => '1 year',
                    'task status' => 'At Filming',
                    'subtasks' => 'save money due filming',
                ],


        ],
    ];
//uasort ($Task, static function (array $a, array $b){
//    return $b['All'] <=> $a['All1'];
//});


uasort( $Task[0]  , static function (array $a, array $b){
    return $b['task ID'] <=> $a['task ID'];
});
//
//uasort($Task[1]  , static function (array $a, array $b){
//    return $b['task ID'] <=> $a['task ID'];
//});
//



var_dump($Task);