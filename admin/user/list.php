<?php
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã user</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Pass</th>
        <th scope="col">Tel</th>
        <th scope="col">Role</th>
        <th scope="col">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listuser as $value){
        extract($value)?>
    <tr>
        <th><?=$id?></th>
        <td><?=$user?></td>
        <td><?=$email?></td>
        <td><?=$address?></td>
        <td><?=$pass?></td>
        <th><?=$tel?></th>
        <td><?=$role?></td>
        <td>
            <a href="#">Sửa</a>
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>
<a href="index.php?act=cart" class="btn btn-info">Danh sách đơn hàng</a>
<a href="index.php?act=listsp" class="btn btn-info">Danh sách sản phẩm</a>
