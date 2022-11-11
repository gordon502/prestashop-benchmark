<?php

$pdo = new PDO('mysql:dbname=prestashop;host=database', 'root', 'password');

//fixCategories();
//fixCategoryNames();
fixProductImages();

function fixCategories() {
    global $pdo;

    $pdo->exec('DELETE FROM ps_category_product');

    for ($i = 1; $i <= 50000; $i++) {
        $id = random_int(1, 32);
        $product = random_int(1, 5000);

        $pdo->exec("INSERT INTO ps_category_product VALUES($id, $product, 0)");
    }
}

function fixCategoryNames() {
    global $pdo;

    for ($i = 3; $i <= 32; $i++) {
        $title = "Category $i";
        $pdo->exec("UPDATE ps_category_lang SET name = '$title' WHERE id_category = $i");
    }
}

function fixProductImages() {
    global $pdo;

    $pdo->exec('DELETE FROM ps_image');

    $productId = 1;
    for ($i = 1; $i < 15000; $i++) {
        $cover = $i % 3 === 1;
        $position = (($i - 1) % 3) + 1;

        $imageId = random_int(1, 15000);
        $imageId = $imageId % 3 === 1 ? $imageId : $imageId - ($imageId % 3) + 1;

        $pdo->exec("INSERT INTO ps_image VALUES($i, $productId, $position, $cover)");

        if ($position === 3) {
            $productId++;
        }
    }
}


