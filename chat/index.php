<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L:07</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" >
    <title>Hello, world!</title>
</head>

<body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="../js/jquery-3.5.1.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->


<form action="/samples/send-message.php" method="post">
    <div>
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" id="nickname">
    </div>
    <div>
        <label for="message" class="bg-primary">Message</label>
        <input type="message" name="message" id="message">
    </div>
    <button type="submit">Send Message</button>
</form>
</body>
</html>