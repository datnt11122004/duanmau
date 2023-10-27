<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/thongke.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/statuscart.php";
$listdanhmuc = loadall_danhmuc();
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();

include "view/header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case "listsp":
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $keyw = $_POST['keyword'];
            }else{
                $keyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }

            $listdanhmuc= loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyw,$iddm);
            include "sanpham/list.php";
            break;
        case "bieudosp":
            $listsanpham = loadall_comment_sanpham();
            include "sanpham/bieudo.php";
            break;
        case "add":
            include "sanpham/add.php";
            break;
        case "addsp":
            if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
//                    echo $hinh;
                $target_dir = "../upload/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
//                    echo $target_file;
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
//                        echo "Bạn đã upload ảnh thành công";
                }else{
//                        echo "Upload ảnh không thành công";
                }
//                    echo $iddm;
                insert_sanpham($tensp, $giasp, $hinh,$mota, $iddm);
                $thanhcong = "Thêm thành công";
            }
            if(isset($thanhcong)){
                echo "<script> 
                        alert('$thanhcong')
                        window.location.href ='index.php?act=add';
                        </script>";
            }
            $listdanhmuc= loadall_danhmuc();

            break;
        case "suasp":
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $sanpham=loadone_sanpham($_GET['idsp']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $iddm=$_POST['iddm'];
                $id=$_POST['id'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
//                    echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
//                    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao="cập nhật thành công!";
            }

            $listdanhmuc= loadall_danhmuc();
            $listsanpham=loadall_sanpham("",0);
            $listdanhmuc=loadall_danhmuc();
            if(isset($thongbao)){
                echo "<script> 
                        alert('$thongbao')
                        window.location.href ='index.php?act=listsp';
                        </script>";
            }
            break;
        case "bieudo":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/bieudo.php";
            break;
        case"hard_delete":
            if(isset($_GET['idsp'])){
                hard_delete($_GET['idsp']);
            }
            $listsanpham=loadall_sanpham("",0);
            include"sanpham/list.php";
            break;

        case "soft_delete":
            if(isset($_GET['idsp'])){
                soft_delete($_GET['idsp']);
            }
            $listsanpham=loadall_sanpham("",0);
            $listdanhmuc=loadall_danhmuc();
            echo "<script>window.location.href ='index.php?act=listsp';</script>";
            break;

        case "thongke":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/list.php";
            break;
        case "cart":
            $listcart = all_cart();
            $listst = load_all_status();
            include 'cart/list.php';
            break;
        case"cartud":

            if(isset($_GET['idcart'])){
                $id = $_GET['idcart'];
                $cart = query_ud_cart_admin($id);
                $listst = load_all_status();
                include "cart/udcart.php";
            }
            break;
        case "udcart":
            if(isset($_POST['save'])){
                $id_cart = $_POST['madonhang'];
                $status = $_POST ['status'] ;
                ud_st_cart($status,$id_cart);
                echo '<script>
                            alert("Cập nhật tình trạng đơn hàng thành công");
                            window.location.href = "index.php?act=cart"
                            </script>
                    ';
            }

            break;
        case "user":
            $listuser = list_user();
            include "user/list.php";
            break;



    }
}
include "view/footer.php";
?>
