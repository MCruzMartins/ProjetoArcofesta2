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
        $idcolaborador = $_SESSION["idcolaborador"];
        
        $sqlvenda = "INSERT into contrato(numerocontrato,dataevento,tipoevento,cep,numero,complemento,cpf,tempoevento,valor)values
        (:dataevento,:tipoevento,:cep,:numero,:complemento,:cpf,:tempoevento,:valor)";
        $salvarvenda= $conn->prepare($sqlvenda);
        $salvarvenda->bindParam(':numerocontrato', $numerocontrato, PDO::PARAM_STR);
        $salvarvenda->bindParam(':dataevento', $dataevento, PDO::PARAM_STR);
        $salvarvenda->bindParam(':tipoevento', $tipoevento, PDO::PARAM_STR);
        $salvarvenda->bindParam(':cep', $cep, PDO::PARAM_STR);    
        $salvarvenda->bindParam(':numero', $numero, PDO::PARAM_STR); 
        $salvarvenda->bindParam(':complemento', $complemento, PDO::PARAM_STR);     
        $salvarvenda->bindParam(':cpf', $cpf, PDO::PARAM_STR);  
        $salvarvenda->bindParam(':tempoevento', $tempoevento, PDO::PARAM_STR);  
        $salvarvenda->bindParam(':valor', $valor, PDO::PARAM_STR);  
        $salvarvenda->execute();

        $venda = "Select LAST_INSERT_ID()";
        $resulvenda=$conn->prepare($venda);
        $resulvenda->execute();

        $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);     
        
        $idvenda = ($linhavenda["LAST_INSERT_ID()"]);

            $busca = "select * from carrinho";
            $resulbusca=$conn->prepare($busca);
            $resulbusca->execute();

            if(($resulbusca) and ($resulbusca->rowCount()!=0)){
            while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)) {
            extract($linha);
            var_dump($linha);

            $sqlitem = "insert into carrinho(idcolaborador,nome,funcao,precohora,tempoevento)
            values(:idcolaborador,:nome,:funcao,:precohora,tempoevento)";
            $salvaritem= $conn->prepare($sqlitem);
            $salvaritem->bindParam(':idcolaborador', $idcolaborador, PDO::PARAM_INT);
            $salvaritem->bindParam(':nome', $nome, PDO::PARAM_INT);
            $salvaritem->bindParam(':funcao', $funcao, PDO::PARAM_INT);
            $salvaritem->bindParam(':precohora', $precohora, PDO::PARAM_STR);
            $salvaritem->bindParam(':tempoevento', $tempoevento, PDO::PARAM_STR);
            $salvaritem->execute();

            $estoque = "UPDATE peca set quantidade=(quantidade - $quantcomprada)
            where codigopeca = $codigopeca";
            $atualiza=$conn->prepare($estoque);
            $atualiza->execute();
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