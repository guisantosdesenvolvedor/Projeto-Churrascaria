<?php 
    include 'acesso_com.php';
    include "../conn/connect.php";

    if($_POST){
        // se o usuario enviou o formulário
        $rotulo_tipo = $_POST['rotulo_tipo'];
        $sigla_tipo = $_POST['sigla_tipo'];
        $insereProd = "INSERT tbtipos 
                       (sigla_tipo, rotulo_tipo)
                        VALUES
                        ('$sigla_tipo','$rotulo_tipo')
                        ";
        $resultado = $conn -> query($insereProd);
        // após a gravação bem sucedida do produto, volata (atualiza) lista.
        if(mysqli_insert_id($conn)){
            header('location: tipos_lista.php');
        }
    }    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tipos - Lista</title>
</head>
<body>
    <?php include "menu_adm.php";?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="tipos_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Tipos 
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="tipos_atualiza.php" method="post" name="form_tipos_insere" enctype="multipart/form-data" id="form_tipos_insere" >
                            </div>
                            <label for="rotulo_tipo">Nome: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o nome do Tipo" maxlength="100" required>
                            </div>
                            <label for="sigla_tipo">Sigla: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a sigla do Tipo ex:chu " maxlength="100" required>
                            </div>
                            <br>
                            <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                        </form>
                    </div>
                </div> 
            </div>  
        </div>
    </main>
</body>
</html>