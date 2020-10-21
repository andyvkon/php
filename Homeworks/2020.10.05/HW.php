<?php
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