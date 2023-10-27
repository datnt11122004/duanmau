<h3>Quên mật khẩu</h3>
            <form action="index.php?act=quenmk" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="email" class="form-control">
                </div>
                <?php if (isset($sendMailMess) && $sendMailMess != '') {
                    echo $sendMailMess;
                } ?>
                <div class="form-group mt-4">
                    <input type="submit" value="Gửi" name="guiemail" class="btn btn-primary">
                    <input type="reset" value="Nhập lại" class="btn btn-secondary">
                </div>
                <br>

            </form>

