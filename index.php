<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Salada Mista</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/scrollreveal.min.js">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<header>
   <!--SIDEBAR AQUI // giu, só precisa importar o sidebar e o footer usando os comandinhos lá do php-->
    <?php
      require_once("sidebar.php")
    ?>
  </header>
<body>  
  <!--CARROSSEL-->
  <div class="background-img d-flex">
    <img src="img/logo.png" alt="imagem_capa">
  </div>
  <!--CARD SLIDES-->
  <section class="card-slide">
    <div id="carouselExampleControlsSmallScreen" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner-card">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <img src="/img/carousel_img1.jpg" class="d-block w-100" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="/img/carousel_img2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="/img/carousel_img3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <img src="/img/carousel_img4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="/img/home_tangerina.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="/img/home_banana.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem Ipsum</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur
                  purus. Vulputate ut pharetra sit amet aliquam. Sed odio morbi quis commodo odio aenean sed
                  adipiscing.</p>
                <a href="#" class="btn btn-primary">Entre!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <h1>Nosso Conteúdo</h1>
  <section class="divs-card">
    <div class="div1">
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="div2">
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card1" style="width: 18rem;">
      <img src="..." class="card-img-top1" alt="...">
      <div class="card-body1">
        <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  </section>
  <!--FOOTER-->
  
  <footer>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <?php 
    require_once("footer.php")
  ?>
  </body>

</html>
