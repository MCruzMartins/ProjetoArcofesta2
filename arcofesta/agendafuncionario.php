<?php
    session_start();
	ob_start();
    require_once 'conexao.php';
    require_once 'head.php';
    $idcolaborador=$_SESSION['idcolaborador'];

    
    ?>


<h1 class="text-center">Relatorio de Contratos </h1>


<?php

    
    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;




    $busca = "SELECT contrato.Numerocontrato,funcionario.nome as func,cliente.nome,contrato.Dataevento,contrato.Tipoevento,contrato.cep,contrato.numero,
    contrato.complemento,contrato.Tempo_evento,contrato.nomerecep,contrato.telrecep
     from contrato,funcionario,cliente,item
     where
     funcionario.idcolaborador = item.idcolaborador and
     contrato.cpf=cliente.cpf 
     and item.idcolaborador = $idcolaborador
     LIMIT $inicio , $limitereg";

    $resultado= $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)) {
?>

            <table class="table">
                    <thead>
                        <tr>

                        <th>Contrato</th>
                        <th>Colaborador</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Evento</th>
                        <th>Cep</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Tempo</th>
                        <th>Quem irá recepciona-lo</th>
                        <th>Telefone de quem irá recepciona-lo</th>

                        
                       
                        </tr>
                    </thead>
            <tbody>

<?php
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
          
            extract($linha);
            ?>
                    
                        <tr>
                            <td><?php echo $Numerocontrato; ?></td>
                            <td><?php echo $func; ?></td>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $Dataevento; ?></td>
                            <td><?php echo $Tipoevento; ?>
                            <td><?php echo $cep; ?>
                            <td><?php echo $numero; ?>
                            <td><?php echo $complemento; ?>
                            <td><?php echo $Tempo_evento; ?>
                            <td><?php echo $nomerecep;?>
                            <td><?php echo $telrecep;?>

                        </td>
                            <td> 
                                <?php echo "<a href='editar.php?contrato=$Numerocontrato'>" ; ?>                    
                                <input type="submit" class="btn btn-primary" name="editar" value="Editar">
                            </td>

                             <td>  
                                <?php echo "<a href='excluir.php?contrato=$Numerocontrato'>" ; ?>               
                                <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
                            </td>
                        </tr>
                        
                   
    <?php
        }
    ?>

        </tbody>
        </table>

<?php

    }


?> 

<?php
    require_once 'footer.php';
  ?>