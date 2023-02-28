<?php
     session_start();
     ob_start();
 
     require_once 'head.php';
     require_once 'conexao.php';
 
     $preco = 0;
 
 
     $busca = "SELECT * from carrinho";       
 
     $resultado= $conn->prepare($busca);
     $resultado->execute();
 
     if (($resultado) AND ($resultado->rowCount() != 0)) {
 ?>
 
<h1 class="text-center">Produtos no Carrinho</h1>

<form method="post" action="contratocliente.php">
        <table class="table">
                <thead>
                    <tr>
                    <th>Imagem</th>                        
                    <th>Nome</th>
                    <th>Preço</th>
                    <th> Horas</th>     
                    <th> Preço total</th>              
                   
                    </tr>
                </thead>
        <tbody>

<?php
    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
       // var_dump($linha);
        extract($linha);
        ?>
                
                    <tr>
                        <td><img src="<?php echo $foto; ?>" style=width:150px;height:150px;></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $precohora; ?></td>
                        <td><?php echo $tempoevento; ?></td>                            
                        <td><?php echo $total = $tempoevento * $precohora ; 
                        $preco += $total;
                        ?></td>
                        <td>  
        
                            <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
                        </td>
                    </tr>
                    
               
<?php
    }
?>

    </tbody>
    </table>
    <?php 
        echo "<h5>Total do Pedido - R$ ".$preco;
        $_SESSION["preco"] = $preco;
        $_SESSION["tempo"] = $tempoevento;


    ?>
    </h5>
    <h4> <a href="contratocliente.php"><button type="button" class="btn btn-primary">Finalizar Contrato</button></a></h4> 

<?php


}



?>



























<?php
    require_once 'footer.php';
  ?>