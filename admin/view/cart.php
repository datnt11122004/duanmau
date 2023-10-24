
    <h2>Giỏ hàng</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
            <th>Tổng tiền sản phẩm</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $tong_tien_don_hang = 0;
        foreach ($cart as $sanpham) {
            $hinh = $img_path.$sanpham['img'];
            $tong_tien_don_hang += (float)$sanpham['gia_tien_sp']   ;
            ?>
            <tr>
                <td><?php echo $sanpham['name']; ?></td>
                <td><img src="<?php echo $hinh; ?>" alt="<?php echo $sanpham['name']; ?>" width="50"></td>
                <td><?php echo $sanpham['soluong']; ?></td>
                <td>$<?php echo $sanpham['price']; ?></td>
                <td>$<?php echo $sanpham['gia_tien_sp']; ?></td>
                <td><?php echo $sanpham['trangthai']; ?></td>
                <td>
                    <!-- Thêm các nút thao tác tại đây (ví dụ: Xóa, Sửa, ...) -->
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4"><strong>Tổng tiền đơn hàng:</strong></td>
            <td><strong>$<?php echo $tong_tien_don_hang; ?></strong></td>
        </tr>
        </tfoot>
    </table>
