<?php
    require_once 'head.php';
    require_once 'conexao.php';
?>

<form method="POST" action="salvacontrato.php">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Formulário de Contrato</h3>
                </div>
        </div>
            
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="datadoevento">Data do evento</label>
                    <input type="date" name="datadoevento" class="form-control" >
                    
                </div>
        
            </div>

            <div class="col-md-4">        
                <div class="form-group">            
                    <label for="tipodoevento">Tipo do evento</label>
                    <select name="tipoevento" class="form-control" >
                        <option value="15 anos">15 anos</option>
                        <option value="infantil">Infantil</option>
                        <option value="Casamento/Bodas">Casamento/Bodas</option>
                        <option value="Empresarial">Empresarial</option>
                        <option value="Escolar">Escolar</option>
                        <option value="Outros">Outros</option>
                    </select>
                 
                </div>
            </div>

        

</div>

<div class="row">

        <div class="col-md-2">                  
        </div>
            

            <div class="col-md-4">        
                <div class="form-group">            
                    <label for="Nome">Recepcionista</label>
                    <input type="text" name="nomerecep" class="form-control" placeholder="Nome de quem receberá a equipe">
                </div>
            </div>

            <div class="col-md-3">        
                <div class="form-group">            
                    <label for="cpfcliente">Telefone de Contato</label> 
                    <input type="text" name="telrecep" class="form-control" >
                </div>
            </div>

            <div class="col-md-2">                  
            </div>
            

</div>

<div class="row">

        <div class="col-md-12 text-center"> 
            <hr>
            <h3>Endereço do Evento </h3>               
        </div>
</div>

<div class="row">     
            

<div class="col-md-2">            
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);">                    
                </div>
            </div>

            <div class="col-md-6">            
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero">    
                </div>
            </div> 
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento">
                </div>
            </div>
        </div>

        <div class="row">     

            <div class="col-md-5">
              <div class="form-group">
                 <label for="bairro">Bairro</label><p>
                 <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                 <label for="cidade">Cidade</label><p>
                 <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>

            <div class="col-md-2  ">
              <div class="form-group">
                 <label for="uf">Estado</label><p>
                 <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
        </div>
        

            

</div>
           
           
            
            <div class="col-md-2">        
                <div class="form-group">            
                   
                    
                </div>
            </div>
                   
        <div class="row">   
            <div class="col-md-10 text-right">
                <div class="form-group">
                

                <h4> <input type="submit" class="btn btn-primary" value="Salvar Contrato" name="btncad"></h4> 
                
                </div>  
            </div>
        </div>
    </div>
  
   

</form>

<?php
    require_once 'footer.php';
  ?>