<main class="container">
  <h1 class="alert alert-danger text-center">Sửa thông tin người dùng</h1>

  <form method="post" enctype="multipart/form-data" novalidate>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email" name="email" value="<?= $customer['email'] ?>">
        </div>
        <div class="mb-3">
          <label for="full-name" class="form-label">Họ và tên:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="full-name" name="ho_ten" required value="<?= $customer['ho_ten'] ?>">
        </div>
        <label class="form-label">Giới tính:<span class="text-danger">*</span></label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi_tinh1" value="male" <?= $customer['gioi_tinh'] == "male" ? "checked" : "" ?>>
          <label class="form-check-label" for="gioi_tinh1">
            Nam
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gioi_tinh" value="female" id="gioi_tinh2" <?= $customer['gioi_tinh'] == "female" ? "checked" : "" ?>>
          <label class="form-check-label" for="gioi_tinh2">
            Nữ
          </label>
        </div>
        <div class="mb-3">
          <label for="dia_chi" class="form-label">Địa chỉ:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="dia_chi" name="dia_chi" required value="<?= $customer['dia_chi'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label" for="date">Ngày sinh:<span class="text-danger">*</span></label>
          <input type="date" class="form-control" name="ngay_sinh" id="date" required value="<?= $customer['ngay_sinh'] ?>">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label" for="phone-number">Số điện thoại:<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="so_dien_thoai" id="phone-number" required value="<?= $customer['so_dien_thoai'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label" for="role-id">Chức vụ:<span class="text-danger">*</span></label>
          <select class="form-select" id="role-id" name="id_cv" required>
            <?php $role = showOne('tb_chuc_vu', $customer['id_cv']) ?>
            <option selected hidden value="<?= $role['id'] ?>"><?= $role['chuc_vu'] ?></option>
            <?php
            $roles = listAll('tb_chuc_vu');
            foreach ($roles as $role) {
            ?>
              <option value="<?= $role['id'] ?>"><?= ucfirst($role['chuc_vu']) ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <label for="image" class="form-label">Avatar:</label>
        <div class="mb-3 input-group">
          <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="avatar">
          <label class="input-group-text" for="image">Upload</label>
        </div>
        <div class="text-center">
          <img id="output" width="200px" height="200px" src="uploads/<?= $customer['avatar'] ?>" />
        </div>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <a href="./?action=viewCustomer" class="btn btn-secondary">Go back</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
</main>