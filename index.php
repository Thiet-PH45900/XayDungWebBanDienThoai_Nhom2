<?php

ob_start();
session_start();

require_once 'common/env.php';
require_once 'common/helper.php';
require_once 'common/connect-db.php';

require_file(PATH_CONTROLLERS);
require_file(PATH_MODELS);

require_once PATH_VIEWS . 'layouts/header.php';

if (isset($_COOKIE['customer'])) {
  $_SESSION['customer'] = explode(",", $_COOKIE['customer']);
}

$act =  $_GET['act'] ?? '/';

match ($act) {
  '/' => homeIndex(),
  'login' => loginIndex(),
  'logout' => authLogout(),
};

require_once PATH_VIEWS . 'layouts/footer.php';

require_once 'common/disconnect-db.php';
ob_end_flush();
