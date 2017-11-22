<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" id="message">Vorrat Teil 2 - Login</div>
      <div class="card-body">
        <form id="login" ng-app="login_post" ng-controller="sign_in">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="user" type="email" aria-describedby="emailHelp" placeholder="Enter email" ng-model="user">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password" ng-model="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar Password</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="" ng-click="check_credentials();">Login</a>
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
  <!-- Angular JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="<?= base_url(); ?>guithem/jsapps/appLogin.js"></script>
</body>
</html>