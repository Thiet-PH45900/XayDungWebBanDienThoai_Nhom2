<?php

function viewCustomer()
{
  require_once PATH_VIEWS . '/customer/view.php';
}

function viewCustomerDetail()
{
  $id = $_GET['id'];
  $tableName = 'tb_nguoi_dung';

  $customer = showOne($tableName, $id);

  require_once PATH_VIEWS . '/customer/detail.php';
}

function addCustomer()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_nguoi_dung';

    $data = [
      'email' => $_POST['email'],
      'mat_khau' => $_POST['mat_khau'],
      'ho_ten' => $_POST['ho_ten'],
      'gioi_tinh' => $_POST['gioi_tinh'],
      'dia_chi' => $_POST['dia_chi'],
      'ngay_sinh' => $_POST['ngay_sinh'],
      'so_dien_thoai' => $_POST['so_dien_thoai'],
      'id_cv' => $_POST['id_cv'],
    ];

    if ($_FILES['avatar']['size'] !== 0) {
      $avatar = uploadImage($_FILES['avatar']);

      if ($avatar) {
        $data['avatar'] = $avatar;
        insert($tableName, $data);
      } else {
        echo '<script>alert("Có lỗi xảy ra vui lòng kiểm tra lại")</script>';
      }
    }

    header('Location: ./?action=viewCustomer');
  }
  require_once PATH_VIEWS . '/customer/add.php';
}

function editCustomer()
{
  $id = $_GET['id'];
  $tableName = 'tb_nguoi_dung';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'email' => $_POST['email'],
      'mat_khau' => $_POST['mat_khau'],
      'ho_ten' => $_POST['ho_ten'],
      'gioi_tinh' => $_POST['gioi_tinh'],
      'dia_chi' => $_POST['dia_chi'],
      'ngay_sinh' => $_POST['ngay_sinh'],
      'so_dien_thoai' => $_POST['so_dien_thoai'],
      'id_cv' => $_POST['id_cv'],
    ];

    if ($_FILES['avatar']['size'] !== 0) {
      $avatar = uploadImage($_FILES['avatar']);
      $data['avatar'] = $avatar;
    }

    update($tableName, $id, $data);

    header('Location: ./?action=viewCustomer');
  } else {
    $customer = showOne($tableName, $id);
    require_once PATH_VIEWS . '/customer/edit.php';
  }
}

function deleteCustomer()
{
  $id = $_GET['id'];
  $tableName = 'tb_nguoi_dung';

  delete($tableName, $id);

  header('Location: ./?action=viewCustomer');
}
