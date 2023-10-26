<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/cart.php";
$listdanhmuc = loadall_danhmuc();
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
include "view/header.php";
include "global.php";

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case "sanpham":
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $kyw = $_POST['keyword'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm= load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if(isset($_POST['guibinhluan'])){
                insert_binhluan($_POST['idpro'], $_POST['noidung']);
            }
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $sanpham = loadone_sanpham($_GET['idsp']);
                $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            }else{
                include "view/home.php";
            }
            break;
        case "signup":
            include "view/login/dangky.php";
            break;
        case "dangky":
            $signup = false;
            if(isset($_POST['dangky']) && $_POST['dangky'] != 0){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['phone'];
                insert_taikhoan( $user, $pass,$email, $address, $tel,2);
                $signup = true;
            }else{
                $signup = false;
            }
            if($signup){
                echo '<script>alert("Đăng ký thành công")
                    window.location.href="index.php?act=login";</script>';
            }else{
                echo '<script>alert("Đăng ký thất bại")
                            window.location.href="index.php?act=signup";</script>';
            }
            break;
        case "login":
            include "view/login/dangnhap.php";
            break;
        case "dangnhap":
            if (isset($_POST['login'])) {
                $loginMess = dangnhap($_POST['user'], $_POST['pass']);
                if(isset($_SESSION['user'])){
                    if($_SESSION['user'] == 'Admin'){
                        echo '<script>window.location.href="admin/index.php?act=listsp";</script>';
                    } else {
                        echo '<script>window.location.href="index.php";</script>';
                    }
                } else {
                    echo '<script>alert("Tên đăng nhập hoặc mật khẩu không tồn tại")
                    window.location.href="index.php?act=login";</script>';
                }
            }
            break;
        case "dangxuat":
            dangxuat();
            echo '<script>window.location.href="index.php";</script>';
            break;
        case "quenmk":
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
        case "addtocart":
            $add = false;
            if(isset($_POST['addtocart']) ) {
                $id_user = $_SESSION['id_user'];
                $id_pro = $_POST['id_pro'];
                $soluong = $_POST['soluong'];
                add_to_cart($id_user, $id_pro, $soluong);
                $add = true;
            }else{
                $add = false;
            }

            if($add){
                echo '<script>alert("Thêm thành công")
                    window.location.href="index.php?act=cart";</script>';
            }
            break;
        case "cart":
            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != 0){
                $cart = cart();
                include "view/cart.php";
            }else{
                echo '<script>alert("Đăng nhập đi")
                    window.location.href="index.php?act=login";</script>';
            }
            break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";
?>