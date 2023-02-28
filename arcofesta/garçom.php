<?php

    require_once 'conexao.php';
    require_once 'menu.php';
    require_once 'head.php';

?>
<div class="container-fluid">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>Nossos Garçons</h1>
      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center servicos">

      <div class="col-md-4">
        <img src="imagens/garcomreinaldo1.jpg" class="img-fluid" id="imagemteste">
      </div>

      <div class="col-md-4">
        <img src="imagens/garçomlucas1.jpg" class="img-fluid">
      </div>

      <div class="col-md-4">
        <img src="imagens/garcomerica1" class="img-fluid">
      </div>

    </div>
  </div>

  <div class="row text-center servicos">
      <div class="col-md-12">
    <p> Profissionais qualificados </p>
      </div>
      <div class="container-fluid">
    <div class="row text-center servicos">
      <div class="col-md-4">
        <img src="imagens/garçons.jpg" class="img-fluid" id="imagemteste" style=height:400px;width:400px;>
      </div>
      <div class="col-md-4">
        <img src="imagens/garcomgiovana1.jpg" class="img-fluid" style=height:400px;width:400px;>
      </div>

      <div class="col-md-4">
        <img src="imagens/gabriellegarcom.jpg" class="img-fluid" style=height:400px;width:400px;>
      </div>

    </div>
  </div>
    </div>
  </div>
</div>

<div class="row text-center">
       <div class="col-md-12">
            <a href ="logincliente.php" > <button type="button" class="btn btn-success" style=width:200px;height:50px;> Contratar </button> </a>
        </div>
    </div>
     <hr>


<?php
    require_once 'footeradm.php';
    require_once 'footer.php';
  ?>
