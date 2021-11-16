

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Đăng nhập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/cnttforum/partials/_handleLogin.php" method ="post">
            <div class="modal-body">


                    <div class="form-group">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Chúng tôi cam kết không chia sẻ Email cho bất kỳ ai .</div>
                    </div>
                <br>
                    <div class="form-group">
                        <label for="loginPass" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="loginPass" name ="loginPass">
                    </div>
                <br>
                    <button type="submit" class="btn btn-primary ">Đăng nhập</button>

            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>