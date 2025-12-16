<!-- ✅ LOGIN POPUP MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header border-0 ">
                <img class="mb-4 my-2" src="images/ass-logo.png" alt="" height="70">
                <h5 class="modal-title mb-3">Login</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form class="p-3" action="login_process.php" method="POST">

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" required>
                        <label><i class="bi bi-envelope"></i> Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" required>
                        <label><i class="bi bi-key"></i> Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2">Login</button>

                    <div class="text-center mt-3">
                        <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Don’t have an account? Register
                        </a>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

