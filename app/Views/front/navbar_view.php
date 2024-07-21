<!-- Navbar -->
<?php
  $session = session();
  $nombre = $session->{'nombre'};
  $perfil = $session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="panel">ADMIN: <?php echo session('nombre'); ?></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="principal">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes-somos_view">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
        <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
    </div>
  <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
      <a href="panel">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
      <a class="navbar-brand" href="principal"><img src="assets/img/logo2.png"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="principal">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_view">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
       <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </ul>
      </div>
    <?php else:?>
      <a class="navbar-brand" href="principal"><img src="assets/img/logo2.png"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="principal">Inicio</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="quienes-somos_view">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_view">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
    <?php endif;?>
    </div>
  </div>
</nav>
<!-- End of Navbar -->
</header>

        

