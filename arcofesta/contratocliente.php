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
            
</div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="datadoevento">Data do evento</label>
                    <input type="text" name="datadoevento" class="form-control" >
                    
                </div>
        
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="tipodoevento">Tipo do evento</label>
                    <select name="Evento">
                    <option value="15 anos">15 anos</option>
                    <option value="infantil">Infantil</option>
                    <option value="Casamento/Bodas">Casamento/Bodas</option>
                    <option value="Empresarial">Empresarial</option>
                    <option value="Escolar">Escolar</option>
                    <option value="Outros">Outros</option>
                </select>
                 
                </div>
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);">
                </div>
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="numero">Número</label>
                    <input type="text" name="numero" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="Nome">Quem irá recepcionar a equipe?</label>
                    <input type="text" name="Nome" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="cpfcliente">Telefone de quem irá recepcionar</label>
                    <input type="text" name="cpfcliente" class="form-control">
                </div>
            </div>
            
            <div class="col-md-2">        
                <div class="form-group">            
                   
                    
                </div>
            </div>
                   
        <div class="row">   
            <div class="col-md-10 text-right">
                <div class="form-group">
                
                <h4> <a href="salvacontrato.php"><button type="button" class="btn btn-primary">Salvar Contrato</button></a></h4> 
                
                </div>  
            </div>
        </div>
    </div>
  
   

</form>