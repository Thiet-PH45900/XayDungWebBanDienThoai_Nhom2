<main class="container">
  <h1 class="alert alert-danger text-center">Chi tiết sản phẩm</h1>

  <div class="row">
    <div class="col-md">
      <div class="mb-3">
        <label for="id" class="form-label">Id sản phẩm:</label>
        <input type="text" id="id" class="form-control" readonly value="<?= $product['id'] ?>">
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="name" readonly value="<?= $product['ten_sp'] ?>">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Giá sản phẩm:</label>
        <input type="number" class="form-control" id="price" readonly value="<?= $product['gia_sp'] ?>">
      </div>

      <div class="mb-3">
        <label for="quantity" class="form-label">Số lượng:</label>
        <input type="number" class="form-control" id="quantity" readonly value="<?= $product['so_luong'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label" for="category-id">Danh mục:</label>
        <input type="text" class="form-control" id="category-id" readonly value="<?= showOne('tb_danh_muc_sp', $product['id_dm'])['ten_dm'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label" for="trang_thai">Trạng thái:</label>
        <input type="text" class="form-control" id="trang_thai" name="trang_thai" value="<?= ucfirst($product['trang_thai']) ?>" readonly>
      </div>
    </div>

    <div class="col-md">
      <div class="mb-3">
        <label class="form-label" for="date">Ngày nhập:</label>
        <input type="date" class="form-control" name="ngay_nhap" id="date" value="<?= $product['ngay_nhap'] ?>" readonly>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Mô tả:</label>
        <textarea readonly type="text" class="form-control" id="description" name="mo_ta" rows="2"><?= $product['mo_ta'] ?></textarea>
      </div>

      <label for="image" class="form-label">Thumbnail:</label>
      <div class="text-center">
        <img id="output" width="200px" height="200px" src="uploads/<?= $product['thumbnail'] ?>" />
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-between mt-3">
    <a href="./?action=viewProduct" class="btn btn-secondary">Go back</a>
  </div>
</main>