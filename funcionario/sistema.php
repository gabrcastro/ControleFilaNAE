<?php
    session_start();
    $setor = $_SESSION['setor'];
    $mesa = $_SESSION['mesa'];
    $nome = $_SESSION['nome'];
    $_SESSION['senha-vez'] = "$setor".$_SESSION['senhas'];

    include('../DbSource/connection.php');

    $sql = "SELECT * FROM tb_senha WHERE setor = '".$setor."'";

    $result = mysqli_query($conn, $sql);
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

                <div class="painel-esquerdo col-sm-12">
                    
                <!---------------------------------------------------------------------------->    
                    <form class="lista-senhas" action="">
                        <ul class="list-group">
                            <?php while($linha = mysqli_fetch_assoc($result)) { ?>

                            <li class="list-group-item list-group-item-success">
                                <?php echo $linha['nome'];?>
                                <label><?php echo $linha['prioridade']; ?></label>
                                <button class="btn btn-chamar" type="submit">Chamar</button>
                            </li>
                    
                            <?php } ?>    
                        </ul>
                    </form>
                <!------------------------------------------------------------------------------>
                </div>


            </div>
        </div>

    </div>
</body>
</html>