<?php
$messages =[];
$file = fopen (__DIR__ . 'storage5','rb');
while ($line = fgets($file, 1024)) {  // fgets - чтение файла построчно
    $messages[] = json_decode(trim($line), true, 512, JSON_THROW_ON_ERROR); // trim - обрезает переносы строк и проблемы - в начала и конце строки
}
fclose($file);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" >
</head>

<body class="text-white">
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="../js/jquery-3.5.1.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->

    <h5 class="col-3 text-center" >Enter your data below:</h5>
<form action="/chat/send-message.php" method="post" class="col-6" >
    <div>
        <label for="nickname" class="pb-2 pt-3 pl-3" >Nickname</label>
        <input type="text" name="nickname1" id="nickname0" >
    </div>
    <div>
        <label  class="pb-2 pt-2 pl-3">Password</label>
        <input type="password" name="password" id="password1" class="ml-1">
    </div>
    <div>
        <label  class="pb-2 pt-2 pl-3">E-mail</label>
        <input type="email" name="email" id="email1" class="ml-4" >
    </div>
    <div>
        <label for="message" class="pb-2 pt-2 pl-3">Message</label>
        <textarea name="message" id="message1" rows="3" cols="23 " class="ml-1" ></textarea>
    </div>
    <button type="submit" class="ml-5 mb-2 pb-1 pt-1 col-3 " style="margin-left: 120px!important;" >Send Message</button>
</form>


    <table style="border: #491217; width: 96%;" class="ml-2 mr-2"    border="1px;">
        <tr>
            <th>Nickname</th>
            <th>password</th>
            <th>E-mail</th>
            <th>Message</th>
            <th>Time</th>

        </tr>


    <?php foreach ($messages as $message) : ?>
        <tr>
            <td><?= $message['nickname1'] ?></td>
            <td><?= $message['password'] ?></td>
            <td><?= $message['email'] ?></td>
            <td><?= $message['message'] ?></td>
            <td><?= $message['time'] ?></td>
        </tr>

    <?php endforeach; ?>
    </table>
</body>
</html>

<style>
    a:link {
        color: #629CCC; /* Цвет ссылок */
        padding: 2px; /* Поля вокруг текста */
    }
    a:hover {

        color: #ffe; /* Цвет ссылки */
    }
    body {background: url(../img/2.jpg);}
</style>

<!--
Add bad words filter
Add more fields to form (write, save and print)
EXTENDED
Add bootstrap https://getbootstrap.com/
Add reply button and threads
Add delete message button
-->
