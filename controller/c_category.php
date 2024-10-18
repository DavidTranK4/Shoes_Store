<?php
//gui nhan du lieu thong qua model
// hien thi du lieu thong qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            # lay du lieu
            include_once 'model/m_category.php';
            $ct_ChuDe =category_getByID($_GET['id']);
            include_once 'model/m_shoe.php';
            $ds_shoe = shoe_getByCategory($_GET['id']);
            //hien thi du lieu
            $view_name = 'category_detail';
            break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}
?>