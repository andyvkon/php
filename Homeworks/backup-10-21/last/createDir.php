<?php
error_reporting(E_ALL);
$config = require __DIR__ . '/config.php';

$baseInsideDir = $_POST['baseDir'] ?? null;
$name = $_POST['name'] ?? null;
$baseDir = rtrim($config['baseDir'], '/');
$webRout = rtrim($config['webRout'], '/');
$actualRout = $baseDir;
$actualDir = $actualRout;
$actualInsideRout = ltrim(str_replace($baseDir, '', $actualRout), '/');

if (!$name) {
    exit('Dir and name are required');
}


$rout = sprintf(
    '%s/%s/%s',
    rtrim($config['baseDir'], '/'),
    rtrim($baseInsideDir, '/'),
    trim($name)
);

if (!mkdir($rout) && !is_dir($rout)) {
    exit(sprintf('Directory "%s" was not created', $rout));
}

header("Location: index.php?rout={$baseInsideDir}");
//header("Location: index.php?rout={$baseInsideDir}");
exit;