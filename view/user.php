<?php
extract($taikhoan);
echo $_SESSION['id_user']
?>

<form action="index.php?act=ud_user" method="post">
    <div class="form-group">
        <label for="user">Tên khách hàng</label>
        <input type="text" class="form-control" name="user"  value="<?=$user?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control"  name="email"  value="<?=$email?>">
    </div>
    <div class="form-group">
        <label for="pass">Pass</label>
        <input type="text" class="form-control" name="pass"  value="<?=$pass?>">
    </div>
    <div class="form-group">
        <label for="tel">Số điện thoại</label>
        <input type="text" class="form-control"  name="tel" value="<?=$tel?>">
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" class="form-control"  name="address" value="<?=$address?>">
    </div>

    <div class="form-group mt-4">
        <input type="submit" value="Lưu" name="save" class="btn btn-primary">
    </div>
</form>
