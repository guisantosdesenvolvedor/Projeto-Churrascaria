<?php 
        include 'conn/connect.php';
        //iniciar a verificaçao do login
        if($_POST){
            $login = $_POST['login_usuario'];
            $email = $_POST['email_usuario'];
            $senha = $_POST['senha_usuario'];
            $loginRes = $conn->query("select * from tbusuarios where login_usuario = '$login' and email_usuario = '$email' and senha_usuario = md5('$senha')");
            $rowLogin = $loginRes->fetch_assoc();
            $numRow = mysqli_num_rows($loginRes);
            //se a sessao nao existir  
           
            print_r($rowLogin);
            if(!isset($_SESSION)){
                $sessaoAntiga = session_name('chulettaa');
                session_start();
                $session_name_new =  session_name();
            }
            if($numRow>0){ 
                $_SESSION['login_usuario'] = $login;
                $_SESSION['nivel_usuario'] = $rowLogin['nivel_usuario'];
                $_SESSION['nome_da_sessao'] = session_name();
                if($rowLogin['nivel_usuario']=='cli'){
                    echo "<script>window.open('area_reserva.php','_self')</script>";
                }
                else{
                    echo "<script>window.open('cliente/index.php?cli=".$login."','_self')</script>";
                }
            } else{
                echo "<script>window.open('admin/invasor.php','_self')</script>";
            }
    } 
    ?>
<!DOCTYPE html> 
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="30;URL=../index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script>
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
    
    <title>Chuleta Quente - Login</title>
</head>

<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <h1 class="breadcrumb text-info text-center">Faça seu login</h1>
                        <div class="thumbnail">
                            <p class="text-info text-center" role="alert">
                                <i class="fas fa-users fa-10x"></i>
                            </p>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <form action="login_cliente.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
                                    <label for="login_usuario">Login:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="login_usuario" id="login_usuario" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu login.">
                                    </p>
                                    <label for="email_usuario">Email:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="email" name="email_usuario" id="email_usuario" class="form-control" required autocomplete="off" placeholder="Digite seu Email.">
                                    </p>
                                    <label for="senha_usuario">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" required autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <div class="reserva">
                                    <p class="text-left">
                                       <a href="cadastro.php"> <input type="button" value="Registra-se" class="btn btn-primary"></a>
                                    </p>
                                    <p class="text-right">
                                      <input type="submit" value="Entrar" class="btn btn-primary"> 
                                    </p>
                                    </div>
                                </form>
                                <p class="text-center">
                                    <small>
                                        <br>
                                        Caso não faça uma escolha em 30 segundos será redirecionado automaticamente para página inicial.
                                    </small>
                                </p>
                            </div><!-- fecha alert -->
                        </div><!-- fecha thumbnail -->
                    </div><!-- fecha dimensionamento -->
                </div><!-- fecha row -->
            </article>
        </section>
    </main>


    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>