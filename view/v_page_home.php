
<h2>Sản Phẩm Ghim</h2>
<div class="row">
    <?php foreach ($dsGhim as $shoe) : ?>
            <div class="col-sm-3">
              <div class="card mb3">
              <img src="<?=$base_url?>upload/product/<?=$shoe['img']?>" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title"><?=$shoe['name']?></h5>
                  <p class="card-text"><?=$shoe['price']?></p>
                  <a href="<?=$base_url?>shoe/detail/<?=$shoe['masp']?>" class="btn btn-primary">Mua Ngay</a>
                </div>
              </div>
           </div>
           <?php endforeach; ?>
</div>
<h2>Sản Phẩm Mới</h2>
<div class="row">
    <?php foreach ($dsMoi as $shoe) : ?>
            <div class="col-sm-3">
              <div class="card mb3">
              <img src="<?=$base_url?>upload/product/<?=$shoe['img']?>" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title"><?=$shoe['name']?></h5>
                  <p class="card-text"><?=$shoe['price']?></p>
                  <a href="<?=$base_url?>shoe/detail/<?=$shoe['masp']?>" class="btn btn-primary">Mua Ngay</a>
                </div>
              </div>
           </div>
           <?php endforeach; ?>
</div>

 

          