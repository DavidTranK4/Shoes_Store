<?php
include_once 'model/m_pdo.php';
function history_hasCart($matk) {
    return pdo_query_one("SELECT * FROM donhang WHERE matk=? AND trangthai=?", $matk, 'gio-hang');
}
function history_add($matk){
 pdo_execute("INSERT INTO donhang(`matk`,`ngaymua`,`trangthai`)VALUES (?,?,?)", $matk , date('Y-m-d H:i:s'), 'gio-hang');
}
function history_addToCart($madh,$masp) {
    pdo_execute("INSERT INTO chitietdonhang(`madh`,`masp`)VALUES (?,?)",$madh,$masp);
}
function history_getCart($matk) {
    return pdo_query("SELECT * FROM donhang dh INNER JOIN chitietdonhang ctdh ON dh.madh=ctdh.madh INNER JOIN product p ON ctdh.masp = p.masp WHERE dh.matk=? AND dh.trangthai=?",$matk, 'gio-hang');
}
function history_removeFromCart($madh,$masp){
    pdo_execute("DELETE FROM chitietdonhang WHERE madh=? AND masp=?", $madh, $masp);
}
function history_removeCart($madh){
    pdo_execute("DELETE FROM chitietdonhang WHERE madh=?", $madh);
}
function history_updateCart($madh,$ngaymua,$tongtien,$trangthai){
    pdo_execute("UPDATE donhang SET ngaymua=?, tongtien=?, trangthai=? WHERE madh=?",$ngaymua,$tongtien,$trangthai,$madh);
}
function history_getAllByAccount($matk){
    return pdo_query("SELECT * FROM donhang WHERE matk=?",$matk);
}
?>