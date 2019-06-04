<?php
    session_start();
    $setor = $_SESSION['setor'];
    $mesa = $_SESSION['mesa'];
    $nome = $_SESSION['nome'];
    $_SESSION['senha-vez'] = "$setor".$_SESSION['senhas'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Controle de Fila NAE</title>

    <!--css-->
    <link rel="stylesheet" href="../css/main.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
</head>
<body>
    <div class="container-sistema container-fluid">
       
        <!--Barra de opcoes-->
        <nav class="nav navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li><a class="nav-link" href="../monitor/monitor.php" target="_blank">Painel de Senha</a></li>
                <li><a class="nav-link" href="../gerar-senha/gerar_senha.html" target="_blank" >Painel Gerar Senha</a></li>
                <li><a class="nav-link" href="../index.html">Sair</a></li>
            </ul>
        </nav>

        <br>
        <!--Informacoes do funcionarios-->
        <nav class="nav2 navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li>Setor: <?php echo"$setor";?></li>
                <li>Balcão: <?php echo"$mesa"?></li>
                <li>Usuario: <?php echo"$nome"?></li>
            </ul>
        </nav>

        <!--Container do sistema-->
        <div class="container-fluid">
            <div class="row">

                <div class="painel-esquerdo col-sm-8">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"> <?php echo $_SESSION['senha-vez'] ?> </li>
                        <li class="list-group-item">N057</li>
                        <li class="list-group-item">N058</li>
                        <li class="list-group-item">N059</li>
                        <li class="list-group-item">N060</li>
                        <li class="list-group-item">N057</li>
                        <li class="list-group-item">N058</li>
                    </ul>
                </div>

                <div class="painel-direito col-sm-4">
                    <h2>Senha atual</h2>
                    <h3><?php echo $_SESSION['senha-vez']?></h3>
                    
                    <form class="form-chamar" action="control/process-senha.php" method="POST">
                        <button class="btn form-control" type="submit">Chamar Próxima</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>
</html>