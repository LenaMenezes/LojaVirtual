<?php
    include 'conexao.php';
    session_start(); //iniciando uma sessao
    $Vemail = $_POST['txtemail'];
    $Vpassword = $_POST['txtpassword'];

    // echo $Vpassword.'<br>';
    // echo $Vemail.'<br>';
    
    $consulta = $cn->query("select cod_usuario, nome_usuario, dc_email, dc_senha,
    dc_status from tbl_usuario where dc_email = '$Vemail' and dc_senha = '$Vpassword'");

    if($consulta->rowCount() == 1){
        // echo 'Usuario está cadastrado';
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['ID'] = $exibeUsuario['cod_usuario'];
        header('location:index.php');

    }
    else{
        // echo 'Usuario não cadastrado';
        header('location:erro.php');
    }
?>