<main class="container">
  <h1 class="alert alert-danger text-center">Sửa danh mục</h1>

  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md">
        <div class="mb-3">
          <label for="id" class="form-label">ID danh mục:</label>
          <input type="text" class="form-control" disabled value="<?= $category['id'] ?>">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Tên danh mục<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="ten_dm" autofocus required value="<?= $category['ten_dm'] ?>">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Trạng thái<span class="text-danger">*</span></label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai1" value="show" <?= $category['trang_thai'] == "show" ? "checked" : "" ?>>
            <label class="form-check-label" for="trang_thai1">
              Show
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai2" value="hide" <?= $category['trang_thai'] == "hide" ? "checked" : "" ?>>
            <label class="form-check-label" for="trang_thai2">
              Hide
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Mô tả:</label>
          <input type="text" class="form-control" id="name" name="mo_ta" value="<?= $category['mo_ta'] ?>">
        </div>
      </div>

      <div class="col-md">
        <label for="image" class="form-label">Hình ảnh:</label>
        <div class="mb-3 input-group">
          <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="hinh_anh">
          <label class="input-group-text" for="image">Tải lên</label>
        </div>
        <div class="text-center"><img id="output" width="200px" height="200px" src="uploads/<?= $category['hinh_anh'] ?>" /></div>
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <a href="./?action=viewCategory" class="btn btn-secondary">Go back</a>
      <button type="submit" class="btn btn-warning">Save</button>
    </div>
  </form>
</main>