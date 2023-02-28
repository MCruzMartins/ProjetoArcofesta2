<?php
    require_once 'head.php';
     require_once 'menu.php';
  ?>

<form>

<div class="container bg-white">
    <div class="row">
        <div class="col-md-12 text-center">     
             <h3>Deixa aqui sua duvida</h3>
          
        </div>
    </div>

    <div class="row">
      <div class="col-md-12 text">     
          <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome">
          </div>
      </div>
    </div>
     
      <div class="row">
      <div class="col-md-12 text">  
           <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name="telefone">
          </div>
      </div>
      </div>

      <div class="row">
      <div class="col-md-12 text"> 
          <div class="form-group">
            <label for="telefone">Dúvida</label>

            <div class="row">
            <div class="col-md-12 text"> 
           <textarea>Deixe aqui sua dúvida</textarea>  
          </div>
          </div>
      </div>
      </div>
</div>

        
      <div class="col-md-4 text-center"> 
          <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <a href="https://wa.me/arcofesta">
            <img src="imagens/zap.png" style=width:5rem;height:5rem; alt="imagem icone para contratar serviços"> </a>
          </div>
      </div>

      
      <input type="submit" class="btn btn-primary" value="Enviar" name="btncad">

</div>
</div>
        </form>
      
        <?php
    require_once 'footer.php';
    ?>