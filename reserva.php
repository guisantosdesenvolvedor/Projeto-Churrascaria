<?php 
    include 'conn/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <?php include 'menu_reserva.php'?>

    <?php include 'carrossel.php'?>

    
<div class="card-deck">
  <div class="card modal-body modal-content">
    <img class="card-img-top" src="images/strudel.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h1 class="card-title">Fazer Cadastro</h1>
      <p class="card-text">Se você não tem cadastro clique aqui e faça.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card modal-body modal-content">
    <img class="card-img-top" src="images/strudel.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h1 class="card-title">Fazer Reserva</h1>
      <p class="card-text">Caso tenha um cadastro e queira fazer um pedido, clique aqui. </p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card modal-body modal-content">
    <img class="card-img-top" src="images/strudel.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h1 class="card-title">Ver reserva ja feita</h1>
      <p class="card-text">Caso tenha uma reserva e queira ver se ja foi aceita, clique aqui.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery/-2.2.0.min.js" type="text/javascript"></script>
</html>