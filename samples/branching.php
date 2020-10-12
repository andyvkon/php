<?php
error_reporting(E_ALL);
$nubmer = (int)$_GET['p1'];
if ($nubmer === 0) {
    echo "Number is zero";
}
elseif ($nubmer === 1) {
    echo "Number is one";
}
elseif ($nubmer === 2) {
    echo "Number is two";
}
elseif ($nubmer % 2 === 0) {
    echo "Number {$nubmer} is even";
    }
else {
    echo "Number {$nubmer} is odd";
    }

echo '<br>';

switch ($nubmer){
    case 0:
    case $nubmer < 0:
        echo 'Number is zero';
        break;
    case 1:
    //case $nubmer === 1: // эту строку не обязательно писать , всё отлично работало без её наличия
        echo 'Number is one';
        break;
    case 2:
    //case $nubmer === 2:  // эту строку не обязательно писать , всё отлично работало без её наличия
        echo 'Number is two';
        break;
    case $nubmer % 2 === 0:
         echo "Nubmer {$nubmer} is even";
         break;
    default:
        echo "Nubmer {$nubmer} is odd";
}
echo '<br>';

echo $nubmer % 2 === 0    ? "Number {$nubmer} is even "    : "Number {$nubmer} is odd"; // тернарный оператор
// тернарник - использовать в максимально простом случае , для проверки чего-либо

echo '<br>';

    $message = $nubmer % 2 === 0 ? 'even' : 'Odd';
    echo "Number {$nubmer} is  $message";

echo '<br>';


//// HOMEWORK
///
///
$x = (int)$_GET; //(Не обязательная строка ?) , так не ругается еррор репортинг
$x = $x % 1 === 0  ;

if ($x == 1) {
    echo 1;
}
if ($x == 2){
    echo 2;
}
if ($x == 3){
    echo 3;
}
/// 123

echo '<br>';

/// Ternary operator

//$result =(int)$_GET['p1'];  ПОпытка 1
//$printmessage = ($result >0) % 2 === 0 ? "Number {$result} is EVEN " :
//    ($result === 0 ? "Number  is Zero0 " : "Nubmer {$result} is 0DD");
//echo $printmessage;

//$result =(int)$_GET['p1']; Попытка 2
//$printmessage = ($result > 0) % 2 === 0 ? "Number {$result} is EVEN " :
//    (($result > 0) % 2 !== 0 ? "Number  is ODD" : 'ZERO');
//echo $printmessage;

//$result =(int)$_GET['p1']; Рабочий не полный 1
//$printmessage = $result === 0 ? 'ZERO' : ($result % 2 === 0 ? 'EVEN' : 'ODD');
//echo "NOMER {$result} is $printmessage";
//
echo '<br>';

$result =(int)$_GET['p1'];
$printmessage = $result === 0 ? 'ZERO' : ($result === 1 ? 'ONE'  : ($result === 2 ? 'TWO' :
($result % 2 === 0 ? 'EVEN': 'ODD')));
echo "NOMER {$result} is $printmessage";
