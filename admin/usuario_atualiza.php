<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){
        $id_user = $_POST['id_usuario'];
        $login_usuario = $_POST['login_usuario'];
        $senha_usuario = $_POST['senha_usuario'];
        
        $id = $_POST['id_usuario'];

        $updtSql = "update tbusuarios 
                    set senha_usuario = '$senha_usuario',
                        login_usuario = ' $login_usuario'
                        where id_usuario = '$id';";
            $resultado = $conn->query($updtSql);
        if($resultado){
            header('location: usuarios_lista.php');
        }
    
    }
    if($_GET){
        $id_form = $_GET['id_usuario'];
    }else{
        $id_form = 0;
    }
    $lista = $conn->query("select * from tbusuarios where id_usuario = $id_form");
    $row = $lista->fetch_assoc();
    $numRows = $lista->num_rows;
    
        // selecionar os dados de chave estrangeira (lista de tipos de produtos)
         $consulta_fk = "select * from tbusuarios order by login_usuario asc";
         $lista_fk = $conn->query($consulta_fk);
         $row_fk = $lista_fk->fetch_assoc();
         $nlinhas = $lista_fk->num_rows;
    
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
                    Atualizando Usuario
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuario_atualiza.php" method="post" name="form_usuario_atualiza"
                         enctype="multipart/form-data" id="form_usuario_atualiza" >
                            </div>
                            <label for="login_usuario">Login: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" 
                                class="form-control" placeholder="Digite o nome do Usuario"
                                 maxlength="100" required value="<?php echo $row_fk['login_usuario'];?>">
                            </div>
                            <label for="senha_usuario">Senha: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="senha_usuario" id="senha_usuario" 
                                class="form-control" placeholder="Digite a senha" 
                                maxlength="100" required  value="<?php echo $row_fk['senha_usuario'];?>">
                            </div>
                            <label for="nivel_usuario">Nivel: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nivel_usuario" id="nivel_usuario" 
                                class="form-control" placeholder="Digite o nivel do usuario" 
                                maxlength="100" required  value="<?php echo $row_fk['nivel_usuario'];?>">
                            </div>
                            <br>
                            <input type="submit" name="atualizar" id="atualizar" class="btn btn-danger btn-block" value="Atualizar">

                        </form>
                    </div>
                </div> 
            </div>  
        </div>
    </main>
</body>
</html>