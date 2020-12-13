<?php
/**
 * @param string $url
 * @param array $config
 */
function dispatch(string $url, array $config): void
{
    $parts = prerapeParts($url , $config);

    $file = $config['baseDir'] . '/controllers/' . array_shift($parts) . '.php';
    if(!file_exists($file)) {
        exit ("Controller doesnt exist");
    }

    require_once $file;

    $function = array_shift($parts);
    $function = str_replace('-', ' ', $function);
    $function = ucwords($function);
    $function = 'action' . str_replace(' ', '', $function);


    if (!function_exists($function)){
        exit("Action doesnt exist");
    }

    $function();
}

/**
 * @param string $url
 * @param array $config
 * @return array
 */

function prerapeParts(string $url , array $config) : array
{
    $prefixEnd = strlen($config['webRout']);
    $url = trim(substr($url, $prefixEnd), "\t\n\r\0\x0B/");
    return explode('/', $url);
}
