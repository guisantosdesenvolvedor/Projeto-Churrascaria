<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    if($_POST){
        $login_usuario = $_POST['login_usuario'];
        $senha_usuario = $_POST['senha_usuario'];
        $insereUser = "INSERT tbusuarios
                    (login_usuario, senha_usuario)
                    VALUES
                    ('$login_usuario', md5('$senha_usuario'))
                    ";
        $resultado = $conn->query($insereUser);
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
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
                    Inserindo Usuarios
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuario_insere.php" method="post" name="form_usuario_insere"
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
                            <label for="nivel_usuario">Nivel: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nivel_usuario" id="nivel_usuario" 
                                class="form-control" placeholder="Digite o nivel do usuario" 
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