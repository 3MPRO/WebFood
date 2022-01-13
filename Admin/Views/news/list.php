<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<a href="?mod=news&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>

<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr style="
    background-color: #4eb92d;
    color: white;">
      <th scope="col">ID Tin Tức</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Ngày Đăng</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) {?>
      <tr>
        <td><?= $row['idTinTuc'] ?></td>
        <td><?= $row['TieuDe'] ?></td>
        <td><?= $row['ngayDang'] ?></td>
        <td>
          <a href="?mod=news&act=detail&id=<?= $row['idTinTuc'] ?>" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=news&act=edit&id=<?= $row['idTinTuc'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=news&act=delete&id=<?= $row['idTinTuc'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>