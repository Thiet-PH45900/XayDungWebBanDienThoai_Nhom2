<main class="container">
  <h1 class="text-center alert alert-danger">Danh sách danh mục sản phẩm</h1>
  <a href="?action=addCategory" class="btn btn-secondary">Thêm danh mục</a>
  <table class=" table table-striped table-hover table-bordered mt-3">
    <thead>
      <tr>
        <th scope="col" class="text-center">
          <input class="form-check-input mt-0" type="checkbox" name="select-all">
        </th>
        <th scope="col">ID</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $categories = listAll('tb_danh_muc_sp');
      foreach ($categories as $category) {
      ?>
        <tr>
          <td class="text-center">
            <input class="form-check-input mt-0" type="checkbox" value="<?= $category['id'] ?>">
          </td>
          <td><?= $category['id'] ?></td>
          <td><?= $category['ten_dm'] ?></td>
          <td><?= $category['trang_thai'] ?></td>
          <td>
            <a href="./?action=editCategory&id=<?= $category['id'] ?>" class="btn btn-warning mb-2">
              <i class="fa-solid fa-pen-to-square"></i>
              Sửa
            </a>
            <a href="./?action=deleteCategory&id=<?= $category['id'] ?>" class="btn btn-danger mb-2" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục <?= $category['ten_dm'] ?>')">
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