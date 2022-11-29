<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Salada Mista</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/scrollreveal.min.js">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/perguntas.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/icon_pagina.png">
</head>

<header>
  <?php
  require_once("sidebar.php")
  ?>
</header>

<body>
  <div class="container-main" style="display: flex; flex-direction: column; margin-left:75px;">
    <div class="main" style="display: flex; flex-direction: column;">
      <div class="background-img">
        <div class="text-background" style="margin:auto;">
          <h1>Blog De Perguntas</h1>
        </div>
      </div>
    <div class = "card-container">
    <form action="form.php" method="POST">
      <div class="card-divisor">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="quest"></textarea>
          <label for="floatingTextarea2">Insira aqui sua pergunta</label>
        </div>
        <button class="btn btn-primary" type="submit" name="confirmQuest">Enviar</button>
      </div>
    </form>

    <?php
      require_once('../adm/functions.php');
      $conn = returnConnection();

      $result = $conn -> query('SELECT texto_pergunta, resposta FROM perguntas ORDER BY id DESC');
      $quant = 1;
      while($row = $result->fetch_assoc())
      {
        $row["texto_pergunta"];
        echo '<div class ="card-divisor">';
          echo '<div class="card">';
            echo '<div class="card-header">';
              echo 'Pergunta ', $quant;
            echo '</div>';
              echo '<div class="card-body">';
                echo '<blockquote class="blockquote mb-0">';
                  echo '<p>';
                  echo $row['texto_pergunta'];
                  echo '</p>';

                  echo '<footer class="blockquote-footer">';
                  echo $row['resposta'];
                  echo '</footer>';
                echo '</blockquote>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        $quant += 1;
      }
    ?>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>