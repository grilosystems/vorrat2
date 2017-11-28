<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Movimientos del Almacén</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h2>Bienvenido <?php echo $this->session->userdata('nombre'); ?></h2>
          <p>Aquí se presentan los movimientos mas recientes del almacén.</p>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->