<main class="container">
  <h1 class="alert alert-danger text-center">Sửa sản phẩm</h1>

  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md">
        <div class="mb-3">
          <label for="id" class="form-label">Id sản phẩm:</label>
          <input type="text" class="form-control" disabled value="<?= $product['id'] ?>">
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Tên sản phẩm:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="ten_sp" required value="<?= $product['ten_sp'] ?>">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Giá sản phẩm:<span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="price" name="gia_sp" placeholder="0" required value="<?= $product['gia_sp'] ?>">
        </div>

        <div class="mb-3">
          <label for="quantity" class="form-label">Số lượng:<span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="quantity" name="so_luong" placeholder="0" required value="<?= $product['so_luong'] ?>">
        </div>

        <div class="my-3">
          <label class="label-form" for="category-id">Danh mục:<span class="text-danger">*</span></label>
          <select class="form-select" id="category-id" name="id_dm" required>
            <?php $category = showOne('tb_danh_muc_sp', $product['id_dm']) ?>
            <option selected hidden value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
            <?php
            $categories = listAll('tb_danh_muc_sp');
            foreach ($categories as $category) {
              if ($category['trang_thai'] == 'show')
            ?>
              <option value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="my-3">
          <label class="label-form" for="trang_thai">Trạng thái:<span class="text-danger">*</span></label>
          <select class="form-select" id="trang_thai" name="trang_thai" required>
            <option value="<?= $product['trang_thai'] ?>" selected hidden><?= ucfirst($product['trang_thai']) ?></option>
            <option value="show">Show</option>
            <option value="hide">Hide</option>
          </select>
        </div>

        <div class="my-3">
          <label class="label-form" for="date">Ngày nhập:<span class="text-danger">*</span></label>
          <input type="date" name="ngay_nhap" id="date" value="<?= $product['ngay_nhap'] ?>">
        </div>
      </div>

      <div class="col-md">
        <div class="mb-3">
          <label for="description" class="form-label">Mô tả:</label>
          <textarea type="text" class="form-control" id="description" name="mo_ta" rows="2"><?= $product['mo_ta'] ?></textarea>
        </div>

        <label for="image" class="form-label">Thumbnail:<span class="text-danger">*</span></label>
        <div class="mb-3 input-group">
          <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="thumbnail" required>
          <label class="input-group-text" for="image">Tải lên</label>
        </div>
        <div class="text-center"><img id="output" width="200px" height="200px" src="uploads/<?= $product['thumbnail'] ?>" /></div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-3">
      <a href="./?action=viewProduct" class="btn btn-secondary">Go back</a>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</main>