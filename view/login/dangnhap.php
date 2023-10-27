<h2>Đăng nhập</h2>
<form action="index.php?act=dangnhap" method="POST">
    <div class="form-group">
        <label for="username">Tên người dùng:</label>
        <input type="text" class="form-control" id="username" placeholder="Nhập tên người dùng" name="user">
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="pass">
    </div>
    <a href="index.php?act=quenmk">Quên mật khẩu</a>
    <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
</form>
