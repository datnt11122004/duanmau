<?php
    extract($sanpham);
    $img = $img_path . $img;
?>
    <!-- Tiêu đề sản phẩm -->
    <div class="row mt-4">
        <div class="col-12" style="border: lightgray 1px solid; border-radius: 10px">
            <h3 class="lead"><?=$name?></h3>
        </div>
    </div>

    <!-- Hình ảnh sản phẩm và thông tin chi tiết -->
    <div class="row mt-4" style="border: lightgray 1px solid; border-radius: 10px">
        <!-- Hình ảnh sản phẩm (col-6) -->
        <div class="col-6" >
            <img src="<?=$img?>" alt="Hình ảnh sản phẩm" class="img-fluid" >
        </div>
        <!-- Thông tin chi tiết sản phẩm (col-6) -->
        <div class="col-6">
            <p>
                <?=$id?>
            </p>
            <h3><?=$name?></h3>
            <p>
                <?=$mota?>
            </p>
            <h3>Giá sản phẩm</h3>
            <p>$<?=$price?></p>

            <!-- Số lượng đặt hàng và thêm vào giỏ hàng -->
            <form action="index.php?act=addtocart" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_pro" value="<?=$id?>" >
                    <label for="soluong">Số lượng:</label>
                    <input type="number" class="form-control" name="soluong" value="1">
                    <input type="submit" class="btn btn-primary mt-4" name="addtocart" value="Thêm vào giỏ hàng">
                </div>
            </form>

        </div>
    </div>

<!-- comment product-->

<div class="col-12 mt-4">
    <h3>Bình Luận Sản Phẩm</h3>
    <table class="table table-striped">
        <?php foreach($binhluan as $value): ?>
            <tr>
                <td><?php echo $value['user']?></td>
                <td><?php echo $value['noidung']?></td>
                <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    if (isset($_SESSION['user']) && $_SESSION['user'] != 0 ){
        echo '<form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>';
    }else{
        echo '<a href="index.php?act=login">Đăng nhập để bình luận đi nào</a>';
    }
    ?>

</div>
<!--end comment product-->

<div class="row mt-4">
    <h3>Sản Phẩm Cùng Loại</h3>
    <?php foreach($sanphamcl as $value): extract($value); $img = $img_path . $img;?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $img; ?>" alt="" width="200px" height="200px">
                <div class="card-body">
                    <a href="index.php?act=sanphamct&idsp=<?=$id?>" class="card-title"><?php echo $name; ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>






