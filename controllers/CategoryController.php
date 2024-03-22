<?php

function viewCategory()
{
  require_once PATH_VIEWS . '/category/view.php';
}

function addCategory()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_danh_muc_sp';
    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'trang_thai' => $_POST['trang_thai'],
    ];

    insert($tableName, $data);

    header('Location: ./?action=viewCategory');
  }
  require_once PATH_VIEWS . '/category/add.php';
}

function editCategory()
{
  $id = $_GET['id'];
  $tableName = 'tb_danh_muc_sp';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'trang_thai' => $_POST['trang_thai'],
    ];

    update($tableName, $id, $data);

    header('Location: ./?action=viewCategory');
  } else {
    $category = showOne($tableName, $id);
    require_once PATH_VIEWS . '/category/edit.php';
  }
}

function deleteCategory()
{
  $id = $_GET['id'];
  $tableName = 'tb_danh_muc_sp';

  delete($tableName, $id);

  header('Location: ./?action=viewCategory');
}
