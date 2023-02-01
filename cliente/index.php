<h2>
 <strong>  <?php echo $_GET['cliente'];?> </strong>, Bem vindo à sua área de cliente
</h2>
<?php 
$hash64 = base64_encode('1234');
echo $hash64;
echo '<br>';
echo base64_decode($hash64);
?>