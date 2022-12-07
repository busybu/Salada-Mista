<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin() || $_SESSION['adm'] != 1){
        echo "<script> alert('Não autorizado.') </script>";
        redirectLogin();
    }
    $conn = returnConnection();
    
    $title = $_GET['titulo'];
    
    $text = "SELECT * FROM posts WHERE title = '$title'";
    $result = $conn->query($text);
    if ($result->num_rows == 0)
    {
        echo "<script> alert('Postagem não encontrada') </script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/gerenciarpostagens.php?titulo=Proteção'/>";
    }
    $row = $result->fetch_assoc();
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
            <a href="?titulo=Proteção" class="bold">Proteção</a>
            <a href="?titulo=Ist">Ist</a>
            <a href="?titulo=Contraceptivos">Contraceptivos</a>
            <a href="?titulo=Preservativo">Preservativo</a>
        </div>
        <div class="category">
            <a href="?titulo=Fertilidade" class="bold">Fertilidade</a>
            <a href="?titulo=Gravidez">Gravidez</a>
            <a href="?titulo=Gestação">Gestação</a>
        </div>
        <div class="category">
            <a href="?titulo=Ciclo Menstrual" class="bold">Ciclo Menstrual</a>
            <a href="?titulo=Menstruação">Menstruação</a>
        </div>
        <div class="category">
            <a href="?titulo=Anatomia" class="bold">Anatomia</a>
            <a href="?titulo=Masculino">Masculino</a>
            <a href="?titulo=Feminino">Feminino</a>
        </div>
    </nav>
    <section class="main">
        <form action="../user/form.php" method="POST">
            <div class="main-box">
                <span><?php echo $_GET['titulo'];?></span>
                <div class="content">
                    <div class="input-box">
                        <label for="img-principal">Link Imagem principal</label>
                        <textarea type="text" name="imgbackground" id=""><?php echo $row['imgbackground'] ?></textarea>
                    </div>
                    <div class="input-box">
                        <label for="texto1">Texto 1</label>
                        <textarea type="text" name="text" class="floatTextarea2" placeholder="Insira o texto 1"><?php echo $row['text'] ?></textarea>
                    </div>
                    <div class="input-box">
                        <label for="texto2">Texto 2</label>
                        <textarea type="text" name="text1" class="floatTextarea2" placeholder="Insira o texto 1"><?php echo $row['text1'] ?></textarea>
                    </div>
                    <div class="input-box">
                        <label for="img-texto">Imagem do texto</label>
                        <textarea type="text" name="img" id=""><?php echo $row['img'] ?></textarea>
                    </div>
                </div>
                <button class="btn btn-confirm" type=submit value=<?php echo $_GET['titulo'] ?> name="alteraPost">Alterar</button>
            </div>
        </form>
    </section>
</body>
</html>