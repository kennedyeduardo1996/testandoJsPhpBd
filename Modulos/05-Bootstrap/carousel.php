<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>

<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/images/pintura.jpg" alt="Primeiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Titulo</h5>
          <p>testo que deveria ter o secundario</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/pintura.jpg" alt="Segundo Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Titulo</h5>
          <p>testo que deveria ter o secundario</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/pintura.jpg" alt="Terceiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Titulo</h5>
          <p>testo que deveria ter o secundario</p>
        </div>
      </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

</div>











<?php
include_once './assets/footer.php';
?>
