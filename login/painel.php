<?php
include('verifica_login.act.php');

//print_r($_SESSION); exit();
?>
<h2> Seja bem vindo ! <br/> <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php"> <b> Sair </b> </a></h2>
