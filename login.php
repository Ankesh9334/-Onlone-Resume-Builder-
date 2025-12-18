<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content shadow-lg rounded-4">

      <div class="modal-header border-0 justify-content-center">
        <div class="text-center">
          <img src="images/ass-logo.png" height="60" class="mb-2">
          <h5 class="fw-bold">Login</h5>
        </div>
        <button type="button" class="btn-close position-absolute end-0 me-3"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body px-4 pb-4">
        <form action="login_process.php" method="POST">

          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <label><i class="bi bi-envelope"></i> Email</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label><i class="bi bi-key"></i> Password</label>
          </div>

          <button class="btn btn-primary w-100 py-2">Login</button>

          <div class="text-center mt-3">
            <a href="#" data-bs-dismiss="modal"
               data-bs-toggle="modal" data-bs-target="#registerModal">
              Don’t have an account? Register
            </a>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
