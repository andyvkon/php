<?php

$nickname = $_POST['nickname1'] ?? null ;
$password = $_POST['password'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
if (!$nickname || !$message || !$password || !$email) {
    exit ('Nickname , message , password and E-mail are required!');
}


$data = [
    'nickname1' => $nickname,
    'password' => $password,
    'email' => $email,
    'message' => nl2br($message), // nl2br преобразует переносы строк в бр теги хтмл
    'time' => date('Y-m-d H:i:s')
];

$content = json_encode($data, JSON_THROW_ON_ERROR) . PHP_EOL;
//$content = serialize($data);
file_put_contents(__DIR__ . 'storage5', $content, FILE_APPEND);



//$uncensoredArray = require_once(__DIR__ . '/uncensored.php'); // включает файл один раз
//$uncensoredWords = implode(')|(', $uncensoredArray);  // implode — Объединяет элементы массива в строку
//
//if (preg_match("/({$uncensoredWords})/iu", $message)) { //preg_match - Выполняет проверку на соответствие регулярному выражению , похожа на  preg_replace
//    var_dump( 'Uncensored Message');
//
////    file_put_contents(__DIR__ . '/base', json_encode($postDataArray));
//}
//else {
//    header('Location: /chat/');
//
//    exit;
//}

header('Location: /chat/');
exit;
