<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
    .navbar-collapse.collapse {
    display: flex !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
    }
    .btn-outline-success:hover {
    color: #fff !important;
    }
    .btn-default {
    color: #fff !important;
    background-color: #17a2b8 !important;
    border-color: #17a2b8;
    transition: background-color 0.3s;
    }
	.btn-default:hover{
        background-color:#17a2b8;
        color: #fff;
    }
    .btn-default:active {
            background-color: #8000ff;
            color: #fff;
    }
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

    if(empty($_GET['txtBuscar'])){
        echo "<html><script>location.href='index.php'</script></html>";
    }
    $pesquisa = $_GET['txtBuscar'];
    $consulta = $cn->query("select * from vw_pelucia where nome_urso like concat('%','$pesquisa','%') or nome_colecao like concat ('%','$pesquisa','%') ");
    if($consulta->rowCount() == 0){
        echo "<html><script>location.href='erro2.php'</script></html>";
    }
	
	
	?>
	
<div class="container-fluid">
	
    <?php while( $exibe = $consulta ->fetch(PDO::FETCH_ASSOC)){ ?>
	
        <div class="row" style="margin-top: 15px;">
            
            <div class="col-sm-1 col-sm-offset-1"><img src="img/<?php echo $exibe['img_urso']; ?>.png" class="img-responsive"></div>
            <div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nome_urso'];?></h4></div>
            <div class="col-sm-2"><h4 style="padding-top:20px">$<?php echo number_format($exibe['preco'], 2, ',', '.'); ?> </h4></div>
            <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
            <a href="detalhes.php?cd=<?php echo  $exibe['id_urso'];?>">
                <button class="btn btn-lg btn-block btn-default">
                        
                    <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
                        
                </button>
            </a>
            
            
            </div> 
                    
        </div>		
	<?php }?>

	
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>