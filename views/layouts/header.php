<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang quản trị</title>
  <link rel="shortcut icon" href="../assets/logo/logo-black.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-6-pro@6.4.0/css/all.min.css" integrity="sha256-R6pa/zpbhz9IjJIAXKP/0Kk53cRwfsjdik4Ojf9lOrQ=" crossorigin="anonymous">
</head>

<body class="bg-light">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary container">
      <div class="container-fluid">
        <a class="navbar-brand" href=".">
          LOGO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href=".">Trang chủ</a>
            </li>
            <?php if (isset($_SESSION['customer']) || isset($_COOKIE['customer'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewCategory">Danh mục sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewProduct">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewCustomer">Người dùng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewChucVu">Chức vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewPromotion">Khuyến mãi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewBlog">Bài viết</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewComment">Bình luận</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewEvaluation">Đánh giá</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=viewContact">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=logout">Đăng xuất</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="ms-auto btn btn-success" href="?action=login">Đăng nhập</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>