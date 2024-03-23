<main class="container">
  <h1 class="text-center alert alert-danger">Danh sách sản phẩm</h1>
  <a href="?action=addProduct" class="btn btn-secondary">Thêm sản phẩm</a>
  <table class="mt-3 table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Tên</th>
        <th scope="col">Giá</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $products = listAll('tb_san_pham');
      foreach ($products as $product) {
      ?>
        <tr>
          <td><?= $product['id'] ?></td>
          <td><img width="100px" height="100px" src="uploads/<?= $product['thumbnail'] ?>" alt="<?= $product['ten_sp'] ?>"></td>
          <td><?= $product['ten_sp'] ?></td>
          <td><?= $product['gia_sp'] ?></td>
          <td><?= showOne('tb_danh_muc_sp', $product['id_dm'])['ten_dm'] ?></td>
          <td><?= $product['so_luong'] ?></td>
          <td><?= $product['trang_thai'] ?></td>
          <td>
            <a href="?action=viewProductDetail&id=<?= $product['id'] ?>" class="btn btn-primary mb-1">
              Xem chi tiết
            </a>
            <a href="?action=editProduct&id=<?= $product['id'] ?>" class="btn btn-warning mb-1">
              <i class="fa-solid fa-pen-to-square"></i>
              Sửa
            </a>
            <a href="?action=deleteProduct&id=<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm <?= $product['ten_sp'] ?>')">
              <i class="fa-solid fa-trash"></i>
              Xóa
            </a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</main>