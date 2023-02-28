<?php
session_start();
ob_start();

include_once 'conexao.php';
    
if(isset($_POST["excluir"])){
    $codigopeca = $_POST["excluir"];

        $sqlexcluir = "DELETE from carrinho where idcolaborador = $idcolaborador";
        $resulbusca = $conn->prepare($sqlexcluir);
        $resulbusca->execute();

        $_SESSION["quant"]-=1;
}    


        $preco = $_SESSION["preco"];  
        $cpf = $_SESSION["cpf"];  
        $tempo = $_SESSION["tempo"];        
       
       $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       //var_dump($dadoscad);        
       $vazio = false;
        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;
           
            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = 'contratocliente.php';
            </script>";

        } 
        else if(!$vazio){
        
        $sql = "INSERT into contrato(Dataevento,preco,Tipoevento,cep,numero,complemento,cpf,Tempo_evento,nomerecep,telrecep)values
        (:dataevento,:preco,:tipoevento,:cep,:numero,:complemento,:cpf,:tempo,:nomerecep,:telrecep)";
        $salvarvenda= $conn->prepare($sql);
        
        $salvarvenda->bindParam(':dataevento', $dadoscad["datadoevento"], PDO::PARAM_STR);
        $salvarvenda->bindParam(':preco', $preco, PDO::PARAM_STR);
        $salvarvenda->bindParam(':tipoevento', $dadoscad["tipoevento"], PDO::PARAM_STR);
        $salvarvenda->bindParam(':cep', $dadoscad["cep"], PDO::PARAM_STR);    
        $salvarvenda->bindParam(':numero', $dadoscad["numero"], PDO::PARAM_STR); 
        $salvarvenda->bindParam(':complemento',$dadoscad["complemento"], PDO::PARAM_STR);     
        $salvarvenda->bindParam(':cpf',$cpf, PDO::PARAM_STR);   
        $salvarvenda->bindParam(':tempo',$tempo, PDO::PARAM_STR);            
        $salvarvenda->bindParam(':nomerecep',$dadoscad["nomerecep"], PDO::PARAM_STR);            
        $salvarvenda->bindParam(':telrecep',$dadoscad["telrecep"], PDO::PARAM_STR);            
        $salvarvenda->execute();

        $contrato = "Select LAST_INSERT_ID()";
        $resulvenda=$conn->prepare($contrato);
        $resulvenda->execute();

        $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);     
        $idcontrato = ($linhavenda["LAST_INSERT_ID()"]);

            $busca = "select * from carrinho";
            $resulbusca=$conn->prepare($busca);
            $resulbusca->execute();

            if(($resulbusca) and ($resulbusca->rowCount()!=0)){
            while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)) {
            extract($linha);
           // var_dump($linha);

            $sqlitem = "insert into item(idcolaborador,numerocontrato,preco)
            values(:idcolaborador,:numerocontrato,:preco)";
            $salvaritem= $conn->prepare($sqlitem);
            $salvaritem->bindParam(':idcolaborador', $idcolaborador, PDO::PARAM_INT);
            $salvaritem->bindParam(':numerocontrato', $idcontrato, PDO::PARAM_INT);           
            $salvaritem->bindParam(':preco', $preco, PDO::PARAM_STR);
                    $salvaritem->execute();

            //$estoque = "UPDATE peca set quantidade=(quantidade - $quantcomprada)
            //where codigopeca = $codigopeca";
            //$atualiza=$conn->prepare($estoque);
            //$atualiza->execute();
      
   $sqllimpa = "delete from carrinho";
    $limpa= $conn->prepare($sqllimpa);
    $limpa->execute();
    $_SESSION["quant"] = 0;                                                                      

    echo "<script>
    alert('Contrato Enviado com Sucesso !');
    parent.location = 'index.php';
    </script>";

            }
}

}
?>

<?php
    require_once 'footer.php';
  ?>