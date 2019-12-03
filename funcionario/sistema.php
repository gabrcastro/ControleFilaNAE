<?php
//Iniciando sessao novamente
    session_start();

    //Adicionando o setor e mesa escolhido em variaveis para utiliza-las napagina
    $setor = $_SESSION['setor'];
    $mesa = $_SESSION['mesa'];

    //Adicionando o nome do funcionario na variavel nome
    $nome = $_SESSION['nome'];

    //Incluindo a conexao com o banco de dados
    include('../DbSource/connection.php');

    //SQL responsavel por selecionar as senhas daquele setor especifico que o funcionario está
    $sql = "SELECT * FROM tb_senha WHERE setor_func = '".$setor."' AND atendido = 0";

    //Executando o comando SQL
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10"><!--Realiza um refresh a cada 1 segundo-->
    <title>Controle de Fila NAE</title>

    <!--css-->
    <link rel="stylesheet" href="../css/main.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 

    <script>
        function atendido(val){
            window.location.href = 'control/process-removersenha.php?'+val;
        }

        function naoAtendido(val){
            window.location.href = 'control/process-naoatendido.php?'+val;
        }

        function limpar(){
            window.locale = "control/limpar-senhas.php";
        }

    </script>
    
    <style>
        .btn-sair{
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container-sistema container-fluid">

        <!-- Barra de opcoes -->

        <nav class="navbar navbar-nav navbar-expand-lg navbar-light" id="nav">
            <a class="navbar-brand" href="#">Controle de Fila do NAE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                            <!--Botao de consultar ultima senha chamada -->
                            <button class="btnUltimaSenha" type="button" data-toggle="modal" data-target="#modalUltimaSenha">
                                <a class="nav-link" >Ver última senha chamada<span class="sr-only">(current)</span></a>
                            </button>

                            <!-- Modal  Ultima Senha-->
                            <div class="modal fade" id="modalUltimaSenha" tabindex="-1" role="dialog" aria-labelledby="exampleLargeCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">A ultima senha chamada foi ::: <?php echo $_SESSION['senhaDaVez'];?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------------------------------------------->

                            <!--Botao de limpar senhas-->
                            <button class="btnOpcoes"type="button" data-toggle="modal" data-target="#modalLimparSenhas">
                                <a class="nav-link" >Limpar lista de senhas<span class="sr-only">(current)</span></a>
                            </button>

                            <!--Modal -->
                            <div class="modal fade" id="modalLimparSenhas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Deseja realmente limpar a lista de senhas?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-sair"><a href="control/limpar-senhas.php">Limpar</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>

                    <li class=" active">
                        <button class="btnSair" type="button" data-toggle="modal" data-target="#modalSair">
                            <a class="nav-link" >Sair</a>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalSair" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Deseja realmente sair do sistema?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-sair"><a href="../index.html"> Sair </a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
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

                <!-- Painel das senhas geradas - senhas que serão chamadas e atendidas-->
                <div class="painel-esquerdo col-sm-8">
                    <h2 align="center">Lista de senhas</h2>
                    <hr><hr>
                <!---------------------------------------------------------------------------->        
                    <form class="lista-senhas" action="control/process-chamarsenha.php" method="POST"> <!--Formulario-->
                        
                        <ul class="list-group">
                            <?php $valBtn = 0; while($linha = mysqli_fetch_assoc($result)){  ?> <!--Codigo PHP que enquanto tiver senhas ele captura em array-->
                                
                                <li class="list-group-item list-group-item-success"> <!--Item de lista-->
                                    <!--Outro codigo PHP onde captura o nome do usuario, atribui ele a uma sessao senhaDaVez e captura o campo prioridade tambem-->
                                    <?php echo $linha['nome_user']; $valBtn = $linha['id_senha'];?> <br>
                                    <label><?php echo $linha['prioridade']; ?></label>
                                    <br>
                                    <div class="botoes">
                                        <button class="btn"  value="<?php echo $valBtn;?>" id="btn-chamar" name="btn-chamar" type="submit">Chamar</button>
                                        <button class="btn"  onclick="atendido(<?php echo $valBtn;?>)" 
                                            value="<?php echo $valBtn;?>" id="btn-atendido" name="btn-atendido" type="button">Atendido</button>
                                        <button class="btn"  onclick="naoAtendido(<?php echo $valBtn;?>)" 
                                            value="<?php echo $valBtn;?>" id="btn-naoatendido" name="btn-naoatendido" type="button">Não Atendido</button>                                    
                                    </div>
                                </li>
                    
                            <?php } ?>  <!--Fechamento do while la em cima-->  
                        </ul>
                        
                    </form>
                <!------------------------------------------------------------------------------>
                </div>

                <!-- Painel das senhas que não foram atendidas-->
                <div class="painel-direito col-sm-4">
                    <h2 align="center">Senhas não atendidas</h2>
                    <hr><hr>
                <!---------------------------------------------------------------------------->    
                    <form class="lista-nao-atendidas" action="control/process-chamarsenha.php" method="POST"> <!--Formulario-->
                        
                        <ul class="list-group">
                            <?php 
                            
                            $sql = "SELECT * FROM tb_senha WHERE atendido = 1";

                            $res = mysqli_query($conn, $sql);

                            $valBtn = 0; 
                            
                            while($linha = mysqli_fetch_assoc($res)){  ?> <!--Codigo PHP que enquanto tiver senhas ele captura em array-->
                                
                                <li class="list-group-item list-group-item-success"> <!--Item de lista-->
                                    <!--Outro codigo PHP onde captura o nome do usuario, atribui ele a uma sessao senhaDaVez e captura o campo prioridade tambem-->
                                    <?php echo $linha['nome_user']; $valBtn = $linha['id_senha'];?> <br>
                                    <label><?php echo $linha['prioridade']; ?></label>
                                    <div class="botoes">
                                        <button class="btn"  value="<?php echo $valBtn;?>" id="btn-chamar" name="btn-chamar" type="submit">Chamar</button>
                                        <button class="btn"  onclick="atendido(<?php echo $valBtn;?>)" 
                                            value="<?php echo $valBtn;?>" id="btn-atendido" name="btn-atendido" type="button">Atendido</button>
                                    </div>
                                </li>
                    
                            <?php } ?>  <!--Fechamento do while la em cima-->  
                        </ul>
                        
                    </form>
                <!------------------------------------------------------------------------------>
                </div>


            </div>
        </div>

    </div>
</body>
<!-- Jquery-->
<script src="../js/jquery.js" type="text/javascript"></script>
<!-- Js para bootstrap -->
<script src="../js/bootstrap.js"></script>
</html>