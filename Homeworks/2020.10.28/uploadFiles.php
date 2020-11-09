<?php
error_reporting(E_ALL);
require_once  __DIR__ . '/security.php';


$attachment = isset($_FILES['attachment']) ? reArrayFiles($_FILES['attachment']) : null;
if (!$attachment) {
    exit('Uploading can not be completed');
}

$baseInsideDir = $_POST['baseDir'] ?? '';

$config = require __DIR__ . '/config.php';

$dir = $rout = sprintf(
    '%s/%s',
    rtrim($config['baseDir'],'/'),
    rtrim($baseInsideDir, '/'),
  );

foreach ($attachment as $attach){
    $rout = sprintf(
        '%s/%s',
        $dir,
        trim($attach['name'])
    );
    move_uploaded_file($attach['tmp_name'], $rout);
}

header("Location: index.php?rout={$baseInsideDir}");
exit;


function reArrayFiles(array $filePost) : array
{
    $fileArray = [];
    $fileCount = count($filePost['name']);
    $fileKeys = array_keys($filePost);

    for ($i = 0; $i < $fileCount; $i++) {
        foreach ($fileKeys as $key) {
            $fileArray[$i][$key] = $filePost[$key][$i];
        }
    }

    return $fileArray;
}
