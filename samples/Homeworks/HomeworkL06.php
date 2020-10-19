
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

//foreach ($Task as  $new) {
//    echo "#{$new['task ID']} - {$new['task title']} ;", PHP_EOL;
//
//
//    foreach ($new['task owner'] as  $supernew){
//        echo "Here works {$supernew['name']}. He is {$supernew['age']} y.o. and he is an {$supernew['profession']};" , PHP_EOL;
//
//        PHP_EOL;
//
//        foreach ($supernew['secret'] as $key => $secret){ //$key => - хранит ключи массива
//            echo "  _3 level_ {$secret['nomer']}_" , PHP_EOL;
//
//            //print_r($key);
//
//        }
//    }}
//
//PHP_EOL;PHP_EOL;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HwL06</title>
</head>
<body>
<table style="width: 80%; margin-left: 40px; margin-top: 10px; font-size: 1em;" border="1px">
    <caption style="margin-bottom: 10px; margin-top:20px;">Operator FOR</caption>
    <tr style="text-align: center">
        <th style="text-align: center">task ID</th>
        <th style="text-align: center">task title</th>
        <th style="text-align: center">task owner</th>
        <th style="text-align: center">task description</th>
        <th style="text-align: center">task deadline</th>
        <th style="text-align: center">task status</th>
        <th style="text-align: center">subtasks</th>
    </tr>
    <?php
    for ($k = 0; $k < (array_key_last($Task)-2 ); $k++) {
        echo "<tr>
        <td>{$Task[$k]['task ID']}</td>
        <td>{$Task[$k]['task title']}</td>
        <td>{$Task[$k]['task owner']}</td>
        <td>{$Task[$k]['task description']}</td>
        <td>{$Task[$k]['task deadline']}</td>
        <td>{$Task[$k]['task status']}</td>
        <td>{$Task[$k]['subtasks']}</td>
    </tr>";
    } ?>
    <tr style="text-align: center">
        <th></th>
        <th></th>
        <th>Id [1]--></th>


    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align: center">age</th>
        <th style="text-align: center">name</th>
        <th style="text-align: center">profession</th>
        <th style="text-align: center">secret</th>
    </tr>


    <?php

    for ($m = 0; $m < (array_key_last($Task[0]['task owner'])+1 ); $m++) {
        echo "
              
              <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{$Task[0]['task owner'][$m]['age']}</td>
            <td>{$Task[0]['task owner'][$m]['name']}</td>
            <td>{$Task[0]['task owner'][$m]['profession']}</td>
            <td>{$Task[0]['task owner'][$m]['secret']}</td>
            
            </tr>";
    }
    ?>

    <tr>
        <td style="height: 15px!important; opacity: 0.1%;"></td>
    </tr>
    <?php
    for ($k = 0; $k < (array_key_last($Task)-1 ); $k++) {
        if ($k === 1){
        echo "<tr>
        <td>{$Task[$k]['task ID']}</td>
        <td>{$Task[$k]['task title']}</td>
        <td>{$Task[$k]['task owner']}</td>
        <td>{$Task[$k]['task description']}</td>
        <td>{$Task[$k]['task deadline']}</td>
        <td>{$Task[$k]['task status']}</td>
        <td>{$Task[$k]['subtasks']}</td>
    </tr>"; }
    } ?>

    <tr style="text-align: center">
        <th></th>
        <th></th>
        <th>Id [2]--></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align: center">age</th>
        <th style="text-align: center">name</th>
        <th style="text-align: center">profession</th>
        <th style="text-align: center">secret</th>
    </tr>

    <?php


    for ($n = 0; $n < (array_key_last($Task[1]['task owner']) + 1); $n++) {
        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{$Task[1]['task owner'][$n]['age']}</td>
            <td>{$Task[1]['task owner'][$n]['name']}</td>
            <td>{$Task[1]['task owner'][$n]['profession']}</td>
            <td>{$Task[1]['task owner'][$n]['secret']}</td>
            
            </tr>";
    }

    ?>

    <tr>
        <td style="height: 15px!important; opacity: 0.1%;"></td>
    </tr>

    <?php
    for ($k = 0; $k < (array_key_last($Task) ); $k++) {
        if ($k === 2){
            echo "<tr>
        <td>{$Task[$k]['task ID']}</td>
        <td>{$Task[$k]['task title']}</td>
        <td>{$Task[$k]['task owner']}</td>
        <td>{$Task[$k]['task description']}</td>
        <td>{$Task[$k]['task deadline']}</td>
        <td>{$Task[$k]['task status']}</td>
        <td>{$Task[$k]['subtasks']}</td>
    </tr>"; }
    } ?>

    <tr style="text-align: center">
        <th></th>
        <th></th>
        <th>Id [3]--></th>


    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align: center">age</th>
        <th style="text-align: center">name</th>
        <th style="text-align: center">profession</th>
        <th style="text-align: center">secret</th>
    </tr>

    <?php


    for ($o = 0; $o < (array_key_last($Task[2]['task owner']) + 1); $o++) {
        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{$Task[2]['task owner'][$o]['age']}</td>
            <td>{$Task[2]['task owner'][$o]['name']}</td>
            <td>{$Task[2]['task owner'][$o]['profession']}</td>
            <td>{$Task[2]['task owner'][$o]['secret']}</td>
            
            </tr>";
    }

    ?>

    <tr>
        <td style="height: 15px!important; opacity: 0.1%;"></td>
    </tr>


    <?php
    for ($k = 0; $k < (array_key_last($Task)+1 ); $k++) {
        if ($k === 3){
            echo "<tr>
        <td>{$Task[$k]['task ID']}</td>
        <td>{$Task[$k]['task title']}</td>
        <td>{$Task[$k]['task owner']}</td>
        <td>{$Task[$k]['task description']}</td>
        <td>{$Task[$k]['task deadline']}</td>
        <td>{$Task[$k]['task status']}</td>
        <td>{$Task[$k]['subtasks']}</td>
    </tr>"; }
    } ?>


    <tr>
        <th></th>
        <th></th>
        <th>Id [4] --></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align: center">age</th>
        <th style="text-align: center">name</th>
        <th style="text-align: center">profession</th>
        <th style="text-align: center">secret</th>
    </tr>


    <?php
    for ($u = 0; $u < (array_key_last($Task[3]['task owner']) + 1); $u++) {
    echo "<tr>
        <td></td>
        <td></td>
        <td></td>
        <td>{$Task[3]['task owner'][$u]['age']}</td>
        <td>{$Task[3]['task owner'][$u]['name']}</td>
        <td>{$Task[3]['task owner'][$u]['profession']}</td>
        <td>{$Task[3]['task owner'][$u]['secret']}</td>

    </tr>";
    }
    ?>

</table>


<br><br>
<table style="width: 80%;  margin-left: 40px; margin-top: 10px; font-size: 1em;" border="1px">
    <caption style="margin-bottom: 10px;">Operator ForEach</caption>
    <tr style="text-align: center">
        <th style="text-align: center">task ID</th>
        <th style="text-align: center">task title</th>
        <th style="text-align: center">task owner

        </th>
        <th style="text-align: center">task description</th>
        <th style="text-align: center">task deadline</th>
        <th style="text-align: center">task status</th>
        <th style="text-align: center">subtasks</th>

    </tr>


                    // FOREACH /////
    <?php


        foreach ($Task as $ForeachTaskNew){
            echo "<tr>
            <td>{$ForeachTaskNew['task ID']}</td>
            <td>{$ForeachTaskNew['task title']}</td>
            <td>{$ForeachTaskNew['task owner']}</td>
            <td>{$ForeachTaskNew['task description']}</td>
            <td>{$ForeachTaskNew['task deadline']}</td>
            <td>{$ForeachTaskNew['task status']}</td>
            <td>{$ForeachTaskNew['subtasks']}</td>
           
            </tr>";
//
      //  <td>{$ForeachTaskNew['task owner']}
            //   // Как сделать форич внутри форича - ???????????????????????????????????
//            foreach ($ForeachTaskNew['task owner'] as $Foreach2) {
//                echo "<tr>
//            <td> {$Foreach2['age']}</td>
//            <td> {$Foreach2['name']}</td>
//            <td> {$Foreach2['profession']}</td>
//            <td> {$Foreach2['secret']}</td>
//            </tr>";
//                foreach ($Foreach2['secret'] as $Foreach3) {
//                    echo "<tr>
//            <td> {$Foreach3['nomer']}</td>
//            </tr>"; }
//
//            }
//              //   // Как сделать форич внутри форича - ???????????????????????????????????
    }
    ?>
</table>
</body>
</html>

