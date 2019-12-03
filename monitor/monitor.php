<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1"><!--Realiza um refresh a cada 1 segundo-->
    <title>Senha</title>

    <!--bootstrap-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!--css-->
    <link rel="stylesheet" href="../css/main.css">
    
  </head>
  <body>

    <div class="container-fluid container-cima">
      <img src="../imagens/logo.png">
      <h1><?php echo date('H:i:s');?></h1><!--Exibe a hora-->
    </div>
    <div class="container-fluid container-baixo">
      <div class="row">
        <div class="painel-senha col-sm-12" align="center">
          <h2><?php echo $_SESSION['senhaDaVez']; ?></h2><!--Exibe a senha da vez-->
        </div>
      </div>
    </div>
    <div class="container-fluid container-baixo">
      <div class="row">
        <div class="painel-balcao col-sm-12"">
          <label for="">Mesa</label>
          <h2><?php echo $_SESSION['mesa'];?></h2><!--Exbie o balca, mas precisa implementar ainda-->
        </div>
      </div>
    </div>

    

    

  </body>
</html>