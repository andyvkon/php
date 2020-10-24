<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Error: Not Post Access Method";
    exit;
}
$message = $_POST['message'] ?? null;
$nickname = $_POST['nickname1'] ?? null ;
$password = $_POST['password'] ?? null;
$email = $_POST['email'] ?? null;

if (!$nickname || !$message || !$password || !$email) {
    exit ('Nickname , message , password and E-mail are required!');
}
if (!preg_match('/^[a-zA-Z0-9]+$/', $nickname) || !$nickname ) {  // если не буквы алфавита то ошибка
    //preg_match -  выполняет поиск в строке по регулярному выражению и возвращает 0 или 1 если найдено хоть 1-но совпадение
    echo $InvalidNickname = 'Error: Your nickname contain forbidden symbols! Please try again';
    exit;
}
if (!preg_match('/^[a-zA-Z0-9]+$/', $password) || !$password ) {
    echo $InvalidNickname = 'Error: Your Password contain forbidden symbols! </br> Please use only English letter from A to Z and numbers';
    exit;
}
//if (!preg_match('/^[a-zA-Z0-9]+$/', $message) || !$message ) {
//    echo $InvalidNickname = 'Error: Your Message contain forbidden symbols! </br> Please use only English letter from A to Z and numbers';
//    exit;
//}


//    //FILTER IF START
//if (($message === ('fuck')) || ($message === ('ass')) || ($message === ('shit')) || ($message === ('motherfucker'))
//    || ($message === ('asshole')) ){
//    echo $uncensored = "Error: Message contain uncensored words";
//exit;}
//
//if (($nickname === ('fuck')) || ($nickname === ('ass')) || ($nickname === ('shit')) || ($nickname === ('motherfucker'))
//    || ($nickname === ('asshole')) ){
//    echo $uncensored = "Error: Your Nickname contain uncensored words";
//    exit;}
//
//    //FILTER  IF END


       //FILTER foreach START
    $bad = array('bird', 'cow', 'milk', 'world');
    foreach ($bad as $w)
        if ($message === $w) {
        echo 'Error: Message contain uncensored words';
        exit;
}
    //FILTER foreach END




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


        header('Location: /chat/');
        exit;




