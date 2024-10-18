<h1>Đăng Nhập</h1>
<?php if (isset($_SESSION['loi'])):?>
    <div class="alert alert-danger" role="alert">
  <?= $_SESSION['loi'] ?>
</div>
 <?php endif; unset($_SESSION['loi']); ?>
<form method="post" action=""> 
          <div class="mb-3">
            <label for="phone" class="form-label">Số Điện Thoại</label>
            <input type="text" class="form-control" name="SoDienThoai" id="phone">
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" name ="MatKhau" id="pass">
          </div>
          <button type="submit" class="btn btn-primary">Đăng Nhập</button>

          <p class="my-3">Bạn đã có tài khoản chưa nếu chưa thì có thể tạo <a href="<?=$base_url?>user/logsign">Đăng Ký</a></p>
        </form>