<?php
if (1>0) {
    echo '<h1>TEST</h1>';
}
?>

<ul>
    <li>TEST 1</li>
    <li>TEST 2</li>
    <li>TEST 3</li>-->
    <?php if (isset($_GET['p1']) && $_GET['p1'] % 2 === 0) : ?>
        <!-- Если существует в массиве ГЕТ ключик P1 и ключ Р1 четный, тогда-->
        <li>TEST 4</li>
    <?php endif ?>
</ul>
