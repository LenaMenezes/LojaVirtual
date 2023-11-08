<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'conexao.php';
        $consulta = $cn->query('select * from vw_pelucia');
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){

        echo $exibe['nome_urso'].'<br>';
        echo $exibe['descricao'].'<br>';
        echo $exibe['preco'].'<br>';
        echo '<hr>';
        }
    ?>
</body>
</html>