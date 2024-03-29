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
    <link rel="stylesheet" href="home.css">
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


                <a class="nav-link active" aria-current="page" href="" id="nav_link">HOME</a>


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

                <div id="profile" title="Ir para perfil"><i class="fa-solid fa-arrow-down" id="arrow"></i><strong id="strong">Fulano</strong><div id="image_div"><img src="assets/pessoa.jpg" alt="photo_image" id="photo"></div></div>
            </div>

        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <h1 id="h1_carousel">Idealize o seu site aqui e faça o seu orçamento</h1>
        <div class="carousel-inner" id="content_carousel">
          <div class="carousel-item active">
            <img src="assets/backgound.jpg" class="d-block w-100" alt="image1" id="image_corousel"> 
          </div>
          <div class="carousel-item">
            <img src="assets/pink.jpg" class="d-block w-100" alt="image2" id="image_corousel">
          </div>
          <div class="carousel-item">
            <img src="assets/homem-trabalho.jpeg" class="d-block w-100" alt="image3" id="image_corousel">
          </div>
        </div>
      </div>
      
    <div class="container-sm" id="container2">
        <div class="container" id="container2inner">
            <div id="container2one">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar"
                        aria-label="Recipient's username" aria-describedby="basic-addon1" id="input_container2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-brands fa-searchengin"></i></span>
                </div>
                <select class="form-select" aria-label="Default select example" id="select">
                    <option selected>Categoria</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button type="button" class="btn" id="btn_cart" title="Carrinho de compras"><i class="fa-solid fa-cart-shopping" id="icon_cart"></i></button>
        </div>
        <div class="container text-center" id="images_galery">
            <div class="row">
              <div class="col">
                <img src="assets/logo.png" class="img-thumbnail" alt="images_cont2">
                <p>Administração</p>
              </div>
              <div class="col">
                <img src="assets/logo.png" class="img-thumbnail" alt="images_cont2">
                <p>Administração</p>
              </div>
              <div class="col">
                <img src="assets/logo.png" class="img-thumbnail" alt="images_cont2">
                <p>Administração</p>
              </div>
            </div>
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top border-bottom" style="background-color: black; width: 100vw; height: auto;">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="text" style="color: white;">&copy; 2023 if-business - Todos os direitos reservados</span>
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
