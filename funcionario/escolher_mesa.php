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
    <!--Container onde terá toda a página-->
    <div class="container-fluid">
        <!--Criando uma row para podermos dividir o container em colunas, são 12 no total-->
        <div class="row">
            <!--Coluna com tamanho 3-->
            <div class="col-sm-3"></div>

            <!--Coluna com tamanho 6 assim ela fica centralizada-->
            <div class="div-setor col-sm-6">
            <h2>Selecione o seu setor e sua mesa</h2> <!--Titulo-->
                <form action="control/process-setoremesa.php" method="POST"> <!--formulario-->
                    <label for="select-setor">Setor</label>
                    <select class="form-control" name="select-setor" id="select-setor"> <!--Select com opcoes de setores-->
                        <option value="NAE">NAE</option>
                        <option value="ProUni/FIES">ProUni / FIES</option>
                    </select>
                    <br><br>
                    <label for="select-mesa">Mesa</label>
                    <select class="form-control" name="select-mesa" id="select-mesa"> <!--Select com opcoes de balcao-->
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                    </select>  
                    <br><br>
                    <button class="btn-avancar btn form-control" type="submit">Avançar</button> <!--Botao que envia dados para process-setormesa.php-->
                </form> 
            </div>
            <!--ultima coluna com tamanho 3-->
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>