<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $dell = mysqli_query($conexao,"DELETE FROM controle WHERE id ='".$_GET['id']."' ");
    
    
    if (mysqli_affected_rows($conexao)) {
        header("Location: historico.php");
    }else{
        header("Location: index.php");
    }
 ?>