

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Đăng ký</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/cnttforum/partials/_handleSignup.php" method ="post">
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="signupEmail" name ="signupEmail" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Chúng tôi cam kết bảo mật địa chỉ Email của bạn.</div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
                        </div>

                        <button type="submit" class="btn btn-primary">Đăng ký</button>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>