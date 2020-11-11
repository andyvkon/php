 <?php
//ob_start();
//echo 'Output text';
//$data = ob_get_clean();
//
//$data .= ' Updated';
//
//var_dump($data);

$data = ['test1','test2','test3','test 4','test 5','test 6'];

ob_start();
require_once __DIR__ . '/templates/inner.php';
$content = ob_get_clean();

require_once __DIR__ . '/templates/global.php';

