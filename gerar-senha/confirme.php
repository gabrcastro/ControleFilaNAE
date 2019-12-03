<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Controle NAE</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      background-color: #fff;
      color:#222;
    }
    .container {
      background-color: transparent;
    }

    .container_two{
      background-color: #222;
      padding: 10px;
      border-radius: 15px;
      margin-bottom: 10px;
    }

    .title{
      font-size: 50px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: #fff;
    }

    .nome, .setor{
      font-size: 70px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: #000;
      margin-bottom: 20px;
      background-color: #fff;
    }

    img{
      margin-top: -10px;
      margin-bottom: 20px;
    }

    .btn1{
      background-color: green;
      color: #fff;
      font-size: 60px;
      border-radius: 25px;
      width: 650px;
      height: 120px;
    }

    .btn2{
      background-color: #dedede;
      color: #000;
      font-size: 60px;
      border-radius: 25px;
      width: 650px;
      height: 100px;
    }

    </style>
<!--Mesmo metodo javascript que redireciona para a tela inicial-->
    <script>
    
    function cancelar(){
      window.location.href = 'gerar_senha.html';
    }
    
    </script>
  </head>
  <body>

    <div class="container" align="center">
      <br>
      <img src="../imagens/logo.png" alt="">

      <div class="container_two">
        <!--Exibe o nome e setor escolhidos -->
          <h1 class="title">Pressione CONFIRMAR para gerar sua senha</h1><br><br>
          <h2 class="nome">Nome: <?php echo $_SESSION['input-nome'];?></h2>
          <h3 class="setor">Setor: <?php echo $_SESSION['btn-setor'];?></h3>
          <form action="control/process-dados.php" method="POST">
            <button class="btn1" name="btn">CONFIRMAR</button><br><br><!--botao que leva para o process-dados.php-->
          </form>  
          <button class="btn2" onclick="cancelar()">Cancelar</button><br><br>
          
      </div>


      

    </div>

  </body>
</html>