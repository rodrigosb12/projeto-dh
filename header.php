<html lang="en">
<head>
    <title>Home - Wimart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cae312f00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo/estilo-index.css">
    <link rel="stylesheet" href="estilo/estilo-cadastro.css">
    <link rel="stylesheet" href="estilo/estilo-listaprod.css">
    <link rel="stylesheet" href="estilo/estilo-product.css">
    <link rel="stylesheet" href="estilo/estilo-sobrenos.css">
    <link rel="stylesheet" href="estilo/estilo-modal-login.css">
    <link rel="stylesheet" href="estilo/estilo-carrinho.css">
        
</head>

<body>
<header>
    <?php require_once('modal-login.php'); ?>

        <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: white;">
            <a class="navbar-brand" href="index.php">
                <img src="img/logos/Wimart-logo-right-icon.png" alt="logotipo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="listaprod.php">Shop<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">Studio</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Comunidades
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-uppercase" href="#">Audio</a>
                            <a class="dropdown-item text-uppercase" href="#">Relógios</a>
                            <a class="dropdown-item text-uppercase" href="#">Outdoors</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 text-uppercase" type="busca" placeholder="Busca"
                        aria-label="Busca">
                    <a href="" class="text-reset"><i class="fas fa-search"></i></a>
                </form>
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">Sign Up<span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="modal-login.php" data-toggle="modal" data-target="#modalExemplo">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

     







