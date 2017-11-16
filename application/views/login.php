<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Vorrat Teil 2 - Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar Password</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/welcome/login/admin/admin">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Registrar una Cuenta</a>
          <a class="d-block small" href="forgot-password.html">Recuperar Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>guithem/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>guithem/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>guithem/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>