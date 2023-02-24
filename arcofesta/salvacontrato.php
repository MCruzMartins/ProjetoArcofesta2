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
else{
    if(!isset($_SESSION["nome"])){
        $_SESSION["carrinho"]=true;
        echo "<script>
            alert('Faça Login ou Cadastre-se!');
            parent.location = 'login.php';
            </script>";
    }
    else{
        //fazer pagamento
        echo "ja estou logado agora tenho que pagar";

        $dataevento = date('y-m-d');
        $preco = $_SESSION["preco"];            
        //$idcolaborador = $_SESSION["idcolaborador"];

       $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       var_dump($dadoscad);

       if(!empty($dadoscad["btncad"])){        
            

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;
           
            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = 'formulariocliente.php';
            </script>";

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;
            echo "<script>
            alert('Informe um email válido!');
            parent.location = 'contratocliente.php';
            </script>";
        }

    } 
    
    if(!$vazio){
        
        $sqlvenda = "INSERT into contrato(dataevento,tipoevento,cep,numero,complemento)values
        (:dataevento,:tipoevento,:cep,:numero,:complemento)";
        $salvarvenda= $conn->prepare($sqlvenda);
        
        $salvarvenda->bindParam(':dataevento', $dadoscad["datadoevento"], PDO::PARAM_STR);
        $salvarvenda->bindParam(':tipoevento', $dadoscad["tipodoevento"], PDO::PARAM_STR);
        $salvarvenda->bindParam(':cep', $dadoscad["cep"], PDO::PARAM_STR);    
        $salvarvenda->bindParam(':numero', $dadoscad["numero"], PDO::PARAM_STR); 
        $salvarvenda->bindParam(':complemento',$dadoscad["complemento"], PDO::PARAM_STR);     
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
            var_dump($linha);

            $sqlitem = "insert into item(idcolaborador,numerocontrato,preco)
            values(:idcolaborador,:numerocontrato,:preco)";
            $salvaritem= $conn->prepare($sqlitem);
            $salvaritem->bindParam(':idcolaborador', $idcolaborador, PDO::PARAM_INT);
            $salvaritem->bindParam(':numerocontrato', $numerocontrato, PDO::PARAM_INT);           
            $salvaritem->bindParam(':preco', $preco, PDO::PARAM_STR);
                    $salvaritem->execute();

            /*$estoque = "UPDATE peca set quantidade=(quantidade - $quantcomprada)
            where codigopeca = $codigopeca";
            $atualiza=$conn->prepare($estoque);
            $atualiza->execute();*/
        }
    }
}


    $sqllimpa = "delete from carrinho";
    $limpa= $conn->prepare($sqllimpa);
    $limpa->execute();
    $_SESSION["quant"] = 0;                                                                      

header("Location:index.php");


}

}
?>

<script>
    alert('Contrato enviado');
    </script>;