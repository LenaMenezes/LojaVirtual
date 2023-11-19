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

    <title>Plush Planet | Login de usuário</title>
	
    <style>
        .navbar{
            margin-bottom: 0;
        }    
        .erro {
            position: relative;
            width: 100%; /* Alterado para 100% para ocupar a largura disponível */
            max-width: 480px; /* Adicionado para limitar a largura máxima a 480 pixels */
            margin: 0 auto; /* Adicionado para centralizar horizontalmente */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgb(255, 255, 255);
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.062);
        }
        
        .btn-1{
            position: relative;
            width: 100%;
            border: 2px solid #8000ff;
            background-color: #8000ff;
            height: 40px;
            color: white;
            font-size: .8em;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 30px;
            margin: 10px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            
        }
        .btn-1:hover {
            background-color: #8000ff;
        }
        .btn-1:active {
            background-color: #8000ff;
        }

    </style>
	
</head>

<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="erro">
				
				<h2>Email já em uso !!!</h2>
				
				<a href="formusuario.php" class="btn-1" role="button">Tentar Novamente</a>
				
				<a href="esquecisenha.php" class="btn-1" role="button">Esqueci a senha</a>
				
							
			</div>
		</div>
	</div>
    <br><br>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>