<?php

ob_start();
session_start();

require_once 'common/env.php';
require_once 'common/helper.php';
require_once 'common/connect-db.php';
require_once 'common/model.php';

require_file(PATH_CONTROLLERS);
require_file(PATH_MODELS);

require_once PATH_VIEWS . 'layouts/header.php';

if (isset($_COOKIE['customer'])) {
  $_SESSION['customer'] = explode(",", $_COOKIE['customer']);
}

$action =  $_GET['action'] ?? '/';
$id = $_GET['id'] ?? '';

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

require_once PATH_VIEWS . 'layouts/footer.php';

require_once 'common/disconnect-db.php';
ob_end_flush();
