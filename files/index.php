<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
<?php
//phpinfo(); exit;

error_reporting(E_ALL);
ini_set('upload_max_filesize', '5M');
$config = require __DIR__ . '/config.php';
//phpinfo(); exit;

$baseDir = rtrim($config['baseDir'], '/');
$webRout = rtrim($config['webRout'], '/');

$actualRout = $baseDir;

$rout = ltrim($_GET['rout'] ?? '', '/');
if ($rout) {
    $actualRout = realpath("{$baseDir}/{$rout}");
}

$actualDir = $actualRout;
$actualInsideRout = ltrim(str_replace($baseDir, '', $actualRout), '/');

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
        case 'image/pdf':
           $content = "<img src='storage/{$rout}' alt='Image' width='20%'>";
            break;
        case 'archive/rar':
        case 'archive/zip':
             $content = "<img><i class='far fa-file-archive'></i></img>";
            break;
        case 'text/plain':
            $content = nl2br(file_get_contents($actualRout));
            break;
//        case 'text/pdf':
//            $content = file_get_contents($actualRout);
//            break;
        default:
            $content =
                "File {$rout} can not be processed";

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
//
// 3. Users counter (unique and return)

?>
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
        <td colspan="2" style="text-align: center!important;">
            <a href="index.php" >HOME</a>/<a href="<?= $actualInsideRout ?>"><?= $actualInsideRout ?></a>
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
                <?php foreach ($dirData as $dirRout) : ?>
                    <li><a href="?rout=<?= $actualInsideRout ?>/<?= $dirRout ?>"><?= $dirRout ?></a></li>
                <?php endforeach; ?>

            </ul>
        </td>
        <td align="top">
            <?= $content ?>
        </td>
    </tr>
    <?php

   // var_dump($actualRout); // /var/www/Homeworks/2020.10.21/storage
    //var_dump($actualDir); // /var/www/Homeworks/2020.10.21/storage

    ?>
</table>
</body>
</html>