<?php

require_once 'common/env.php';
require_once 'common/helper.php';
require_once 'common/connect-db.php';

require_file(PATH_CONTROLLERS);
require_file(PATH_MODELS);

$act =  $_GET['act'] ?? '/';

match ($act) {
  '/' => homeIndex(),
};

require_once 'common/disconnect-db.php';
