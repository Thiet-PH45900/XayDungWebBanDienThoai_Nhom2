<main class="container">
  <h1 class="alert alert-danger text-center">Thêm sản phẩm</h1>

  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md">
        <div class="mb-3">
          <label for="id" class="form-label">Id sản phẩm:</label>
          <input type="text" class="form-control" disabled>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Tên sản phẩm:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="ten_sp" required autofocus>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Giá sản phẩm:<span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="price" name="gia_sp" placeholder="0" required>
        </div>

        <div class="mb-3">
          <label for="quantity" class="form-label">Số lượng:<span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="quantity" name="so_luong" placeholder="0" required>
        </div>

        <div class="mb-3">
          <label class="form-label" for="category-id">Danh mục:<span class="text-danger">*</span></label>
          <select class="form-select" id="category-id" name="id_dm" required>
            <option selected hidden value="">Chọn...</option>
            <?php
            $categories = listAll('tb_danh_muc_sp');
            foreach ($categories as $category) {
              if ($category['trang_thai'] == 'show') {
            ?>
                <option value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
            <?php
              }
            }
            ?>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label" for="trang_thai">Trạng thái:<span class="text-danger">*</span></label>
          <select class="form-select" id="trang_thai" name="trang_thai" required>
            <option value="show" selected>Show</option>
            <option value="hide">Hide</option>
          </select>
        </div>
      </div>

      <div class="col-md">
        <div class="mb-3">
          <label class="form-label" for="date">Ngày nhập:<span class="text-danger">*</span></label>
          <input type="date" class="form-control" name="ngay_nhap" id="date" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Mô tả:</label>
          <textarea type="text" class="form-control" id="description" name="mo_ta" rows="2"></textarea>
        </div>

        <label for="image" class="form-label">Thumbnail:<span class="text-danger">*</span></label>
        <div class="mb-3 input-group">
          <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="thumbnail" required>
          <label class="input-group-text" for="image">Tải lên</label>
        </div>
        <div class="text-center"><img id="output" width="200px" height="200px" /></div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-3">
      <div>
        <a href="./?action=viewProduct" class="btn btn-secondary">Go back</a>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</main>

<script>
  let currentDate = new Date();

  let year = currentDate.getFullYear();
  let month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
  let day = currentDate.getDate().toString().padStart(2, '0');
  let formattedDate = `${year}-${month}-${day}`;

  document.getElementById('date').value = formattedDate;
</script>