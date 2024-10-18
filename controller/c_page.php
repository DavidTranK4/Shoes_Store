<?php
//gui nhan du lieu thong qua model
// hien thi du lieu thong qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            # lay du lieu
            include_once 'model/m_shoe.php';
            $dsMoi = shoe_getNew(4);
            $dsGhim = shoe_getPin(4);
            //hien thi du lieu
            $view_name ='page_home';
        break;
        case 'cart':
            //lấy dữ liệu.
            if (!isset($_SESSION['user'])) {
                $_SESSION['loi'] ='Đăng Nhập mới xem giỏ hàng được nha Fen';
                header ('Location: '.$base_url.'user/login');
                return;
                }
            include_once 'model/m_history.php';
            $matk = $_SESSION['user']['matk'];
            $giohang = history_hasCart($matk);
            if ( $giohang ) {
               $ctgiohang=history_getCart($matk);
            } else {
                $ctgiohang=[];
            }
            //hiển thị dữ liệu
            $view_name ='page_cart';
            break;
            case 'history':
                include_once 'model/m_history.php';
               //lấy dữ liệu
               $matk = $_SESSION['user']['matk'];
             $lichsu = history_getAllByAccount($matk);
                // hiển thị dữ liệu
                $view_name ='page_history';
                break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}
?>