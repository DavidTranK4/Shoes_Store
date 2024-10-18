<?php
include_once 'm_pdo.php';
function user_login($phone,$pass) {
    return pdo_query_one("SELECT * FROM user WHERE sodienthoai=? AND matkhau=? ",$phone,$pass);
}
function user_has($phone) {
    return pdo_query_one("SELECT * FROM user WHERE  sodienthoai=?",$phone);
}
function user_logsign($phone,$pass,$name){
    pdo_execute("INSERT INTO user (`sodienthoai`,`matkhau`,`name`) VALUES (?,?,?)",$phone,$pass,$name);
}
?> 