<?php

function Delete () : array
{
    $sql = 'DELETE FROM categories WHERE select id = id';
$stmt = mysqli_prepare(getDb(), $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

return mysqli_fetch_all($result, MYSQLI_ASSOC);
    header('Location: /shop/categories/create');


}

//
//Delete ();
//
//header('Location: /shop/categories/create');

//var_dump(123);
