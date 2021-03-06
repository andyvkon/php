<?php
error_reporting(E_ALL);

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

if (mb_strlen($actualDir) < mb_strlen($baseDir)) {
    exit('Directory is not accessed');
}

$content = 'File not selected';
if (is_file($actualRout)) {
    $mimeType = mime_content_type($actualRout);
    switch ($mimeType) {
        case 'image/jpeg':
        case 'image/png':
            $content = "<img src='{$webRout}/{$rout}' alt='Image' width='100%'>";
            break;
        case 'text/plain':
            $content = nl2br(file_get_contents($actualRout));
            break;
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
    //var_dump($webRout); // бесполезный
  //  var_dump($rout); // бесполезный
   // var_dump($actualRout); // /var/www/Homeworks/2020.10.21/storage
    //var_dump($actualDir); // /var/www/Homeworks/2020.10.21/storage
    //var_dump($actualInsideRout); // бесполезный
   // var_dump($dirData); // весь массив , все папки в сторедж
    //var_dump($dirRout); // самый нижний элемент
    ?>
</table>
</body>
</html>