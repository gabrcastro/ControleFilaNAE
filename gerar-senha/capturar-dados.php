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
      padding-bottom: 50px;
      border-radius: 15px;
    }

    .title{
      font-size: 35px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: #fff;
    }

    img{
      margin-top: 30px;
      margin-bottom: 20px;
    }

    .input-nome{
        height: 100px;
        width: 900px;
        font-size: 60px;
        margin-bottom: 50px;
    }

    .btn1{
      background-color: green;
      color: #fff;
      font-size: 60px;
      border-radius: 25px;
      width: 650px;
      height: 100px;
    }

    .btn2{
      background-color: #dedede;
      color: #000;
      font-size: 60px;
      border-radius: 25px;
      width: 650px;
      height: 80px;
    }

    </style>

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
          <h1 class="title">Digite o seu nome e sobrenome e acompanhe a chamada no painel</h1><br><br>
          <form action="control/process-confirme.php" method="POST">
            <input class="input-nome form-control" name="input-nome" placeholder="Digite o seu nome e sobrenome" type="text">
            <button class="btn1" name="btn">PRÓXIMO</button><br><br>
          </form>
          <button class="btn2" onclick="cancelar()">Cancelar</button>
          
      </div>


      

    </div>

  </body>
</html>