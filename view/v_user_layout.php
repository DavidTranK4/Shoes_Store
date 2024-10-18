<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư Viện</title>
    <link rel="stylesheet" href="<?=$base_url?>template/bootstrap-5.3.2-dist/css/bootstrap.min.css" type="text/css">
    <script src="https://kit.fontawesome.com/1f921e4f86.js" crossorigin="anonymous"></script>

</head>
<body>
    <script src="<?=$base_url?>template/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-primary my-3 " data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?=$base_url?>page/home">SoleHeven</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=$base_url?>page/home">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên Hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bài Viết</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Sản Phẩm
                </a>
                <ul class="dropdown-menu">
                  <?php foreach($dschude as $chude) : ?>
                  <li><a class="dropdown-item" href="<?=$base_url?>category/detail/<?=$chude['maloai']?>"><?=$chude['tenloai']?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav mb-2">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?=$base_url?>page/cart"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                </li>       
                <?php if(!isset($_SESSION['user'])): ?>
                 <li class="nav-item"><a class="nav-link" href="<?=$base_url?>user/login"><i class="fa-solid fa-user fa-xl"></i> Đăng Nhập</a></li> 
                <?php else: ?>   
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user fa-xl"></i> Xin Chào,<?=$_SESSION['user']['name']?>
                  </a>
                  <ul class="dropdown-menu end-0" style="left:auto ;">
                    <li><a class="dropdown-item" href="<?=$base_url?>page/history">Lịch sử Mua</a></li>
                    <li><a class="dropdown-item" href="<?=$base_url?>user/logout">Đăng Xuất</a></li>              
                  </ul>
                </li>
                <?php endif; ?> 
              </ul>
          </div>
        </div>
      </nav>
<div class="container">
  <?php if ($view_name == 'page_home' ) :?>
  <div id="carouselExampleIndicators" class="carousel slide my-3">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?=$base_url?>template/image/s1.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?=$base_url?>template/image/s2.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?=$base_url?>template/image/s3.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <?php  endif; ?>

      <div class="row">
        <div class="col-md-3">
          <form action="<?=$base_url?>shoe/search" method="POST" class ="mb3" >
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-primary" type="submit" id="search">Search</button>
            </div>           
          </form>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              Top giày hot trend 2023
            </a>
            <?php foreach ($dsXem as $shoe): ?>
              <a href="" class="list-group-item list-group-item-action " aria-current="true">
              <?=$shoe ['name'] ?>
            </a>
              <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-9">
          <!-- phần sản phẩm -->
          <?php include_once 'view/v_'.$view_name.'.php'; ?>
        </div>
      </div>
    </div>
</body>
</html>