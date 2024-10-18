<?php
//gui nhan du lieu thong qua model
// hien thi du lieu thong qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            # lay du lieu
            include_once 'model/m_shoe.php';
            $ct_shoe = shoe_getByID($_GET['id']);
            $ds_ngaunhien = shoe_getRanDomByCategory($ct_shoe['maloai']);
            //hien thi du lieu
            $view_name ='shoe_detail';
            break;
         case 'search':
            if(isset($_POST['keyword'])){
                // đổi từ post sang get
                header("Location:".$base_url."shoe/search/".$_POST['keyword']
               );
            }
            //lấy dữ liệu
            include_once 'model/m_shoe.php';
            $page = 1;           
            if (isset($_GET['page'])) {
               $page = $_GET['page'];
            }
            $ketqua=shoe_search($_GET['keyword'],$page);
         $sotrang =ceil(shoe_searchTotal($_GET['keyword'])/8);
            //hiển thị dữ liệu
            $view_name = 'shoe_search';
            break;
            case 'addToCart':
             if (!isset($_SESSION['user'])) {
             $_SESSION['loi'] ='Đăng Nhập mới mua giày được nha Fen';
             header ('Location: '.$base_url.'user/login');
             return;
             }

                $masp = $_GET['id'];
                $matk = $_SESSION['user']['matk'];
                try {
                  //kiểm tra có giỏ hàng ch
                  include_once 'model/m_history.php';
                   $kq = history_hasCart($matk);   
                   if ($kq){
                    //neu dung thi them gio hang
                    history_addToCart($kq['madh'],$masp);
                   } else {
                    history_add($matk);
                    $kq = history_hasCart($matk);
                    history_addToCart($kq['madh'],$masp);        
                   }
                   $_SESSION ['thongbao']='đã thêm sách vào giỏ';
                } catch (\Throwable $th) {
                 $_SESSION['loi']='đã có đôi này trong giỏ hàng';
                }                               
                  header('Location: '.$base_url.'shoe/detail/'.$masp);
                break;
                case 'removeFromCart':
                  include_once 'model/m_history.php';
                 //lấy dữ liệu
                 $matk = $_SESSION['user']['matk'];
                 $masp = $_GET['id'];
                 $giohang = history_hasCart($matk);
                 if ( $giohang ) {
                   history_removeFromCart($giohang['madh'],$masp);
                 }
                 header('Location: '.$base_url.'page/cart');
                  break;
                  case 'removeCart':
                     include_once 'model/m_history.php';
                    //lấy dữ liệu
                    $matk = $_SESSION['user']['matk'];
                    $giohang = history_hasCart($matk);
                    if ( $giohang ) {
                      history_removeCart($giohang['madh']);
                    }
                    header('Location: '.$base_url.'page/cart');
                     break;
                     case 'updateCart':
                        include_once 'model/m_history.php';
                        $matk = $_SESSION['user']['matk'];
                        $giohang = history_hasCart($matk);
                        if ( $giohang ) {                         
                           $tongtien=$_POST['tongtien'];
                           $trangthai='chuan-bi';

                           include_once 'model/m_shoe.php';
                           $ctgiohang = history_getCart($matk);
                           foreach ($ctgiohang as $shoe) {
                              shoe_decreaseAmount($shoe['masp']);
                           }
                           history_updateCart($giohang['madh'],$giohang['ngaymua'],$tongtien,$trangthai);
                           $_SESSION['thongbao']='Đơn hàng của bạn đã được đặt Cảm ơn đã ủng hộ';
                        }
                        header('Location: '.$base_url.'page/cart');

                        break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}
?>