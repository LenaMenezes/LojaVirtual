<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS projeto -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Plush Planet</title>
    <style>
        .col-sm-3 img{
            width:311.5px;
            height: 310.23px;
            border:none ;
        }
        .nome{
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
        include 'nav.php';
        include 'cabecalho.html';
        include 'conexao.php';

        $consulta = $cn->query("select id_urso,nome_urso, preco, img_urso, quantidade_estoque from vw_pelucia where lancamento = 's'");
    ?>

<div class="container-fluid">
    <div class="row">
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-3">
                <img src="img/<?php echo $exibe['img_urso']; ?>.png" class="img-responsive" style="width: 100%" alt="">
                <div>
                    <h4>
                        <?php echo mb_strimwidth($exibe['nome_urso'], 0, 30, '...'); ?>
                    </h4>
                </div>
                <div>
                    <h5>
                        $<?php echo number_format($exibe['preco'], 2, ',', '.'); ?>
                    </h5>
                </div>
                <div class="text-center">
                    <a href="detalhes.php?cd=<?php echo  $exibe['id_urso'];?>">
                        <button class="btn btn-lg btn-block btn-info">
                            <span class="bi bi-info-circle-fill"> Detalhes</span>
                        </button>
                    </a>
                </div>

                <div class="text-center">
                    <?php if ($exibe['quantidade_estoque'] > 0) { ?>
                        <button class="btn btn-lg btn-block btn-success" style="margin-top: 5px; margin-bottom: 30px;">
                            <span class="bi bi-cart-plus"> Comprar</span>
                        </button>
                    <?php } else { ?>
                        <button class="btn btn-lg btn-block btn-danger" disabled style="margin-top: 5px; margin-bottom: 30px;">
                            <span class="bi bi-x-octagon"> Indisponível</span>
                        </button>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

    <br>

    <?php include 'rodape.html'?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>