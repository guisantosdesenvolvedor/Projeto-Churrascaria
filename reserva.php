<?php 
    include 'conn/connect.php';
    if($_POST){
        $nome = $_POST['nome'];
        $data_reserva = $_POST['data_reserva'];
        $quantidade = $_POST['quantidade'];
        $insereUser = "INSERT tbreservas
                    (nome, data_reserva, data_enviada, quantidade)
                    VALUES
                    ('$nome', '$data_reserva',now(),' $quantidade')
                    ";
        $resultado = $conn->query($insereUser);
        if(mysqli_insert_id($conn)){
           header('location: area_reserva.php;');
        }
    }
?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Tipos - Lista</title>
</head>
<body>
    <?php include 'menu_reserva.php';?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="reserva.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Pedido de reserva
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="reserva.php" method="post" name="form_usuario_insere"
                         enctype="multipart/form-data" id="form_usuario_insere" >
                            </div>
                            <label for="nome">Nome Completo: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nome" id="nome" 
                                class="form-control" placeholder="Digite o nome completo"
                                 maxlength="100" required>
                            </div>
                            <label for="data_reserva">Data para reservar: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="date" name="data_reserva" id="data_reserva" 
                                class="form-control" placeholder="Coloque a data da reserva que deseja" 
                                maxlength="100" required>
                            </div>
                            <label for="quantidade">Quantidade de pessoas: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="quantidade" id="quantidade" 
                                class="form-control" placeholder="Quantidade de pessoas:" 
                                maxlength="100" required>
                            </div>
                            <br>
                            <input type="submit" name="enviar" id="enviar"
                             class="btn btn-danger btn-block" value="Cadastrar">
                        </form>
                    </div>
                </div> 
            </div>  
        </div>
    </main>
</body>
</html>