<?php
$config = require __DIR__ . '/config.php';

$baseDir = rtrim($config['baseDir'], '/');
$webRout = rtrim($config['webRout'], '/');

$baseInsideDir = $_POST['baseDir'] ?? null;
$rout = ltrim($_GET['rout'] ?? '', '/');
//$actualRout = $baseDir; хз что это

if ($rout) {
    $actualRout = realpath("{$baseDir}/{$rout}");
}

//$actualDir = $actualRout;
$actualInsideRout = ltrim(str_replace($baseDir, '', $actualRout), '/');

$actualDir = dirname($actualRout);
$actualInsideRout = dirname($actualInsideRout);

function removeDir($actualInsideRout) {
    $files = array_diff(scandir($actualInsideRout),['..','.']);

        foreach ($files as $file) {
            $path = $actualInsideRout . '/' . $file;

            if (is_dir($path)) {
                removeDir($path);
                exit;
            }   else {
                    unlink($path);
            }
        }
    rmdir($actualInsideRout);
}

removeDir($actualInsideRout);

header("Location: index.php?rout={$baseInsideDir}");
exit;