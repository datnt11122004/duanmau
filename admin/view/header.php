<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Dự án mẫu</title>

</head>
<style>

</style>
<body>


<div class="container text-center">


<!--    start header-->
    <nav class="navbar bg-body-tertiary  col-12">

            <a class="navbar-brand" href="index.php"><img src="img/FPTShop_logo.jpg" alt="" width=100px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dự án mẫu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <?php
                            if(isset($_SESSION['user'])){
                                echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$_SESSION['user'].'</a>';
                                echo '<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=user">Thông tin cá nhân</a></li>
                                      ';
                                echo $_SESSION['user'] == "Admin"?'<li><a class="dropdown-item" href="admin/index.php?act=listsp">Trang quản trị</a></li>':'';
                                echo'</ul>';
                            }else{
                                echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Đăng nhập/Đăng kí</a>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=signup">Đăng kí</a></li>
                                    </ul>';
                            }

                            ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a class="dropdown-item" href="'.$linkdm.'">'.$name.'</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a class="dropdown-item" href="'.$linkdm.'">'.$name.'</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?act=cart">Giỏ hàng</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

    </nav>

<!--    end header-->









