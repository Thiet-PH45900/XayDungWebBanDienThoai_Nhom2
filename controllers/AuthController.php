<?php

if (!function_exists('loginIndex')) {
  function loginIndex()
  {
    if (!empty($_POST)) {
      authLogin();
    }

    require_once PATH_VIEWS . 'auth/login.php';
  }
}

if (!function_exists('authLogin')) {
  function authLogin()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']) ? 1 : 0;

    $customer = getCustomerByEmailAndPassword($email, $password);
    if ($customer != null) {
      $_SESSION['customer'] = $customer;
      if ($remember_me) {
        setcookie('customer', implode(",", $customer), time() + 3600 * 24 * 30);
      }
      header('Location: .');
    } else {
      echo "<script>alert('Email hoặc mật khẩu không chính xác!');</script>";
    }
  }
}

if (!function_exists('authLogout')) {
  function authLogout()
  {
    unset($_SESSION['customer']);
    setcookie('customer', '', time() - 3600);
    header('Location: .');
  }
}
