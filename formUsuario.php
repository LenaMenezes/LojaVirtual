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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery-mask.js"></script>

    <title>Plush Planet</title>

    <style>

        .title {
        text-align: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        margin: 10px 0 30px 0;
        font-size: 28px;
        font-weight: 800;
        margin-left: 10px;
        }


        .navbar{
            margin-bottom: 0;
        }

        .container-fluid {
        width: 600px;
        background-color: rgb(255, 255, 255);
        padding: 30px 30px 30px 30px;
        border-radius: 30px;
        box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.062);
        }

        .form {
        width: 540px;
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 15px;
        }

        .input {
        border-radius: 20px;
        border: 1px solid #c0c0c0;
        outline: 0 !important;
        box-sizing: border-box;
        padding: 12px 15px;
        }

        .form-btn {
        padding: 10px 15px;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        border-radius: 20px;
        border: 0 !important;
        outline: 0 !important;
        background: teal;
        color: white;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
            
        .button {
        margin-top: 20px;
        margin-left: 175px;
        position: relative;
        width: 200px;
        overflow: hidden;
        height: 3rem;
        padding: 0 2rem;
        border-radius: 1.5rem;
        background: #3d3a4e;
        background-size: 400%;
        color: #fff;
        border: none;
        }

        .button:hover::before {
        transform: scaleX(1);
        }

        .button-content {
        position: relative;
        z-index: 1;
        cursor: pointer;
        }
        .button-content a {
        text-decoration: none;
        color: #fff;
        }

        .button::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        transform-origin: 0 50%;
        width: 100%;
        height: inherit;
        border-radius: inherit;
        background: linear-gradient(
            82.3deg,
            rgba(150, 93, 233, 1) 10.8%,
            rgba(99, 88, 238, 1) 94.3%
        );
        transition: all 0.475s;
        }

        .button:hover {
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adiciona uma sombra ao passar o mouse sobre o botão */
        }

		
    </style>
	
    <script>
	
        $(document).ready(function(){
            $("#cep").mask("00000-000");
        });
    </script>
	
</head>

<body>
	
    <?php
        
        include 'conexao.php';	
        include 'nav.php';
        include 'cabecalho.html';
        
        ?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		   
								
            <form class="form">
                <p class="title">Create account</p>
                <input type="text" class="input" placeholder="Name" name="nome" required id="nome">
                <input type="text" class="input" placeholder="Sobrenome"  name="sobrenome" required id="sobrenome">
                <input type="email" class="input" placeholder="Email" required id="email" name="email">
                <input type="password" class="input" placeholder="Password" required id="senha" name="senha">
                <textarea name="endereco" rows="1" class="input" placeholder="Endereço" required id="endereco"></textarea>
                <input name="cidade" type="text" class="input" required id="cidade" placeholder="Cidade">
                <input type="text" name="cep" class="input" placeholder="Cep" required id="cep">

                <!-- <button class="form-btn">Create account</button>    -->
                <button type="submit" class="button">
                    <span class="button-content"><a href="">Cadastre-se</a></span>
                </button>
            </form>		
		</div>
	</div>
    <br><br>
	

	<?php include 'rodape.html' ?>
</body>
</html>