<?php
    require_once 'head.php';
     require_once 'menu.php';
  ?>

<hr>
  <div class="container-fluid">
    <div class="row carrossel">
    <div class="col-md-2"></div>

      <div class="col-md-8 text-center" style= margin-top: 50px;>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="imagens/ftindex1.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="imagens/ftindex2.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="imagens/ftindex3.jpg" alt="Terceiro Slide">
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
        <div class="col-md-2"></div>
      </div>


    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>Conheça Nossos Serviços</h1>
      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center servicos">
      <div class="col-md-4">
        <img src="imagens/copeira..jpg" class="img-fluid" id="imagemteste">
        <h3>Copeiras</h3>
      </div>

      <div class="col-md-4">
        <img src="imagens/fritadeira.jpg" class="img-fluid">
        <h3>Fritadeiras</h3>
      </div>

      <div class="col-md-4">
        <img src="imagens/garçons.jpg" class="img-fluid">
        <h3>Garçons</h3>
      </div>

    </div>
  </div>


  <?php
    require_once 'footer.php';
  ?>