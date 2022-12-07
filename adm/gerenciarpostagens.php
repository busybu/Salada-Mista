<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin() || $_SESSION['adm'] != 1){
        echo "<script> alert('Não autorizado.') </script>";
        redirectLogin();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admhome.css">
    <link rel="stylesheet" href="../css/admpostagens.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-box">
            <p>Olá,
                <?php echo $_SESSION['loginUser']; ?>
            </p>
            <div class="right-nav">
                <a href="home.php">Voltar</a>
                <img src="../img/5.png" alt="">
            </div>
        </div>
    </header>
    <nav class="menu-bar">
        <div class="category">
            <a href="#/titulo?=Proteção" class="bold">Proteção</a>
            <a href="#/titulo?=Proteção">Ist</a>
            <a href="#/titulo?=Proteção">Contraceptivos</a>
            <a href="#/titulo?=Proteção">Preservativo</a>
        </div>
        <div class="category">
            <a href="#/id?=1" class="bold">Fertilidade</a>
            <a href="#/id?=1">Gravidez</a>
            <a href="#/id?=1">Gestação</a>
        </div>
        <div class="category">
            <a href="#/id?=1" class="bold">Ciclo Menstrual</a>
            <a href="#/id?=1">Menstruação</a>
        </div>
        <div class="category">
            <a href="#/id?=1" class="bold">Anatomia</a>
            <a href="#/id?=1">Masculino</a>
            <a href="#/id?=1">Feminino</a>
        </div>
    </nav>
    <section class="main">
        <div class="main-box">
            <span>Titulo da postagem</span>
            <div class="content">
                <div class="input-box">
                    <label for="img-principal">Imagem principal</label>
                    <input type="file" name="img-principal" id="">
                </div>
                <div class="input-box">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="" placeholder="None">
                </div>
                <div class="input-box">
                    <label for="texto1">Texto 1</label>
                    <input type="text" name="texto1" id="" placeholder="Insira o texto 1">
                </div>
                <div class="input-box">
                    <label for="texto2">Texto 2</label>
                    <input type="text" name="texto2" id="" placeholder="Insira o texto 2">
                </div>
                <div class="input-box">
                    <label for="img-texto">Imagem do texto</label>
                    <input type="file" name="img-texto" id="">
                </div>
            </div>
        </div>
    </section>
</body>
</html>