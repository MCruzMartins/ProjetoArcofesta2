<?php
    require_once 'head.php';  	
    include_once 'conexao.php';
    session_start();
	ob_start();
  ?>

  <h1 class="text-center x">Área Administrativa</h1>  
  <?php
    echo "Bem vindo(a)" . $_SESSION['nome'];
    if(!isset($_SESSION['nome'])){
        $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";
        header("Location: login.php");
    }
?>

<h4> 
    <a href="relfuncionarios.php"><button type="submit">Relatório de Serviços</button></a>
    <a href="agendafuncionario.php"><button type="submit">Agenda</button></a>
    <a href="sair.php"><button type="submit">Sair</button></a>
</h4>



<div class="container-fluid">
    <div class="row text-center footer">
      <div class="col-md-2">
        <h3>Arcofesta</h3>
        <p>Você faz a diferença!</p>
      </div>

      <div class="col-md-4">
        <h3>Contatos</h3>
        <p>(21)97212-2211</p>
</div>

      <div class="col-md-4">
        <h3>Horário de Atendimento</h3>
        <ul>
          <li>Segunda a Sexta - 08:00 às 17:00</li>
        </ul>
      </div>

      <div class="col-md-2text-center"> 
          <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <a href="https://wa.me/arcofesta">
            <img src="imagens/zap.png" style=width:0.5rem;height:0.5rem; alt="imagem icone para contratar serviços"> </a>
          </div>
      </div>
