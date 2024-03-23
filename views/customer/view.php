<main class="container">
  <h1 class="text-center alert alert-danger">Danh sách người dùng</h1>
  <a href="?action=addCustomer" class="btn btn-secondary">Thêm người dùng</a>
  <table class="mt-3 table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Avatar</th>
        <th scope="col">Email</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Chức vụ</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $customers = listAll('tb_nguoi_dung');
      foreach ($customers as $customer) {
      ?>
        <tr>
          <td><?= $customer['id'] ?></td>
          <td>
            <img width="100px" height="100px" src="uploads/<?= $customer['avatar'] ?>" alt="<?= $customer['ho_ten'] ?>">
          </td>
          <td><?= $customer['email'] ?></td>
          <td><?= $customer['ho_ten'] ?></td>
          <td><?= showOne('tb_chuc_vu', $customer['id_cv'])['chuc_vu'] ?></td>
          <td>
            <a href="?action=viewCustomerDetail&id=<?= $customer['id'] ?>" class="btn btn-primary mt-1">
              Xem chi tiết
            </a>
            <?php if (showOne('tb_chuc_vu', $customer['id_cv'])['chuc_vu'] !== 'admin') { ?>
              <a href="./?action=editCustomer&id=<?= $customer['id'] ?>" class="btn btn-warning mt-1">
                <i class="fa-solid fa-pen-to-square"></i>
                Sửa
              </a>
              <a href="./?action=deleteCustomer&id=<?= $customer['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng <?= $customer['email'] ?>')">
                <i class="fa-solid fa-trash"></i>
                Xóa
              </a>
            <?php } ?>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</main>