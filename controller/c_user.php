<?php
//gui nhan du lieu thong qua model
// hien thi du lieu thong qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
           //lấy dữ liệu
           include 'model/m_user.php';
           if (isset($_POST['SoDienThoai']) && isset($_POST['MatKhau'])){
            $kq=user_login($_POST['SoDienThoai'],$_POST['MatKhau']); 
            if ($kq) {
                //nếu đúng -> đăng nhập thành công
                $_SESSION['user'] = $kq;
                //khi đối tượng đăng nhập thì thông tin sẽ được lưu vào sesson[user]
                header ('Location: '.$base_url.'page/home');
            } else {
                $_SESSION['loi']='Số Điện Thoại Hoặc Mật Khẩu Không Đúng Vui Lòng Thử Lại !';
            }
           }
           //hiển thị dữ liệu
           $view_name = 'user_login';
            break;
            case 'logout':
                unset($_SESSION['user']);
                header ('Location: '.$base_url.'page/home');
                break;
                case 'logsign':
                    include_once 'model/m_user.php';                              
                    if (isset($_POST['SoDienThoai']) && isset($_POST['MatKhau']) && isset ($_POST['HoVaTen'])) {
                        user_logsign($_POST['SoDienThoai'],$_POST['MatKhau'],$_POST['HoVaTen']);
                        header ('Location: '.$base_url.'user/login');               
                    }
                    //hiển thị dữ liệu
                    $view_name = 'user_logsign';
                    break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}
?>