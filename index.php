<?php
include_once 'config.php';
include_once 'model/m_shoe.php';
include_once 'model/m_category.php';
$dschude = category_getAll();
$dsXem = shoe_getView(10);
// chuyển đến các controller
if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            $ctrl_name ='page';
            break;
            case 'user':
                $ctrl_name='user';
                break;
            case 'shoe':
                $ctrl_name='shoe';
                break;
            case 'category':
                $ctrl_name='category';
                break;
            case 'admin':
                $ctrl_name='admin';
                break;
        default:
            # code...
            break;
    } 
    include_once 'controller/c_'.$ctrl_name.'.php'; 

} else {
    header ('Location: page/home');
}
?>