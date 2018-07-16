<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Vorrat Teile 2</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <?php if($this->session->userdata('tipoUsuario')=='1'): ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Agregar</a>
            </li>
            <li>
              <a href="cards.html">Consultar</a>
            </li>
            <li>
              <a href="cards.html">Eliminar</a>
            </li>
            <li>
              <a href="cards.html">Reportes</a>
            </li>
          </ul>
        </li>
      <?php endif; ?>
      <?php if($this->session->userdata('tipoUsuario')=='2' || $this->session->userdata('tipoUsuario')=='1'): ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Almacenes">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlmacenes" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-industry"></i>
            <span class="nav-link-text">Almacenes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAlmacenes">
            <li>
              <a href="navbar.html">Agregar</a>
            </li>
            <li>
              <a href="cards.html">Consultar</a>
            </li>
            <li>
              <a href="cards.html">Eliminar</a>
            </li>
            <li>
              <a href="cards.html">Reportes</a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if($this->session->userdata('tipoUsuario')=='3' || $this->session->userdata('tipoUsuario')=='1'): ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Objetos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseObjetos" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Objetos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseObjetos">
            <li>
              <a href="navbar.html">Agregar</a>
            </li>
            <li>
              <a href="cards.html">Consultar</a>
            </li>
            <li>
              <a href="cards.html">Eliminar</a>
            </li>
            <li>
              <a href="cards.html">Reportes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Embarque">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEmbarque" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-ship"></i>
            <span class="nav-link-text">Embarque</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseEmbarque">
            <li>
              <a href="navbar.html">Crear</a>
            </li>
            <li>
              <a href="cards.html">Consultar</a>
            </li>
            <li>
              <a href="cards.html">Archivar</a>
            </li>
            <li>
              <a href="cards.html">Reportes</a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Correos
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Nuevos Correos:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Proveedor Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Revisar embarque de equipo de computo</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todos los mensajes</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Buscar en Vorrat...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>