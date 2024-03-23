<?php

function SearchProduct() {
    $products = listAll('tb_san_pham');
    // var_dump($products);
    // die();
    $catalogues = listAll('tb_danh_muc_sp');
    // var_dump($catalogues);die();
    if (isset($_GET["search"])) {
        // var_dump($_GET['catalogue_id']);die();
        $catalogue_id = isset($_GET['catalogue_id']) ? $_GET['catalogue_id'] : null;

        $products = getSeachProduct($catalogue_id);
    }
    

    require_once PATH_VIEWS . '/products/search.php';
}