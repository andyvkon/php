<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <title>Hello, world!</title>
</head>
<body >
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="js/jquery-3.5.1.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
<div class="ml-4 pl-4 mt-2 pt-2">
<?php


    // отфильтровать массив и вернуть (return) в массив
    // элементы которые:
    // 1) не содержкут точку как первый символ
    // 2) строки которые начинаются с 'docker' ===  (false)   Ложь (т.е. не начинаются с "докер")
    $files = scandir(__DIR__);
    $elements = array_filter($files, static function (string $element){
    return $element[0] !== '.' && stripos ($element, 'docker' ) === false && // stripos - ищем позицию в $element(а именно ищем подстроку докер , (в строке $element)
        stripos ($element, 'css' ) === false && stripos ($element, 'js' ) === false
        && stripos ($element, 'img' ) === false && stripos ($element, 'Homework' ) === false ;
} );

//var_dump($elements);
$html ='';
foreach ($elements as $element){
    $rout = __DIR__ . 'index.php/' . $element;

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


    function scan($folder, $space) {
    $openFolder = opendir($folder);
    while ( ($CurrentDirrectoryName = readdir($openFolder)) !== false ) {
        if ($CurrentDirrectoryName == '.' or '..' ) continue;
        if (is_dir($folder . '/' . $CurrentDirrectoryName)){
            echo "{$space}[{$folder}]";
        }
    }
    }
?>
</div>

<ul>
    <?= $html ?>
</ul>

</body>
</html>

<style>
    a:link {
        color: #629CCC; /* Цвет ссылок */
        padding: 2px; /* Поля вокруг текста */
    }
    a:hover {

        color: #ffe; /* Цвет ссылки */
    }
    body {background: url(img/2.jpg);}
</style>
