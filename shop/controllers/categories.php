<?php

require_once __DIR__ . '/../models/categories.php';

function actionShowAll()
{
    $categories = getCategories();
    var_dump($categories);
}

function actionShow(int $id) {

}

function actionCreate()
{
    if ($_POST && createCategory($_POST)) {
//        header('Location: /shop/categories/show-all');
        header('Location: /shop/categories/create');
        exit;

    }
    require_once __DIR__.'/../views/categories/create.php';

}

function actionDelete(int $id)
{
    $sql = 'DELETE FROM categories WHERE id > 5';
    header('Location: /shop/categories/create');

}
