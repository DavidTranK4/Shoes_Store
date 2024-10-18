<?php
//thao tác dữ liệu trong CSDL
include_once 'm_pdo.php';

function shoe_getNew($limit) {
    return pdo_query("SELECT * FROM product ORDER BY masp DESC LIMIT $limit");
}
function shoe_getPin($limit) {
    return pdo_query("SELECT * FROM product WHERE ghimtrangchu =1  LIMIT $limit");
}
function shoe_getView($limit) {
    return pdo_query("SELECT * FROM product ORDER BY luotxem DESC  LIMIT $limit");
}
function shoe_getByID($id){
    return pdo_query_one("SELECT * FROM product g INNER JOIN loai l ON g.maloai = l.maloai WHERE g.masp = ?", $id);
}
function shoe_getRanDomByCategory($id){
    return pdo_query("SELECT *FROM product WHERE maloai = $id ORDER BY rand() LIMIT 4");
}
function shoe_search($keyword,$page=1) {
    $batdau = ($page-1) * 8;
    // trang 1 bắt đầu từ 0
    //trang 2 bắt đầu từ 8
    //trang 3 bắt đầu từ 16
    // trang n bắt đầu từ (n-1)*8
    return pdo_query("SELECT * FROM product WHERE name LIKE'%$keyword%' LIMIT $batdau,8");
}
function shoe_getByCategory($id){
    return pdo_query("SELECT * FROM product WHERE maloai =?",$id);
}
function shoe_searchTotal($keyword) {
    return pdo_query_value("SELECT COUNT(*) FROM product WHERE name LIKE'%$keyword%'");
}
function shoe_decreaseAmount($masp){
    pdo_execute("UPDATE product SET soluong = soluong - 1 WHERE masp=?", $masp);
}
?>