<?php
  require_once('../adm/functions.php');

  $mysqli = returnConnection();
  if (!returnConnection())
    Error404();
  else{
    
    $titulo = $_GET['Title'];

    $result = $mysqli -> query("SELECT * FROM posts WHERE posts.title = '$titulo'");
    if ($result->num_rows == 0)
      Error404();
    if ($row = $result->fetch_assoc()) {
      $text1 = $row['text'];
      $text2 = $row['text1'];
      $img = $row['img'];
      $img_background = $row['imgbackground'];
    } 
  }
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>
    Salada Mista |
    <?php echo $titulo ?>
  </title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/scrollreveal.min.js">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/icon_pagina.png">


</head>

<header>
    <?php
      require_once("sidebar.php")
    ?>
  </header>

<body>
  <div class="container-main" style="display: flex;">
  <x style="margin-right: 75px;height: 100%;"></x>
  <div class="main"style="display: flex; flex-direction: column;">
  <div class="background-pages">
    <img src="<?php echo $img_background?>" alt="imagem_capa">
  </div>
  <div class="conteudo-page">
      <div class = "title-conteudo-page">
        <h1>
          <?php echo $titulo ?>
        </h1>
      </div>
      <div class = "text-conteudo-page">
        <p>
          <?php
            echo $text1;
          ?>
        </p>
      </div>
      <div class = "text-conteudo-page">
        <p>
          <?php
            echo $text2;
          ?>
        </p>
      </div>
      <div class='div100'>
        <img src = "<?php echo $img?>">
      </div>
    </div>
      
      <section class="footer" style="background-color: #ecf0f1">
        <?php 
          require_once("footer.php")
        ?>
        </section>
      
    </div>