

<h2>Thêm Sản Phẩm</h2>
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="tensp">Tên Sản Phẩm</label>
        <input type="text" class="form-control" id="" name="tensp" placeholder="Nhập tên sản phẩm" required>
    </div>
    <div class="form-group">
        <label for="iddm">Danh Mục Sản Phẩm</label>
        <select class="form-control" id="category" name="iddm" required>
            <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="giasp">Giá Sản Phẩm</label>
        <input type="text" class="form-control" id="" name="giasp" placeholder="Nhập giá sản phẩm" required>
    </div>
    <div class="form-group">
        <label for="hinh">Hình Ảnh</label>
        <input type="file" class="form-control" id="" name="hinh" accept="image/*" required>
    </div>
    <div class="form-group">
        <label for="mota">Mô Tả</label>
        <textarea class="form-control" id="mota" name="mota" rows="4" placeholder="Nhập mô tả sản phẩm" required></textarea>
    </div>
    <div class="form-group mt-4">
        <input type="submit" name="themmoi" class="btn btn-primary d-inline" value="Thêm sản phẩm">
        <input type="reset" value="Nhập lại" class="btn btn-secondary d-inline ml-2">
        <a href="index.php?act=listsp" class="btn btn-secondary d-inline ml-3">Danh sách</a>
    </div>

</form>
</div>
