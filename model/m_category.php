<?php
include_once 'model/m_pdo.php';
function category_getAll(){
    return pdo_query("SELECT * FROM loai");
}
function category_getByID($id){
    return pdo_query_one("SELECT * FROM loai WHERE maloai = $id");
}

?>