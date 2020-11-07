<?php
error_reporting(E_ALL);
$config = require __DIR__ . '/config.php';

$baseDir = rtrim($config['baseDir'], '/');
$baseInsideDir = $_POST['baseDir'] ?? null;
$name = $_POST['name'] ?? null;



$rout = sprintf(
    '%s/%s/%s', rtrim($config['baseDir'], '/'),  rtrim($baseInsideDir, '/'),  trim($name)
);

function removeDir($rout) {
    $files = array_diff(scandir($rout),['..','.']);

        foreach ($files as $file) {
            $path = $rout . '/' . $file;

            if (is_dir($path)) {
                removeDir($path);
            }   else {
                    unlink($path);
            }
        }
    rmdir($rout);
}

removeDir($rout);

header("Location: index.php");
exit;