<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['password'])){
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT user_id, email FROM `usuario` WHERE email = '{$email}' AND password = md5('{$password}')";

//echo $query, exit();

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

//echo $row, exit();

if ($row == 1){
    $_SESSION['usuario'] = $email;
    header('Location:painel.php');
    exit();

} else {
    $_SESSION['nao_autenticado']= true;
    header('Location: index.php');
    exit();
}

?>