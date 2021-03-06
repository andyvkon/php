
<?php

error_reporting(E_ALL);

require_once __DIR__ . '/security.php';

$baseInsideDir = $_POST['baseDir'] ?? null;
$name = $_POST['name'] ?? null;

if (!$baseInsideDir || !$name) {
    exit('Dir and name are required');
}

$config = require __DIR__ . '/config.php';

$rout = sprintf(
    '%s/%s/%s',
    rtrim($config['baseDir'], '/'),
    rtrim($baseInsideDir, '/'),
    trim($name)
);

if (!mkdir($rout) && !is_dir($rout)) {
    exit(sprintf('Directory "%s" was not created', $rout));
}

header("Location: index_old.php?rout={$baseInsideDir}");
exit;