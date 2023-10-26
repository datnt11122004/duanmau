
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã sản phẩm</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Lượt xem</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listsanpham as $sanpham) {
        extract($sanpham);
        $hinhpath = "../upload/" . $img;

        $suasp = "index.php?act=suasp&idsp=" . $id_sp;
        $hard_delete = "index.php?act=hard_delete&idsp=" . $id_sp;
        $soft_delete = "index.php?act=soft_delete&idsp=" . $id_sp;
        if (is_file($hinhpath)) {
            $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
        } else {
            $hinhpath = "No file img!";
        }
        ?>
        <tr>
            <th scope="row"><?=$id_sp?></th>
            <td><?=$name?></td>
            <td><?=$price?></td>
            <td><?=$hinhpath?></td>
            <td><?=$luotxem?></td>
            <td><?=$tendanhmuc?></td>
            <td>
                <a href="<?=$suasp?>" class="btn btn-danger">Sửa</a>
                <a href="<?=$hard_delete?>" class="btn btn-danger">Xóa cứng</a>
                <a href="<?=$soft_delete?>" class="btn btn-danger">Xoá mềm</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="form-group mt-4">
    <a href="index.php?act=listsp" class="btn btn-secondary d-inline ml-3">Danh sách</a>
    <a href="index.php?act=add" class="btn btn-secondary d-inline ml-3">Thêm mới</a>
</div>
