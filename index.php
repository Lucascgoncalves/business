<?php 
include "conexao.php";
extract($_POST);
if(isset($login)){

    $sql = "SELECT email, senha, nome_usuario FROM usuarios WHERE email = $usuario";
    $result = banco($servidor, $user, $senha, $nome_db, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "encontrado";
    } else{
        echo "nada encontrado.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="assets/tecnologia.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#"><img src="assets/logoif.png" class="img-fluid" alt="logo_image_nav"
                    width="150" id="img-fluid"></a>
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


                <a class="nav-link" href="produto.html" id="nav_link">LANDING PAGES</a>


                <a class="nav-link" href="#" id="nav_link">SUPORTE</a>

                <button type="button" class="btn btn-success" id="btn_nav"><i class="fa-regular fa-user"
                        id="nav_link"></i>&nbsp;CONTATO</button>
            </div>

        </div>
    </nav>

    <div class="container-sm" id="container_central">
        <div class="container" id="container1">
            <div id="frase1">IF-BUSINESS, A SUA EMPRESA DE TECNOLOGIA!</div>
            <h1 id="h1_sistema">Desenvolva o seu <br><span id="span_sistema">sistema</span> conosco</h1>
            <p id="container1_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ipsum augue,
                tincidunt ut arcu id, venenatis efficitur leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vestibulum ipsum augue, tincidunt ut arcu id, venenatis efficitur leo.</p>
            <div class="btn-group" role="group" id="btn_group">
                <button type="button" class="btn btn-success" name="btn_saber_mais">Saber mais</button>
                <button type="button" class="btn btn-success" name="btn_cadatro" onclick="window.location.href='cadastro.php'">Cadastre-se</button>
            </div>
        </div>

        <div class="container-fluid" id="container2">
            <h3>Faça seu <span id="login">Login</span></h3>
            <p style="width: 100%; color: #1DC465; margin-top: -1rem;">____________________</p>
            <form action="index.php" id="form_container2" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"
                            id="span_icon"></i></span>
                    <input type="text" class="form-control" placeholder="Usuário ou e-mail" aria-label="Username"
                        aria-describedby="basic-addon1" id="inputs_login" name="usuario">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"
                            id="span_icon"></i></span>
                    <input type="text" class="form-control" placeholder="Sua senha" aria-label="Username"
                        aria-describedby="basic-addon1" id="inputs_login" name="senha">

                </div>
                <button type="submit" class="btn btn-success" id="btn_form" name="login">Login</button>
                <div style="display: flex; width: 100%; justify-content: space-around; margin-top: 1rem;" id="div_rodape">
                    <div id="div_remember">
                        <label for="flexCheckDefault" style="cursor: pointer;" id="check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="check_relembrar">Relembrar
                            senha
                        </label>
                    </div>
                    <a href="#" style="color: white;">Esqueci minha senha</a>
                </div>
            </form>
        </div>
    </div>
    <a href="#" style="position:fixed;width:60px;height:60px;bottom:40px;right:0px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
z-index:1000;" target="_blank" id="ico_whatsapp">
        <i style="margin-top:16px; z-index: 3;" class="fa-brands fa-whatsapp"></i>
</a>


            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top" style="background-color: black; width: 100vw; height: auto;">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <span class="text" style="color: white;">&copy; 2023 if business - Todos os direitos reservados</span>
                </div>

                <ul class="nav col-md-4 justify-content-start list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram" style="color:white; font-size: 30px;"> </i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-linkedin" style="color:white; font-size: 30px;"> </i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-github" style="color:white; font-size: 30px;"> </i></a></li>
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
