
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Tên người đặt</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Thành tiền </th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($listcart as $cart) {
        $suacart = "index.php?act=cartud&idcart=".$cart["id_cart"];
        ?>

        <tr>
            <th scope="row"><?=$cart['id_cart']?></th>
            <td><?=$cart['name']?></td>
            <td><?=$cart['user']?></td>
            <td><?=$cart['soluong']?></td>
            <td><?=$cart['gia_tien_sp']?></td>
            <td><?=$cart['name_status']?><td>
                <a href="<?=$suacart?>" class="btn btn-danger">Sửa</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="form-group mt-4">
    <a href="index.php?act=cart" class="btn btn-info d-inline ml-3">Danh sách đơn hàng</a>
    <a href="index.php?act=listsp" class="btn btn-secondary d-inline ml-3">Danh sách sản phẩm</a>
</div>

