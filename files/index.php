<?php
error_reporting(E_ALL);
require_once  __DIR__ . '/security.php';

$config = require __DIR__ . '/config.php';

$baseDir = rtrim($config['baseDir'], '/');
$webRout = rtrim($config['webRout'], '/');

$actualRout = $baseDir;

$rout = ltrim($_GET['rout'] ?? '', '/');
if ($rout) {
    $actualRout = realpath("{$baseDir}/{$rout}");
}

$actualDir = $actualRout;
$actualInsideRout = ltrim(str_replace($baseDir, '', $actualRout), '/');
$ext = require __DIR__ . '/extensions.php';

if (mb_strlen($actualDir) < mb_strlen($baseDir)) {
    exit('Directory is not accessed');
}


$content = 'File not selected';
if (is_file($actualRout)) {
    $mimeType = mime_content_type($actualRout);
    switch ($mimeType) {
        case 'image/jpeg':
        case 'image/jpg':
        case 'image/png':
             $content = "<img src='storage/{$rout}' alt='Image' width='20%'>";
            break;
        case 'archive/rar':
        case 'archive/zip':
             $content = "<img><i class='far fa-file-archive'></i></img>";
            break;
        case 'application/pdf':
            $content = "<a href='storage/{$rout}' target='_blank'>Open in new Tab</a>";
            break;
        case 'text/plain':
            $content = nl2br(file_get_contents($actualRout));
            break;
//        case 'text/pdf':
//            $content = file_get_contents($actualRout);
//            break;
        default:
            $content = <<<HTML
        File {$rout} can not be processed <br>
        Try to <a href=\"downloadFile.php?rout={$rout}\" target='_blank'>download</a> 
        HTML;
    }

    $actualDir = dirname($actualRout);
    $actualInsideRout = dirname($actualInsideRout);
}




$dirData = scandir($actualDir);
if (rtrim($actualDir, '/') === $baseDir) {
    $dirData = array_filter($dirData, static function (string $item) {
        return !in_array($item, ['.', '..']);
    });
}

// Home Work:
// 1. Clickable breadcrumbs
// 2. Validation for files uploading
// 2.1. File size
// 2.2. File type
// 2.3. Files quantity

// 3. Users counter (unique and return)
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table width="100%" border="1" cellpadding="10">
    <tr>
        <td colspan="2" >
            <a href="index.php" style="float: left!important;">HOME</a>/<a href="<?= $actualInsideRout ?>"><?= $actualInsideRout ?></a>
            <a href="signOut.php" style="float: right!important;">Sign Out</a>
        </td>

    </tr>
    <tr>
        <td>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
            <form action="createDir.php" method="post">
                <input name="baseDir" value="<?= $actualInsideRout ?>" type="hidden">
                <input name="name" type="text">
                <button type="submit">Create Dir</button>
            </form>
            <form action="deleteDir.php" method="post">
                <input name="baseDir" value="<?= $actualInsideRout ?>" type="hidden">
                <button type="submit" style="margin-top: 10px;  width:60%;">Delete Dir</button>
            </form>
            <hr>
            <form action="uploadFiles.php" method="post" enctype="multipart/form-data">
                <input name="baseDir" value="<?= $actualInsideRout ?>" type="hidden">
                <input name="attachment[]" type="file" multiple="multiple" accept=".txt, .zip, .jpg, .png , .jpeg, .pdf, .zip, .rar">
                <button type="submit">Upload</button>
            </form>
            <hr>
            <ul>
                <?php
//                function scan($dir, $tab) {
//                    global $ext;
//                    global $actualInsideRout;
//                    global $dirRout;
//
//                    $d = opendir($dir);
//                    while ( ($name = readdir($d))  !== false  ){
//                        if ($name == '.' or $name == '..') continue;
//
//                        $path = $dir . '/' . $name;
//                        if (is_dir($path) ) {
//                            echo "<b>{$tab} {$ext['folder']} {$name}</b><br>";
//                            scan ($path, $tab . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" );}
//                        else {
//                            $path_parts = pathinfo($path);
//                            if (isset($path_parts['extension'], $ext) )
//                                echo "{$tab}{$ext[$path_parts['extension']]} <a href='/{$path}'> {$name}</a><br>";
//                            else {
//                                echo "{$tab}{$ext['other']}<a target='_blank' href='/{$path}'> {$name}</a><br>";
//                            }
//                        }
//
//                    closedir($d);
//                }}
//                scan('storage' , '');
//                ?>




                <?php
                    foreach ($dirData as $dirRout) : ?>
                    <a href="?rout=<?= $actualInsideRout ?>/<?= $dirRout ?>"><?= $dirRout ?></a>
                        <br>

                <?php endforeach;?>

            </ul>
        </td>
        <td align="top">
            <?= $content ?>
        </td>
    </tr>

</table>
</body>
</html>
<style>

    a {
        text-decoration: none;

    }

</style>
