<?php
    include 'conexao.php';


    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $end = $_POST['txtendereco'];
    $cidade = $_POST['txtcidade'];
    $cep = $_POST['txtcep'];

    $consulta = $cn->query("select dc_email from tbl_usuario where dc_email='$email'");

    $exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

    if ($consulta->rowCount() == 1){
        echo 'email ja cadastrado!';
    }
    else{
        echo 'usuario pode ser cadastrado';
    }
?>