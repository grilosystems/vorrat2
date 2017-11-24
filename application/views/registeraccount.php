<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar Nueva Cuenta</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputName">Nombre</label>
                <input class="form-control" id="InputName" type="text" aria-describedby="nameHelp" placeholder="Nombre">
              </div>
              <div class="col-md-6">
                <label for="InputLastName">Apellidos</label>
                <input class="form-control" id="InputLastName" type="text" aria-describedby="nameHelp" placeholder="Apellidos">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="InputEmail">E-Mail</label>
            <input class="form-control" id="InputEmail" type="email" aria-describedby="emailHelp" placeholder="E-Mail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputPassword1">Password</label>
                <input class="form-control" id="InputPassword" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="ConfirmPassword">Confirme password</label>
                <input class="form-control" id="ConfirmPassword" type="password" placeholder="Confirme password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Registrar</a>
          <div class="text-center">
            <a class="d-block small mt-3" href="javascript: window.history.back();">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>guithem/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>guithem/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>guithem/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Angular JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="<?= base_url(); ?>guithem/jsapps/appLogin.js"></script>
</body>

</html>