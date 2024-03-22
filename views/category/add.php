<main class="container">
  <h1 class="alert alert-danger text-center">Add New Category</h1>

  <form style="margin: auto; max-width: 500px;" method="post">
    <div class="mb-3">
      <label for="id" class="form-label">ID danh mục:</label>
      <input type="text" class="form-control" disabled>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Tên danh mục<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="name" name="ten_dm" autofocus required>
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Trạng thái<span class="text-danger">*</span></label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai1" checked value="show">
        <label class="form-check-label" for="trang_thai1">
          Show
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai2" value="hide">
        <label class="form-check-label" for="trang_thai2">
          Hide
        </label>
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <div>
        <a href="./?action=viewCategory" class="btn btn-secondary">Go back</a>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</main>