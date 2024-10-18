<h2>Kết quả tìm kiếm với từ khóa"<?=$_GET['keyword']?>":</h2>
<div class="row">
        <?php foreach ($ketqua as $shoe) : ?>
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
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center my-3">
    <li class="page-item <?=($page<=1)? 'disabled': ''?>">
      <a class="page-link" href="<?=$base_url?>shoe/search/<?=$_GET['keyword']?>/page/<?=$page-1?>">Previous</a>
    </li>
    <?php for ($i=1; $i<=$sotrang;$i++):?>
    <li class="page-item <?=($page==$i)? 'active': ''?>"><a class="page-link" href="<?=$base_url?>shoe/search/<?=$_GET['keyword']?>/page/<?=$i?>"><?=$i?></a></li>
    <?php endfor; ?>
    <li class="page-item <?=($page>=$sotrang)? 'disabled': ''?>">
      <a class="page-link" href="<?=$base_url?>shoe/search/<?=$_GET['keyword']?>/page/<?=$page+1?>">Next</a>
    </li>
  </ul>
</nav>