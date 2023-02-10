<?php 
    include "acesso_com.php";
    include "../conn/connect.php";

    if($_POST){ 
        $sigla_tipo = $_POST['sigla_tipo'];
        $rotulo_tipo = $_POST['rotulo_tipo'];

        $id = $_POST['id_tipo'];

        $updSql = "update tbtipos
            set sigla_tipo = '$sigla_tipo',
            rotulo_tipo = '$rotulo_tipo',
            where id_tipo = $id;";

    $resultado = $conn->query($updSql);

        if($resultado){
            header('location: tipos_lista.php');
        }
    } 
if($_GET){
    $id_form = $_GET['id_tipo'];
}else{
    $id_form=0;
}

$lista = $conn -> query("select * from tbtipos where id_tipo = $id_form");
    $row = $lista -> fetch_assoc();
    $numRows = $lista -> num_rows;


     // selecionar os dados de chave estrangeira (Lista de tipos de produtos) 
    $consulta_fk = "select * from tbtipos order by rotulo_tipo asc";
    $lista_fk = $conn -> query($consulta_fk);
    $row_fk = $lista_fk -> fetch_assoc();
    $nlinhas = $lista_fk -> num_rows;
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
                        <form action="tipos_atualiza.php" method="post" 
                            name="form_produto_insere" enctype="multipart/form-data" 
                            id="form_produto_insere">
                            <label for="rotulo_tipo">Nome: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o nome do Tipo" maxlength="100" required value="<?php echo $row['rotulo_tipo'];?>">
                            </div>
                            <label for="sigla_tipo">Sigla: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a sigla do Tipo ex:chu " maxlength="100" required value="<?php echo $row['sigla_tipo'];?>">
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