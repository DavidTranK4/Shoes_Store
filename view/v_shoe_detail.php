<div class="row my-3">
            <div class="col-md-6">
              <img src="<?=$base_url?>upload/product/<?=$ct_shoe['img']?>" class="card-img-top" alt="..." style="height: 600px;">
            </div>
            <div class="col-md-6">
              <h2><?=$ct_shoe['name']?></h2>
              <div class="row my-3">
                <div class="col-md-6">Hãng : <strong> <?=$ct_shoe['tenloai']?></strong></div>
                <div class="col-md-6">size : <strong><?=$ct_shoe['size']?></strong></div>
              </div>
              <div class="text-danger fs-1"><?=$ct_shoe['price']?> VNĐ</div>
              <small> hiện shop còn <Strong class="text-danger"><?=$ct_shoe['soluong']?></Strong> Đôi </small>
              <br>
              <a class="btn btn-outline-success btn-lg my-3" href="<?=$base_url?>shoe/addToCart/<?=$ct_shoe['masp']?>">Mua Ngay</a>
              <?php if(isset($_SESSION['thongbao'])):?>
    <div class="alert alert-success" role="alert">
  <?= $_SESSION['thongbao'] ?>
</div>
 <?php endif; unset($_SESSION['thongbao']); ?>

 <?php if (isset($_SESSION['loi'])):?>
    <div class="alert alert-danger" role="alert">
  <?= $_SESSION['loi'] ?>
</div>
 <?php endif; unset($_SESSION['loi']); ?>
              <hr>
              <p class="my-3"><?=$ct_shoe['mota']?></p>
              </div>
            </div>
          </div>
          <h2 style="text-align:center ;">có thể bạn thích</h2>
      <div class="row">
        <?php foreach ($ds_ngaunhien as $shoe) : ?>
          <div class="col-md-3 col-sm-6">
          <div class="card mb3">
            <img src="<?=$base_url?>upload/product/<?=$shoe['img']?>" class="card-img-top" alt="..."style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title"><?=$shoe['name']?></h5>
              <p class="card-text"><?=$shoe['price']?> VNĐ</p>
              <a href="<?=$base_url?>shoe/detail/<?=$shoe['masp']?>" class="btn btn-primary">Mua Ngay</a>
            </div>
            </div>
        </div>
          <?php endforeach ;?>
      
        </div>