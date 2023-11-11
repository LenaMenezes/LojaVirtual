<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/icon.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lancamento.php">Novidades</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pelúcias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="categoria.php?cat=Harry Potter">Harry Potter</a>
          <a class="dropdown-item" href="categoria.php?cat=Minecraft">Minecraft</a>
          <a class="dropdown-item" href="categoria.php?cat=Marvel">Marvel</a>
          <a class="dropdown-item" href="categoria.php?cat=Disney">Disney</a>
          <a class="dropdown-item" href="categoria.php?cat=cartoon network">Cartoon network</a>
          <a class="dropdown-item" href="categoria.php?cat=Gravity Falls">Gravity Falls</a>
          <a class="dropdown-item" href="categoria.php?cat=Animes Geral">Animes Geral</a>
          <a class="dropdown-item" href="categoria.php"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categoria.php">Outras</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    <?php if(empty($_SESSION['ID'])) { ?>
      <a class="link_login" href="form.php"><img class="login" src="img/login.png" alt="login">  Logon</a>      
    <?php } else {
      if($_SESSION["Status"] ==0){
        $consulta_usuario = $cn->query("select nome_usuario from tbl_usuario where cod_usuario = '$_SESSION[ID]'");
        $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
    ?> 
      <a class="link_login" href="#"><img class="login" src="img/user.png" alt="user">  <?php echo $exibe_usuario['nome_usuario'];?></a>      
      <a class="link_login" href="sair.php"><img class="login" src="img/login.png" alt="login">  Sair</a>
      <?php } else { ?>

        <a class="link_login" href="Adm.php"><button id="adm" class="btn btn-danger">Administrador</button></a>      
        <a class="link_login" href="sair.php"><img class="login" src="img/login.png" alt="login">  Sair</a>  
    <?php } }?>
    </div>
</nav>