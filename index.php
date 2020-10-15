<?php
//echo 'Hello world' , PHP_EOL;

$files = scandir(__DIR__);
$elements = array_filter($files, static function (string $element){
    return $element[0] !== '.' && stripos ($element, 'docker' ) === false ;
} );

        foreach ($elements as $element){
            $rout = __DIR__ . '/' .$element;
            if (is_dir($rout)){
                $dir = scandir($rout);

                $NestedElements = array_filter($dir, static function (string $element){
                    return $element[0] !== '.' ;
                } );

                foreach ($NestedElements as $nestedElement) {
                    $html .= "<li><a href='/{$element}/{$nestedElement}'>{$element}{$nestedElement}</a></li>";

                }


            } else {
                $html .= "<li><a href='/{$element}'>{$element}</a></li>";
            }
        }
    ?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul><?= $html ?></ul>
</body>
</html>>

<!---->
<!--var_dump($elements);-->
<!---->
<!---->
<!---->
<!--$menu = [-->
<!--    [-->
<!--      'title' => 'Samples',-->
<!--        'children' => [-->
<!--            [-->
<!--                'url' => '/',-->
<!--                'title' => 'Home',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/arrays.php',-->
<!--                'title' => 'Arrays',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/basics.php',-->
<!--                'title' => 'Basics',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/branching.php',-->
<!--                'title' => 'Branching',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/html.php',-->
<!--                'title' => 'HTML',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/math.php',-->
<!--                'title' => 'Math',-->
<!--            ],-->
<!--            [-->
<!--                'url' => '/samples/types.php',-->
<!--                'title' => 'Types',-->
<!--            ],-->
<!--        ],-->
<!--    ],-->
<!--];-->
<!---->
<!--    //var_dump($menu);-->