<?php
$servidor = "localhost"; // "Localhost" deve ser em minúsculas
$usuario = "HelenaM";
$senha = "123456";
$banco = "db_Plush_Planet"; // Faltou um ponto e vírgula no final desta linha

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Defina o modo de erro para exceções
 