<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
    <h2>Accordions</h2>
    <p>An accordion with links:</p>

    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-black w3-left-align">
        Accordion 1</button>

    <div id="Demo1" class="w3-hide">
        <a class="w3-button w3-block w3-left-align" href="#">Link 1</a>
        <a class="w3-button w3-block w3-left-align" href="#">Link 2</a>
        <a class="w3-button w3-block w3-left-align" href="#">Link 3</a>
    </div>

</div>
<script>
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>