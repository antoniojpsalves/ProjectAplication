<?php
session_start();
//unset($_SESSION['nomeDaSessão']);
session_destroy();
header('Location: index.php');
exit();
?>