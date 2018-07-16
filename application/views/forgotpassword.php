<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Recuperar Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>¿Olvido su Password?</h4>
          <p>Introdusca su cuenta de usuario para restableser su password.</p>
        </div>
        <form id="loginRecover" ng-app="login_post" ng-controller="sign_in">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Introdusca su cuenta">
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Restableser Password</a>
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