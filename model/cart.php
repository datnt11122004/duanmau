<?php
function add_to_cart($id_user, $id_pro, $soluong) {
    // Tạo câu lệnh SQL với dấu ? cho các tham số
    $sql = "INSERT INTO cart (id_user, id_pro, soluong) VALUES ($id_user, $id_pro, $soluong)";
    pdo_execute($sql);
}
function cart(){
    $sql = "SELECT *, s.name_status AS trang_thai,
       sp.name AS ten_san_pham, sp.price * c.soluong AS gia_tien_sp, 
       SUM(sp.price * c.soluong) OVER (PARTITION BY c.id_cart) AS tong_gia_tien_don_hang 
        FROM cart c 
            INNER JOIN taikhoan u ON c.id_user = u.id 
            INNER JOIN sanpham sp ON c.id_pro = sp.id 
            INNER JOIN status_cart s ON c.id_tt = s.id_tt 
        WHERE c.id_user = ".$_SESSION['id_user']."";

    return pdo_query($sql);
}
function all_cart(){
    $sql = "SELECT *, s.name_status AS trang_thai,
       sp.name AS ten_san_pham, sp.price * c.soluong AS gia_tien_sp, 
       SUM(sp.price * c.soluong) OVER (PARTITION BY c.id_cart) AS tong_gia_tien_don_hang 
        FROM cart c 
            INNER JOIN taikhoan u ON c.id_user = u.id 
            INNER JOIN sanpham sp ON c.id_pro = sp.id 
            INNER JOIN status_cart s ON c.id_tt = s.id_tt ";

    return pdo_query($sql);
}