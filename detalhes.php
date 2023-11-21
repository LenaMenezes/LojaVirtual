<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Plush Planet | Detalhes Produto</title>
<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

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
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

	if(!empty($_GET['cd'])){
	$cd_livro = $_GET['cd'];
	$consulta = $cn ->query("select * from vw_pelucia where id_urso='$cd_livro'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	}
	else{
		header("location:index.php");
	}

	
	?>
	
<div class="container-fluid">
	
	
	
	<div class="row">
		
		 <div class="col-sm-4 col-sm-offset-1">
			 
			 <h1>Detalhes do Produto</h1>
			 
			 <img src="img/<?php echo $exibe['img_urso'];?>.png" class="img-responsive" style="width:100%;">
		
				
		</div>
		
				
 		 <div class="col-sm-7"><h1><?php echo $exibe['nome_urso'];?></h1>
		<br>		
		<p><?php echo $exibe['descricao'];?></p>
		
		<p>Coleção: <?php echo $exibe['nome_colecao'];?></p>

		<p>Estoque: <?php echo $exibe['quantidade_estoque'];?></p>
		
		<p>Preço: R$<?php echo number_format($exibe['preco'], 2, ',', '.'); ?></p>
		<br>
			 
		<button class="btn btn-lg btn-success">Comprar</button>
				
		</div>		
	

	
</div>
<br><br><br>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>