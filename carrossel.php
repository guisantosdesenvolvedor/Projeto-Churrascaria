<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Carousel</title>
</head>
<body>
    <div id="banners" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banners" data-slide-to="0" class="active"></li>
            <li data-target="#banners" data-slide-to="1"></li>
            <li data-target="#banners" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/banner_1.jpg" alt="" class="center-block">
            </div>
            <div class="item ">
                <a href="login_cliente.php"><img src="images/Banner para Mercado Shops Natal Ofertas Elegante Preto (1).png" alt="" class="center-block"></a>
            </div>
            <div class="item ">
                <img src="images/imagem2carros.png" alt="" class="center-block">
            </div>
        </div>
        <a href="#banners" class="left carousel-control" role="button" data-side="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#banners" class="right carousel-control" role="button" data-side="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</body>
</html>