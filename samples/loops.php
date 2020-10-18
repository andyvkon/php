<?php
error_reporting(E_ALL);


//for ($i = 0; /* < выполняется при первом запуске цыкла */ $i < 10; /* < выполняется перед каждой итеррацией */ $i++
//* < инкремент - после каждой итеррации */){
//    var_dump($i);
//};


//$k = 0;
//for (; $k < 2;){
//    var_dump($k);
//    $k++;
//}

//while (true) {
//    var_dump(data('H:i:s'));
//    sleep(1);
//}




//print_r($groups);
//foreach ($groups as $group ) {
//    echo "#{$group['id']}: {$group['name']}", PHP_EOL;
//
//        foreach ($group['students'] as $student) {
//            echo " - {$student['name']} {$student['age']} years old", PHP_EOL;}}

//foreach ($groups as $group ) {
//    echo "#{$group['id']}: {$group['name']}", PHP_EOL;
//    foreach ($group['students'] as $student) {
//        echo " - {$student['name']} {$student['age']} years old", PHP_EOL;
//    }
//    var_dump($group);
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
        [
            'id' => 03,
            'name' => 'JAVA ',
            'students' => [
                [
                    'name' => 'Epselont' ,
                    'age' => 0,
                ],
                [
                    'name' => 'Pukish ' ,
                    'age' => 99,
                ],
            ],
        ],
    ];




//
//foreach ($groups as $group ) {
//    echo "#{$group['id']}: {$group['name']}", PHP_EOL;
//
//    foreach ($group['students'] as $student) {
//        echo " - {$student['name']} {$student['age']} years old", PHP_EOL;}}

$a = [
    'type' => 'Smartfone',
    'mark' => 'Samsung Galaxy s20',
    'color' => 'red',
    'memory' => '128GB',
];


//foreach ($a as $key => &$value) { // &value - ссылаемся на значение в массиве, что бы взять от туда данные (потому что эти переменные никак не связаны с данными в массиве)
//    $value .= ' [Edited]';
//    //echo "{$key} : {$value}" , PHP_EOL;
//}
//unset($value); // удаляем ссылку выше &value , потому что поломается код
////var_dump($a);
//
//for ($i = 0; $i < 10 ; $i++){
//    if ($i % 2 ===0) {
//        continue;      /* пропустить и продолжить */
//    }
//        if ($i === 7 || $i === 8){
//            break;
//        }
//var_dump($i);
//}

//for ($column=0; $column<=10; $column++){
//    for ($row=0; $row<=10; $row++){
//        $result = $column * $row;
//        echo "{$column} * {$row} = {$result}", PHP_EOL;
//        if ($column === 5 && $row === 3){
//           // break; // останеавливает только тот цыкл в котором ты сейчас \\break(2); остановится всё после 5
//            // continue; continue(2)
//        }
//    }
//    echo PHP_EOL;
//}




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

//$NewFor = array_filter($Task, static function (string $element){
//    return $element [0] === 't';
//} );

        for ($Newfor = 0; $Task > 0 && $Newfor < 5 ; $Newfor++ ) {

            var_dump("{$Task[0]['task status']}\n");
        }



