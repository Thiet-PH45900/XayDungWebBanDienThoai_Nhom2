<?php

function viewProduct()
{
  require_once PATH_VIEWS . '/product/view.php';
}

function addProduct()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_san_pham';

    $data = [
      'ten_sp' => $_POST['ten_sp'],
      'gia_sp' => $_POST['gia_sp'],
      'so_luong' => $_POST['so_luong'],
      'mo_ta' => $_POST['mo_ta'],
      'trang_thai' => $_POST['trang_thai'],
      'id_dm' => $_POST['id_dm'],
      'ngay_nhap' => $_POST['ngay_nhap'],
    ];

    $image = uploadImage($_FILES['hinh_anh']);
    $data['thumbnail'] = $image;

    insert($tableName, $data);
    header('Location: ./?action=viewProduct');
  }
  require_once PATH_VIEWS . '/product/add.php';
}

function editProduct()
{
  $id = $_GET['id'];
  $tableName = 'tb_san_pham';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'ten_sp' => $_POST['ten_sp'],
      'gia_sp' => $_POST['gia_sp'],
      'so_luong' => $_POST['so_luong'],
      'mo_ta' => $_POST['mo_ta'],
      'trang_thai' => $_POST['trang_thai'],
      'id_dm' => $_POST['id_dm'],
      'ngay_nhap' => $_POST['ngay_nhap'],
    ];

    update($tableName, $id, $data);

    header('Location: ./?action=viewProduct');
  } else {
    $product = showOne($tableName, $id);
    require_once PATH_VIEWS . '/product/edit.php';
  }
}

function deleteProduct()
{
  $id = $_GET['id'];
  $tableName = 'tb_san_pham';

  delete($tableName, $id);

  header('Location: ./?action=viewProduct');
}
