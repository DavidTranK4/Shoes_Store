<h1>Đăng Ký</h1>
<?php if (isset($_SESSION['thongbao'])):?>
    <div class="alert alert-danger" role="alert">
  <?= $_SESSION['thongbao'] ?>
</div>
 <?php endif; unset($_SESSION['thongbao']); ?>
<form method="post" action=""> 
<div class="mb-3">
            <label for="name" class="form-label">Họ Và Tên</label>
            <input type="text" class="form-control" name="HoVaTen" id="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Số Điện Thoại</label>
            <input type="text" class="form-control" name="SoDienThoai" id="phone">
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" name ="MatKhau" id="pass">
          </div>
          <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>