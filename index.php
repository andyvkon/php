<?php


$files = scandir(__DIR__);
$elements = array_filter($files, static function (string $element){ // отфильтровать массив и вернуть (return) в массив
    // элементы которые:
    // 1) не содержкут точку как первый символ
    // 2) строки которые начинаются с 'docker' ===  (false)   Ложь (т.е. не начинаются с "докер")

    return $element[0] !== '.' && stripos ($element, 'docker' ) === false ; // stripos - ищем позицию в $element(а именно ищем подстроку докер , (в строке $element)
} );
//var_dump($elements);
    $html ='';
    foreach ($elements as $element){
        $rout = __DIR__. '/' . $element;

        if (is_dir($rout)) {
                $dir = scandir($rout);
                     $Nestedelements = array_filter($dir, static function (string $element){
                         return $element[0] !== '.';
                     } );

                        foreach ($Nestedelements as $nestedelement){
                            echo "<li><a href='/{$element}/{$nestedelement}'> {$element}/{$nestedelement}</a></li>";
                        }

        }else {
           $html .= "<li><a href='/{$element}'> {$element}</a></li>";
        }
    }
?>


   <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?= $html ?>
        </ul>
    </body>
    </html>

