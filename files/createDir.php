<?php
error_reporting(E_ALL);
require_once  __DIR__ . '/security.php';


$baseInsideDir = $_POST['baseDir'] ?? null;
$name = $_POST['name'] ?? null;

if (!$name) {
    exit('Dir and name are required');
}
$config = require __DIR__ . '/config.php';

$baseDir = rtrim($config['baseDir'], '/');

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