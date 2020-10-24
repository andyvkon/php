<?php

$nickname = $_POST['nickname1'] ?? null ;
$password = $_POST['password'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
if (!$nickname || !$message || !$password || !$email) {
    exit ('Nickname , message , password and E-mail are required!');
}



if (!$message = ('fuck' || 'shit' || 'asshole' || 'motherfucker' || 'fat' || 'stupid')) {

//if ($message = ('fuck' || 'shit' || 'asshole' || 'motherfucker' || 'fat' || 'stupid')) {
    // $message = '*uncensored* }'

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

    //$uncensoredarray = require_once(__DIR__ . '/uncensored.php'); // включает файл один раз
    //$uncensoredWords = implode(')|(', $uncensoredarray);  // implode — Объединяет элементы массива в строку

    //if (preg_match("/({$uncensoredWords})/iu", $message)) {
    //    var_dump( 'Uncensored Message');
    //
    //    $postsData = file_get_contents(__DIR__ . '/posts-pivot-base.json');
    //    $postsExist = strlen($postsData) > 0;
    //    $postDataArray = $postsExist ? json_decode($postsData, true) : [];
    //    $recordId = $postsExist ? max(array_keys($postDataArray)) + 1 : 1;
    //
    //    $postDataArray[$recordId] =
    //        [
    //            'nickname' => $nickname,
    //            'message' => $message,
    //            'unixTimeCreated' => time(),
    //            'parentPostId' => ($_POST['post_type'] === 'new_post') ? null : (int)$_POST['current_posts_list'],
    //        ];

    //    file_put_contents(__DIR__ . '/posts-pivot-base.json', json_encode($postDataArray));
    //}
    //else {
        header('Location: /chat/');
        exit;
    //}
    }
else {
   echo '<h3 style="margin-left: 30%;">Error: Message contain bad words , please refrase your message!</h3>';
}



