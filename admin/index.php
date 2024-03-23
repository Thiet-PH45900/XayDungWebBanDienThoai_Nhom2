<?php

require_once '../common/connect-db.php';
require_once '../common/helper.php';
require_once '../common/env.php';
require_once '../common/model.php';

echo 1;die;

require_file(PATH_CONTROLLERS_ADMIN);
require_file(PATH_MODELS_ADMIN);

//điều  hướng


$action =  $_GET['action'] ?? '/';

match ($action) {
    '/' => homeIndex(),
  
    'login' => loginIndex(),
    'logout' => authLogout(),
  
    'viewCategory' => viewCategory(),
    'addCategory' => addCategory(),
    'editCategory' => editCategory(),
    'deleteCategory' => deleteCategory(),
  
    'viewProduct' => viewProduct(),
    'viewProductDetail' => viewProductDetail(),
    'addProduct' => addProduct(),
    'editProduct' => editProduct(),
    'deleteProduct' => deleteProduct(),
  };
  