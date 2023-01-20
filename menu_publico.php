<?php
    include "conn/connect.php";
    $lista_tipos = $conn->query('select * from tbtipos order by rotulo_tipo desc;');
    $row_tipos = $lista_tipos ->fetch_all();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Menu Publico</title>
</head>
<body>
    <!-- abrea a barra de navegação -->
    <nav class="fixed navbar fixed-top navbar-light navbar-inverse bg-light ajustes">
            <div class="container-fluid ">
                <!-- agrupamento mobile -->
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toglle="collapse" data-target="#menupublico" aria-expanded="false">
                        <span class="sr-only"> Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                        <img src="images/logo_faustino_pequena.png" alt="">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menupublico">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li><a href="index.php#destaques">Destaques</a></li>
                        <li><a href="index.php#produtos">Produtos</a></li>
                        <!-- dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toglle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Tipos
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($rows_tipos as $row){?>
                                        <li><a href="produtos_por_tipo.php?id_tipo=<?php echo $row[0]?>"><?php echo $row[2]?></a></li>
                                    <?php }?>
                                </ul>
                            </li>
                            <!-- fim dropdown -->
                            <li><a href="index.php#contato">Contato</a></li>
                            <!-- inicio de formulario de busca -->
                            <form action="produtos_busca.php" method="get" name="forme-busca" id="form-busca" class="navbar-form navbar-left" role="search">
                                <div class="input-group">
                                    <input type="search" name="buscar" id="buscar" size="9" class="form-control" aria-label="search" placeholder="Buscar produtos" required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-defaul" type="submit">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </div>
                                </div>
                            </form>
                            <!-- fim do formulario de busca -->
                            <li class="active">
                                <a href="admin/index.php">
                                    <span class="glyphicon glyphicon-user">&nbsp;ADMIN/CLIENTE</span>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
    </nav>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery/-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready',function(){
        $(".regular").slick({
            dots:true,
            infinity:true,
            slideToShow: 3,
            slidesToScroçç: 3
        })
    })
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick/slick.min.js"></script>

</html>