<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>

<div class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Desativado</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip na parte superior">
    Tooltip na parte superior
  </button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip na direita">
    Tooltip na direita
  </button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip na parte inferior">
    Tooltip na parte inferior
  </button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip na esquerda">
    Tooltip na esquerda
  </button>




</div>



<?php
include_once './assets/footer.php';
?>
