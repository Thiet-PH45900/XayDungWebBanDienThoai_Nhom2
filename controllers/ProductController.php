<?php

function viewProduct()
{
  require_once PATH_VIEWS . '/product/view.php';
}

function viewProductDetail()
{
  $id = $_GET['id'];
  $tableName = 'tb_san_pham';

  $product = showOne($tableName, $id);

  require_once PATH_VIEWS . '/product/detail.php';
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

    if ($_FILES['thumbnail']['size'] !== 0) {
      $thumbnail = uploadImage($_FILES['thumbnail']);
      if ($thumbnail) {
        $data['thumbnail'] = $thumbnail;
        insert($tableName, $data);
        header('Location: ./?action=viewProduct');
      }
    }
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

    if ($_FILES['thumbnail']['size'] !== 0) {
      $thumbnail = uploadImage($_FILES['thumbnail']);
      $data['thumbnail'] = $thumbnail;
    }

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
