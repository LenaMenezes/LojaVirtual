<?php
    include 'conexao.php';
    session_start(); //iniciando uma sessao
    $Vemail = $_POST['txtemail'];
    $Vpassword = $_POST['txtpassword'];   
    $consulta = $cn->query("select cod_usuario, nome_usuario, dc_email, dc_senha,
    dc_status from tbl_usuario where dc_email = '$Vemail' and dc_senha = '$Vpassword'");

    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);

        if($exibeUsuario['dc_status'] == 0){
            $_SESSION['ID'] = $exibeUsuario['cod_usuario'];
            $_SESSION['Status'] = 0;
            header('location:index.php');
        }
        else{
            $_SESSION['ID'] = $exibeUsuario['cod_usuario'];
            $_SESSION['Status'] = 1;
            header('location:index.php');
        }
     }
    else{
        header('location:erro.php');
    }
    ?>