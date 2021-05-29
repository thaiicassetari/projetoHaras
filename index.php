<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Haras</title>
  </head>
  <body style="background-image: url('img/horse.jpeg'); background-repeat:no-repeat;">
    <img src="img/cavalos1.png" width="1600" height="140">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                 <li class="nav-item active">
                    <a class="nav-link" href="index.php"><em><img src="img/cav.png" width="13" height="20"> H.Alazão</em> <span class="sr-only">(current)</span></a>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Haras
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="?page=haras-cadastrar">Cadastrar</a>
                      <a class="dropdown-item" href="?page=haras-consultar">Consultar</a>
                    </div>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Funcionário
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="?page=funcionario-cadastrar">Cadastrar</a>
                      <a class="dropdown-item" href="?page=funcionario-consultar">Consultar</a>
                    </div>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Clientes
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="?page=clientes-cadastrar">Registrar</a>
                      <a class="dropdown-item" href="?page=clientes-consultar">Consultar</a>
                    </div>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Atividades Equinas
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="?page=atividades-equinas-cadastrar">Agendar</a>
                      <a class="dropdown-item" href="?page=atividades-equinas-consultar">Consultar</a>
                    </div>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cavalos
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="?page=cavalos-cadastrar">Cadastrar</a>
                      <a class="dropdown-item" href="?page=cavalos-consultar">Consultar</a>
                    </div>
                 </li>
        
                </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <?php
                    include("config.php"); #conexão
                    switch (@$_REQUEST["page"]) {
                      //haras
                      case 'haras-cadastrar':
                        include("haras-cadastrar.php");
                        break;

                        case 'haras-consultar':
                        include("haras-consultar.php");
                        break;

                        case 'haras-editar':
                        include("haras-editar.php");
                        break;

                        case 'haras-salvar':
                        include("haras-salvar.php");
                        break;

                        //funcionario
                      case 'funcionario-cadastrar':
                        include("funcionario-cadastrar.php");
                        break;

                        case 'funcionario-consultar':
                        include("funcionario-consultar.php");
                        break;

                        case 'funcionario-editar':
                        include("funcionario-editar.php");
                        break;

                        case 'funcionario-salvar':
                        include("funcionario-salvar.php");
                        break;

                        //clientes
                      case 'clientes-cadastrar':
                        include("clientes-cadastrar.php");
                        break;

                        case 'clientes-consultar':
                        include("clientes-consultar.php");
                        break;

                        case 'clientes-editar':
                        include("clientes-editar.php");
                        break;

                        case 'clientes-salvar':
                        include("clientes-salvar.php");
                        break;

                        //atividades-equinas
                      case 'atividades-equinas-cadastrar':
                        include("atividades-equinas-cadastrar.php");
                        break;

                        case 'atividades-equinas-consultar':
                        include("atividades-equinas-consultar.php");
                        break;

                        case 'atividades-equinas-editar':
                        include("atividades-equinas-editar.php");
                        break;

                        case 'atividades-equinas-salvar':
                        include("atividades-equinas-salvar.php");
                        break;

                        //cavalos
                      case 'cavalos-cadastrar':
                        include("cavalos-cadastrar.php");
                        break;

                        case 'cavalos-consultar':
                        include("cavalos-consultar.php");
                        break;

                        case 'cavalos-editar':
                        include("cavalos-editar.php");
                        break;

                        case 'cavalos-salvar':
                        include("cavalos-salvar.php");
                        break;
                                    
                      default:
                        include("main.php");
                    }
                ?>
            </div>
            
        </div>

    </div>

    <br>
   <footer>
       <p align="center"><em><strong>&copy;ThaianeCassetari</strong></em></p>
   </footer>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>