<?php

    require_once 'conexao.php';
    require_once 'menu.php';
    require_once 'head.php';

?>
<div class="container-fluid">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>Nossas copeiras</h1>
      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center servicos">
      <div class="col-md-4">
        <img src="imagens/copeiras.jpg" class="img-fluid" id="imagemteste" style=height:400px;width:400px;>
      </div>
      <div class="col-md-4">
        <img src="imagens/copeira6.jpg" class="img-fluid" style=height:400px;width:400px;>
      </div>

      <div class="col-md-4">
        <img src="imagens/copeira...jpg" class="img-fluid" style=height:400px;width:400px;>
      </div>

    </div>
  </div>
  <div class="row servicos">
      <div class="col-md-12 text-center">
         
         <h3 style=padding:20px;> Profissionais qualificados </h3>
      </div>
    </div>
</div>

  <!-- carrossel começa aqui -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/copeiras2.jpg" alt="Primeiro Slide" style=height:500px;>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/copeira4.jpg" alt="Segundo Slide" style=height:500px;>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/copeiras.jpg" alt="Terceiro Slide" style=height:500px;>
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

<!-- carrossel terminou aqui -->

<hr>
<div class="row text-center">
       <div class="col-md-12">
            <a href ="logincliente.php" > <button type="button" class="btn btn-success" style=width:200px;height:50px;> Contratar </button> </a>
        </div>
    </div>

<?php
    require_once 'footeradm.php';
    require_once 'footer.php';
  ?>

























<?php
    require_once 'footer.php';
  ?>