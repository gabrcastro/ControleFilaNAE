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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>

            
            <div class="div-setor col-sm-6">
            <h2>Selecione o seu setor e sua mesa</h2>
                <form action="control/process-setoremesa.php" method="POST">
                    <label for="select-setor">Setor</label>
                    <select class="form-control" name="select-setor" id="select-setor">
                        <option value="NAE">NAE</option>
                        <option value="ProUNI / FIES">ProUni / FIES</option>
                    </select>
                    <br><br>
                    <label for="select-mesa">Mesa</label>
                    <select class="form-control" name="select-mesa" id="select-mesa">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                    </select>  
                    <br><br>
                    <button class="btn-avancar btn form-control" type="submit">Avançar</button> 
                </form> 
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>