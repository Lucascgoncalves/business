<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" href="assets/tecnologia.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="produto.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#"><img src="assets/logoif.png" class="img-fluid" alt="logo_image_nav"
                    width="120" id="img-fluid"></a>
            <button id="menu_btn" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><img src="assets/menu-aberto.png" alt="menu_img" width="30" style="width: 10;"></span>
            </button>
            <div class="collapse justify-content-between navbar-collapse" id="navbarNavDropdown">


                <a class="nav-link active" aria-current="page" href="home.html" id="nav_link">HOME</a>


                <a class="nav-link" href="#" id="nav_link">NÓS</a>


                <li class="nav-item dropdown" style="list-style: none;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="nav_link">
                        SERVIÇOS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


                <a class="nav-link" href="" id="nav_link">LANDING PAGES</a>


                <a class="nav-link" href="#" id="nav_link">SUPORTE</a>

                <div id="profile" title="Ir para perfil"><i class="fa-solid fa-arrow-down" id="arrow"></i><strong
                        id="strong">Fulano</strong>
                    <div id="image_div"><img src="assets/pessoa.jpg" alt="photo_image" id="photo"></div>
                </div>
            </div>

        </div>
    </nav>
    <div class="container" id="super_container">
        <h1 id="h1_principal">Administração - Landing Page</h1>
        <div id="container1" class="container-fluid">
            <div class="container" id="container_left">
                <div class="container-fluid" id="imagem_principal_produto">
                    <img src="assets/logo.png" alt="imagem principal" class="img-fluid">
                </div>
            </div>

            <div class="container" id="container_right">
                <p id="text1_container_right">Lorem ipsum praesent ac massa at ligula reet﻿ est iaculis. Vivamus est
                    mist aliquet elit ac nisl.</p>
                <div id="orcamento">
                    Realizar Orçamento<i class="fa-solid fa-arrow-right" id="arrow_right"
                        onclick="window.location.href='home.html'"></i>
                </div>
                <div id="avaliacao" class="container-fluid">
                    <p id="text2_container_right">Avalie este produto</p>
                    <div id="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="imagens_produto">
            <img src="assets/pink.jpg" alt="imagem-principal">
            <img src="assets/pink.jpg" alt="imagem-principal">
            <img src="assets/pink.jpg" alt="imagem-principal">
            <img src="assets/pink.jpg" alt="imagem-principal">
        </div>
        <div class="container-fluid" id="container2">
            <h1 style="display: flex; align-items: center; gap: 1rem;">Compare com outros produtos similares<i id="arrow_more" onclick="window.location.href='home.html'">></i></h1>
            <div id="outros_produtos" class="container-fluid">
                <img src="assets/logo.png" alt="imagem-principal">
                <img src="assets/logo.png" alt="imagem-principal">
                <img src="assets/logo.png" alt="imagem-principal">
                <img src="assets/logo.png" alt="imagem-principal">
                
            </div>
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top border-bottom"
        style="background-color: black; width: 100vw; height: auto;">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="text" style="color: white;">&copy; 2023 if-business - Todos os direitos reservados</span>
        </div>

        <ul class="nav col-md-4 justify-content-start list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"
                        style="color:white; font-size: 30px;"> </i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-linkedin"
                        style="color:white; font-size: 30px;"> </i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-github"
                        style="color:white; font-size: 30px;"> </i></a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
