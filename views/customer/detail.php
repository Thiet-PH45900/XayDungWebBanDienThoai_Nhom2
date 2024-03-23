<main class="container">
  <h1 class="alert alert-danger text-center">Sửa thông tin người dùng</h1>

  <form method="post" enctype="multipart/form-data" novalidate>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" value="<?= $customer['email'] ?>" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Họ và tên:</label>
          <input type="text" class="form-control" readonly value="<?= $customer['ho_ten'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Giới tính:</label>
          <input class="form-control" type="text" readonly value="<?= $customer['gioi_tinh'] == 'male' ? 'Nam' : 'Nữ' ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Địa chỉ:</label>
          <input type="text" class="form-control" readonly value="<?= $customer['dia_chi'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label" for="date">Ngày sinh:</label>
          <input type="date" class="form-control" readonly value="<?= $customer['ngay_sinh'] ?>">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Số điện thoại:</label>
          <input type="number" class="form-control" readonly value="<?= $customer['so_dien_thoai'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label" for="role-id">Chức vụ:</label>
          <input type="text" class="form-control" readonly value="<?= showOne('tb_chuc_vu', $customer['id_cv'])['chuc_vu'] ?>">
        </div>
        <label for="image" class="form-label">Avatar:</label>
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