<?php

    require_once 'conexao.php';
    require_once 'head.php';


    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;




    $busca = "SELECT idcolaborador,nome,telefone,cpf,email,foto,função,pix from
    funcionario LIMIT $inicio , $limitereg";

    $resultado= $conn->prepare($busca);
    $resultado->execute();
    ?>    

    <div class="container-fluid">
    <div class="row">
   
    
  


        <div class="col-md-3 text-center">
                
            <form action="carrinhocliente.php" method="post">
                <div class="row">                     
                    <div class="col-md-12 text-center">        
                         <div class="form-group">            
                            <label for="tempoevento">Tempo do Evento</label>
                            <select name="tempodeevento">
                                <option value="5">5horas</option>
                                <option value="6">6horas</option>
                                <option value="7">7horas</option>
                                <option value="8">8horas</option>
                                <option value="9">9horas</option>
                                <option value="10">10horas</option>
                            </select>
                        </div>
                    </div>
                </div>
                            

                    <?php       
                         while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {           
                          extract($linha);                          
    
                     ?>     
            
            <div class="row">
                <div class="col-md-3">        
                        
                                <img src="<?php echo $foto; ?>" style=width:18rem;height:18rem;>                    
                                <p><?php echo $nome; ?></p>
                                <h5>Função: <?php echo $função; ?></h5>  
                                <input type="hidden" name="idcolaborador" value="<?php echo $idcolaborador; ?>">
                    <input type="submit" class="btn btn-primary" value="Selecionar">
                 </div> 
            </div>  
            
            <?php      
    
                }     


    
                 ?>

        
                   </form>

                   <a href="finalizar.php"><button type="button" class="btn btn-primary">Finalizar Contrato</button></a>

        </div>
                     

      

    </div>
  </div>
























   