<?php
extract($cart);
?>
<form action="index.php?act=udcart" method="post">
    <div class="form-group">
        <label for="madonhang">Mã đơn hàng:</label>
        <input type="text" class="form-control" id="madonhang" name="madonhang" readonly value="<?=$id_cart?>">
    </div>
    <div class="form-group">
        <label for="tenkhachhang">Tên khách hàng:</label>
        <input type="text" class="form-control" id="tenkhachhang" name="tenkhachhang" readonly value="<?=$user?>">
    </div>
    <div class="form-group">
        <label for="sanpham">Sản phẩm:</label>
        <input type="text" class="form-control" id="sanpham" name="sanpham" readonly value="<?=$name?>">
    </div>
    <div class="form-group">
        <label for="soluong">Số lượng:</label>
        <input type="text" class="form-control" id="soluong" name="soluong" readonly value="<?=$soluong?>">
    </div>
    <div class="form-group">
        <label for="thanhtien">Thành tiền:</label>
        <input type="text" class="form-control" id="thanh-tien" name="thanhtien" readonly value="<?=$gia_tien_sp?>">
    </div>
    <div class="form-group">
        <label for="status">Trạng thái đơn hàng:</label>
        <select class="form-select form-select-sm" aria-label="Small select example" name="status">
            <?php foreach ($listst as $trangthai) { ?>
                <option value="<?=$trangthai['id_tt']?>" <?=$id_tt == $trangthai['id_tt'] ? 'selected' : ''?>><?=$trangthai['name_status']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group mt-4">
        <input type="submit" value="Lưu" name="save" class="btn btn-primary">
        <a href="index.php?act=cart" class="btn btn-info">Danh sách đơn hàng</a>
    </div>
</form>