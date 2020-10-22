<?php

$nickname = $_POST['nickname'] ?? null ;
$password = $_POST['password'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
if (!$nickname || !$message || !$password || !$email) {
    exit ('Nickname , message , password and E-mail are required!');
}


$data = [
    'nickname' => $nickname,
    'password' => $password,
    'email' => $email,
    'message' => nl2br($message), // nl2br преобразует переносы строк в бр теги хтмл
    'time' => date('Y-m-d H:i:s')
];

$content = json_encode($data, JSON_THROW_ON_ERROR) . PHP_EOL;
//$content = serialize($data);
file_put_contents(__DIR__ . 'storage5', $content, FILE_APPEND);

header('Location: /chat/');
exit;