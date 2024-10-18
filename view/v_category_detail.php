<h2><?=$ct_ChuDe['tenloai']?></h2>
<div class="row">
        <?php foreach ($ds_shoe as $shoe) : ?>
          <div class="col-md-3 col-sm-6">
          <div class="card mb3">
            <img src="<?=$base_url?>upload/product/<?=$shoe['img']?>" class="card-img-top" alt="..." style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title"><?=$shoe['name']?></h5>
              <p class="card-text"><?=$shoe['price']?></p>
              <a href="<?=$base_url?>shoe/detail/<?=$shoe['masp']?>" class="btn btn-primary">Mua Ngay</a>
            </div>
            </div>
        </div>
          <?php endforeach ;?>
      
        </div>