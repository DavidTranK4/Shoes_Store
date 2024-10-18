<h2>giỏ hàng</h2>

<?php if (isset($_SESSION['thongbao'])):?>
   <div class="alert alert-success" role="alert">
 <?= $_SESSION['thongbao'] ?>
</div>
<?php endif; unset($_SESSION['thongbao']); ?>
<form action="<?=$base_url?>shoe/updateCart" method="post">
<input type="hidden" name="tongtien" id="tongtien">
<table class="table text-center">
    <thead>
        <tr>
           <th>ẢNH</th>
           <th class="text-start">TÊN</th>
           <th class="text-end">GIÁ</th>
           <th>HÀNH ĐỘNG</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ctgiohang as $item): ?>
        <tr>
            <td>
                <img src="<?=$base_url?>upload/product/<?=$item['img']?>" class="rounded-3" style="width:50px">
            </td>
            <td class="text-start"><?=$item['name']?></td>
            <td class="text-end"><?=$item['price']?> VNĐ</td>
            <td>
                <a href="<?=$base_url?>shoe/removeFromCart/<?=$item['masp']?>" class="btn btn-outline-danger">xóa</a>
            </td>
        </tr>
        <?php endforeach;  ?>
    </tbody>
    <tfoot>
        <tr>
            <th class="text-start" colspan="2">TỔNG THÀNH TIỀN</th>
            <th class="text-end">0</th>
            <th>
            <a href="<?=$base_url?>shoe/removeCart" class="btn btn-outline-danger">xóa hết</a>
            </th>
        </tr>
    </tfoot>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Xác Nhận Mua
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác Nhận Mua</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Tôi đồng ý với các điều khoản Shop đưa ra
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="submit" class="btn btn-primary">Đồng ý</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
function tinhthanhtien() {
    var dsshoe = document.querySelectorAll('table tbody tr');
    var tong = 0;
    for (const shoe of dsshoe) {
        var gia =Number(shoe.querySelector('td:nth-child(3)').innerText.replace('VNĐ',''));
        var tien = gia;
        tong = tong + tien;
    }
    document.querySelector('tfoot th:nth-child(2)').innerText=tong +' VNĐ';
    document.querySelector('#tongtien').value = tong;
}
tinhthanhtien();
</script>