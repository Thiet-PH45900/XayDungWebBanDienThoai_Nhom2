<main class="container">
  <h1 class="alert alert-danger text-center">Edit Category</h1>

  <form style="margin: auto; max-width: 500px;" method="post">
    <div class="mb-3">
      <label for="id" class="form-label fs-3">Category id:</label>
      <input type="text" class="form-control" disabled value="<?= $category['id']; ?>">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label fs-3">Category name:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="name" name="ten_dm" value="<?= $category['ten_dm']; ?>" required>
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Trạng thái<span class="text-danger">*</span></label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai1" value="show" <?= $category['trang_thai'] == 'show' ? 'checked' : '' ?>>
        <label class="form-check-label" for="trang_thai1">
          Show
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai2" value="hide" <?= $category['trang_thai'] == 'hide' ? 'checked' : '' ?>>
        <label class="form-check-label" for="trang_thai2">
          Hide
        </label>
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <a href="./?controller=category" class="btn btn-secondary">Go back</a>
      <button type="submit" class="btn btn-warning">Save</button>
    </div>
  </form>
</main>