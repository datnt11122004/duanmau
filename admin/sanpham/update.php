<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
    $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
}else{
    $hinhpath="No file img!";
}
?>

<h2>Thêm Sản Phẩm</h2>
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="tensp">Tên Sản Phẩm</label>
        <input type="text" class="form-control" id="" name="tensp" placeholder="Nhập tên sản phẩm" value="<?=$name?>" required>
    </div>
    <div class="form-group">
        <label for="iddm">Danh Mục Sản Phẩm</label>
        <select class="form-control" id="category" name="iddm" required>
            <?php
                    foreach($listdanhmuc as $key=>$value){
                        if($iddm==$value['id']){
                            echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;
                        }else{
                            echo '<option value="'.$value['idp'].'">'.$value['name'].'</option>' ;
                        }
                    }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="giasp">Giá Sản Phẩm</label>
        <input type="text" class="form-control" id="" name="giasp" placeholder="Nhập giá sản phẩm" value="<?=$price?>" required>
    </div>
    <div class="form-group">
        <label for="hinh">Hình Ảnh</label>
        <input type="file" class="form-control" id="" name="hinh" accept="image/*"  value="<?=$hinhpath?>">
        <?php echo $hinhpath ?>
    </div>
    <div class="form-group">
        <label for="mota">Mô Tả</label>
        <textarea class="form-control" id="mota" name="mota" rows="4" placeholder="Nhập mô tả sản phẩm" value="<?=$mota?>" required><?=$mota?></textarea>
    </div>
    <div class="form-group mt-4">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" class="btn btn-primary d-inline" value="Cập nhật">
        <input type="reset" value="Nhập lại" class="btn btn-secondary d-inline ml-2">
        <a href="index.php?act=listsp" class="btn btn-secondary d-inline ml-3">Danh sách</a>
    </div>

</form>
</div>
