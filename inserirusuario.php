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

    if ($consulta->rowCount() == 1) {
        header('location: erro1.php');
    } else {
        $incluir = $cn->query("
            INSERT INTO tbl_usuario(nome_usuario, dc_email, dc_senha, dc_status, dc_endereco, dc_cidade, num_cep)
            VALUES ('$nome', '$email', '$senha', '0', '$end', '$cidade', '$cep')
        ");
    
        header('location: ok.php');
    }
    
?>