<?php 
    include 'conn/connect.php';
    $nivel = 'cli';
    if($_POST){
        $login_usuario = $_POST['login_usuario'];
        $senha_usuario = $_POST['senha_usuario'];
        $cpf_usuario = $_POST['cpf_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $insereUser = "INSERT tbusuarios
                    (login_usuario, senha_usuario,nivel_usuario, cpf_usuario, email_usuario)
                    VALUES
                    ('$login_usuario', md5('$senha_usuario'),'$nivel',' $cpf_usuario','$email_usuario')
                    ";
        $resultado = $conn->query($insereUser);
        if(mysqli_insert_id($conn)){
            header('location: pedido_reserva.php');
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
                    Cadastra-se
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="cadastro.php" method="post" name="form_usuario_insere"
                         enctype="multipart/form-data" id="form_usuario_insere" >
                            </div>
                            <label for="login_usuario">Login: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" 
                                class="form-control" placeholder="Digite o nome do Usuario"
                                 maxlength="100" required>
                            </div>
                            <label for="senha_usuario">Senha: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="password" name="senha_usuario" id="senha_usuario" 
                                class="form-control" placeholder="Digite a senha" 
                                maxlength="100" required>
                            </div>
                            <label for="cpf_usuario"> <strong>Cpf:</strong>  </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="cpf_usuario" id="cpf_usuario" 
                                class="form-control" placeholder="Digite seu cpf - apenas numeros." 
                                maxlength="100" required>
                            </div>
                            <label for="email_usuario">Email: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="email" name="email_usuario" id="email_usuario" 
                                class="form-control" placeholder="Digite seu Email:" 
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